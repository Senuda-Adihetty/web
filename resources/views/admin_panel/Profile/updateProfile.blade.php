<header class="mb-4">
    <h2 class="h5 text-dark">
        {{ __('Profile Information') }}
    </h2>
    <p class="text-muted small">
        {{ __("Update your account's profile information and email address.") }}
    </p>
</header>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="mt-4" enctype="multipart/form-data">
    @csrf
    @method('patch')



   @if ($user->image)
        <div class="mb-3">
            <label class="form-label">Current Slide
                Photo</label><br>
            <img src="{{ asset('storage/' . $user->image) }}" alt="Image" width="150">
        </div>
    @endif

    {{--  Upload New Slide Photo  --}}
    <div class="mb-3">
        <label for="image" class="form-label">
            Upload New Slide Photo
        </label>
        <input type="file" class="form-control" name="image" id="image">
    </div>



    <div class="mb-3">
        <label for="name" class="form-label">{{ __('Name') }}</label>
        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email', $user->email) }}" required autocomplete="username">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
            <div class="mt-2 small text-muted">
                {{ __('Your email address is unverified.') }}
                <button form="send-verification" class="btn btn-link p-0 m-0 align-baseline">
                    {{ __('Click here to re-send the verification email.') }}
                </button>
            </div>

            @if (session('status') === 'verification-link-sent')
                <div class="mt-2 text-success small">
                    {{ __('A new verification link has been sent to your email address.') }}
                </div>
            @endif
        @endif
    </div>

    <div class="d-flex align-items-center gap-3">
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

        @if (session('status') === 'profile-updated')
            <span class="text-muted small" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                {{ __('Saved.') }}
            </span>
        @endif

    </div>
</form>
