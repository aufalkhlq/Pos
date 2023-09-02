@extends('layouts.dashboard.guest')

@push('title')
    Register
@endpush
@section('content')
<div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
            Sign Up
        </h2>
        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
        <form action="{{ route("dashboard.register") }}" method="post">
            @csrf
            <div class="intro-x mt-8">
                <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Name" name="name" required>
                <input type="email" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Email" name="email" required>
                <input type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password" name="password" required>
                <input type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password Confirmation" name="confirmed_password" required>
            </div>
            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Register</button>
                <a href="{{ route("dashboard.login.index") }}"><button type="button" class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0">Sign in</button></a>
            </div>
        </form>
    </div>
</div>
@endsection