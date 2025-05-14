<header class="mb-4">
    <h2 class="h5">Delete Account</h2>
    <p class="small">
        Once your account is deleted, all of its resources and data will be <b class="text-danger"> permanently
            deleted.</b> Before deleting your account, please download any data or information that you wish to retain.
    </p>
</header>

<!-- Delete Button -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
    Delete Account
</button>

<!-- Modal -->
<div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" aria-labelledby="confirmUserDeletionLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" action="{{ route('profile.destroy') }}">
            @csrf
            @method('delete')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmUserDeletionLabel">
                        Are you sure you want to delete your account?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="small">
                        Once your account is deleted, all of its resources and data will be <b class="text-danger">
                            permanently
                            deleted.</b> Before deleting your account, please download any data or information that you
                        wish to retain.
                    </p>

                    <div class="mb-3">
                        <label for="password" class="form-label visually-hidden">{{ __('Password') }}</label>
                        <input type="password" name="password" id="password"
                            class="form-control @if ($errors->userDeletion->has('password')) is-invalid @endif"
                            placeholder="Password*">
                        @if ($errors->userDeletion->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->userDeletion->first('password') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete Account</button>
                </div>
            </div>
        </form>
    </div>
</div>


