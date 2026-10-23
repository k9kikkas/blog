@extends('partials.layout')
@section('content')
    <div class="container mx-auto p-4">
        <div class="card bg-base-300 shadow-sm w-full max-w-xl mx-auto p-6">
            <p class="mb-4">
                {{ __('Thank you for signing up! Please verify your email address.') }}
            </p>
            @if (session('status') === 'verification-link-sent')
                <div role="status" class="alert alert-success mb-4">
                    <span>
                        @lang('A new verification link has been sent to the email address you provided during registration.')
                    </span>
                </div>
            @endif

            <div class="flex flex-wrap items-center justify-between gap-4">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <button type="submit" class="btn btn-primary">
                        @lang('Resend Verification Email')
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn btn-link">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
