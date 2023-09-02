@extends('layouts.dashboard.guest')

@push('title')
    Login
@endpush
@section('content')
<div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
            Sign In
        </h2>
        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
        <form action="" method="post">
            @csrf
            <div class="intro-x mt-8">
                <input type="email" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Email" name="email" required>
                <input type="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password" name="password" required>
            </div>
            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                <button class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Login</button>
                <a href="{{ route("dashboard.register.index") }}"><button type="button" class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0">Sign up</button></a>
            </div>
        </form>
        <div class="intro-x mt-10 xl:mt-24 text-gray-700 text-center xl:text-left">
            By signin up, you agree to our 
            <br>
            <a class="text-theme-1" href="">Terms and Conditions</a> & <a class="text-theme-1" href="">Privacy Policy</a> 
        </div>
    </div>
</div>
@endsection