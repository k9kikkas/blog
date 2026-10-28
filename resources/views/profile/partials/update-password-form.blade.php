<section class="card bg-base-100 shadow-md">
    <div class="card-body">
        <h2 class="card-title font-bold">
            {{ __('Update Password') }}
        </h2>

        <p class="text-base-content/70">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <fieldset class="fieldset mb-4">
                <legend class="fieldset-legend">@lang('Current Password')</legend>
                <input 
                id="update_password_current_password" 
                name="current_password" 
                type="password"
                class="input w-full  @error('current_password', 'updatePassword') input-error @enderror"
                autocomplete="current-password" 
                required />
            </fieldset>

            <fieldset class="fieldset mb-4">
                <legend class="fieldset-legend">@lang('New Password')</legend>
                <input 
                id="update_password_password" 
                name="password" 
                type="password"
                class="input w-full  @error('password', 'updatePassword') input-error @enderror"
                autocomplete="new-password" 
                required />
            </fieldset>

            <fieldset class="fieldset mb-4">
                <legend class="fieldset-legend">@lang('Confirm Password')</legend>
                <input 
                id="update_password_password_confirmation" 
                name="password_confirmation" 
                type="password"
                class="input w-full" 
                autocomplete="new-password" 
                required />
            </fieldset>

            <div class="flex items-center gap-4">
                <button type="submit" class="btn btn-primary">@lang('Save')</button>

                <!-- Session Status -->
                @if (session('status') === 'password-updated')
                    <div role="status" class="alert alert-success mb-4">
                        <span>
                            @lang('Your password has been updated!')
                        </span>
                    </div>
                @endif
            </div>
        </form>
    </div>
</section>
