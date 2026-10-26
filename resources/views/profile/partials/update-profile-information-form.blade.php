@php
    $user = $user ?? Auth::user();
@endphp

<section class="card bg-base-100 shadow-md">
    <div class="card-body">
        <h1 class="card-title font-bold">
            @lang('Profile Information')
        </h1>

        <p class="text-base-content/70">
            @lang("Update your account's profile information and email address.")
        </p>

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')

            <fieldset class="fieldset mb-4">
                <legend class="fieldset-legend">{{ __('Name') }}</legend>

                <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}"
                    class="input w-full @error('name') input-error @enderror" required autofocus autocomplete="name" />

                @error('name')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <fieldset class="fieldset mb-4">
                <legend class="fieldset-legend">{{ __('Email') }}</legend>

                <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}"
                    class="input w-full @error('email') input-error @enderror" required autocomplete="username" />

                @error('email')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="text-sm">
                        @lang('Your email address is unverified.')
                    </p>

                    <form method="post" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-link">
                            @lang('Click here to re-send the verification email.')
                        </button>
                    </form>


                    @if (session('status') === 'verification-link-sent')
                        <div role="alert" class="alert alert-success">
                            @lang('A new verification link has been sent to your email address.')
                        </div>
                    @endif
                </div>
            @endif

            <div class="flex items-center gap-4">
                <button type="submit" class="btn btn-primary">
                    @lang('Save')
                </button>

                <!-- Session Status -->
                @if (session('status') === 'profile-updated')
                    <div role="status" class="alert alert-success mb-4">
                        <span>
                            @lang('Your profile has been updated!')
                        </span>
                    </div>
                @endif
            </div>
        </form>
    </div>
</section>
