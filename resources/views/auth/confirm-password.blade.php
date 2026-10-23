@extends('partials.layout')
@section('content')
    <div class="container mx-auto">


        <p class="mb-4">
            @lang('This is a secure area of the application. Please confirm your password before continuing.')
        </p>
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Confirm Password -->
            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Confirm Password')</legend>
                <input name="password" type="password"
                    class="input w-full @error('password') input-error @enderror required autofocus autocomplete="new-password" />
                @error('password')
                    <p class="label text-error">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="flex justify-end mt-4">
                <button type="submit" class="btn btn-primary">
                    @lang('Confirm')
                </button>
            </div>
        </form>
    </div>
@endsection
