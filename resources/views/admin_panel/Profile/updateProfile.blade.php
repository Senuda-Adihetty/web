<header class="mb-4">
    <h2 class="h5">
        Profile Information
    </h2>
    <p class="text-muted small">
        Update your account, profile information and email address.
    </p>
</header>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="mt-4" enctype="multipart/form-data">
    @csrf
    @method('patch')

    <center>

        @if ($user->image)
            <div class="mb-3">
                <label class="form-label">
                    Current Profile Photo
                </label>
                <br>


                <img src="{{ asset('storage/' . $user->image) }}" alt="Image" width="150"
                    class="rounded-circle shadow" style="width: 150px; height: 150px;">
            </div>
        @endif
    </center>

    {{--  Upload New Slide Photo  --}}
      <div class="mb-3">
        <label for="image" class="form-label">
            Upload New Profile Photo
        </label>
        <input type="file" class="form-control" name="image" id="image">
    </div>



    <div class="mb-3">

        <label for="name" class="form-label">
            Name
        </label>

        <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">

        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

    </div>

    <div class="mb-3">

        <label for="email" class="form-label">
            Email
        </label>

        <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email', $user->email) }}" required autocomplete="username">

        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
            <div class="mt-2 small text-muted">
                Your email address is unverified.
                <button form="send-verification" class="btn btn-link p-0 m-0 align-baseline">
                   Click here to re-send the verification email.
                </button>
            </div>

            @if (session('status') === 'verification-link-sent')
                <div class="mt-2 text-success small">
                   A new verification link has been sent to your email address.
                </div>
            @endif
        @endif
    </div>

    <div class="d-flex align-items-center gap-3">
        <button type="submit" class="btn btn-primary">Update Profile</button>

        {{--  @if (session('status') === 'profile-updated')
            <span class="text-muted small" x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                {{ __('Saved.') }}
            </span>
        @endif  --}}

    </div>
</form>



