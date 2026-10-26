@extends('partials.layout')
@section('content')
    <div class="container mx-auto p-4">
        <div class="card bg-base-300 shadow-sm w-full max-w-xl mx-auto p-6">
            <form method="POST" action="{{ route('password.store') }}">
                @csrf


                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">@lang('Email')</legend>
                    <input name="email" value="{{ old('email') }}" type="text"
                        class="input w-full @error('email') input-error @enderror required
                autofocus autocomplete="email" />
                    @error('email')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <!-- Password -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">@lang('Password')</legend>
                    <input name="password" type="text"
                        class="input w-full @error('password') input-error @enderror required
                autofocus autocomplete="new-password" />
                    @error('password')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>


                <!-- Confirm Password -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">@lang('Confirm Password')</legend>
                    <input name="password_confirmation" type="text"
                        class="input w-full @error('password_confirmation') input-error @enderror required
                autofocus autocomplete="new-password" />
                    @error('password_confirmation')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="flex items-center justify-end mt-4">
                    <button>
                        @lang('Reset Password')
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
