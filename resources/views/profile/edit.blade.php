@extends('partials.layout')
@section('content')
    <h1 class="font-bold text-x2">
        @lang('Profile')
    </h1>

    <div class="container mx-auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="card bg-base-300 shadow-sm p-6">
                    @include('profile.partials.update-profile-information-form')
            </div>

            <div class="card bg-base-300 shadow-sm p-6">
                    @include('profile.partials.update-password-form')
            </div>

            <div class="card bg-base-300 shadow-sm p-6">
                    @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
@endsection
