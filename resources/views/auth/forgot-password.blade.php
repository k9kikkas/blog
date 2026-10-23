@extends('partials.layout')
@section('content')
    <div class="container mx-auto p-4">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <h1 class="font-bold">
                @lang('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.')
            </h1>

            <!-- Session Status -->
            @if (session('status') === 'password-updated')
                <div role="status" class="alert alert-success mb-4">
                    <span>
                        @lang('Your password has been updated!')
                    </span>
                </div>
            @endif

            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Email')</legend>
                <input name="email" value="{{ old('email') }}" type="text"
                    class="input w-full @error('email') input-error @enderror required
                autofocus autocomplete="email" />
                @error('email')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <button type="submit" class="btn btn-primary">
                @lang('Email Password Reset Link')
            </button>
        </form>
    </div>
@endsection
