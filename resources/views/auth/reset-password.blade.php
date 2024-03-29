@extends('layouts.layout')

@section('title', 'Password reset')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
        <div class="p-12 text-lg leading-7 font-semibold bg-light-secondary dark:bg-dark-secondary border-gray-900 rounded-lg">
            <p class="mb-8 text-2xl">Reset password</p>
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="w-auto">
                    <label for="email">Email:</label><br>
                    <input class="w-full p-3 my-3 bg-light-primary dark:bg-dark-primary border-2 border-gray-900 @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ $request->email }}" required>
                </div>
                @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                <div class="w-auto">
                    <label for="password">Password:</label><br>
                    <input class="w-full p-3 my-3 bg-light-primary dark:bg-dark-primary border-2 border-gray-900 @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="New Password" required>
                </div>
                @error('password')
                <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
                <div class="w-auto">
                    <label for="password_confirmation">Confirm password:</label><br>
                    <input class="w-full p-3 my-3 bg-light-primary dark:bg-dark-primary border-2 border-gray-900" id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm password" required>
                </div>
                <div clas="w-auto">
                    <input class="w-full p-3 my-3 text-light-primary bg-light-important dark:bg-dark-important border-2 border-gray-900" type="submit" value="Update">
                </div>
            </form>
            <!-- Social media -->
        </div>
    </div>
@endsection
