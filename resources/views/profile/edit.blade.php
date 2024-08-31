@extends('frontend.master')
@section('main')

<div class="flex justify-center items-center mt-10 text-4xl">
    <h2 class="text-gray-800">Hello {{Auth::user()->name}}!</h2>
</div>

            @if (Auth::user()->role == 'admin')
            <div class="flex justify-center items-center">

                <div class="w-[80%] rounded-xl m-16 bg-gray-200 shadow-md flex justify-center items-center">
                    <p class="text-5xl text-center select-none p-16">To update <span class="text-red-600">Admin</span> data please visit the <span class="text-red-600">Admin</span> update profile page.</p>
                </div>
            </div>
            @else

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
            @endif

           
        </div>
    </div>

@endsection
