@extends('welcome')
@section('title','login')
@section('content')

<div class="bg-white p-6 rounded-lg shadow-lg w-96 text-center flex w-[600px] wT-[900px]">
        <div class="w-1/2 p-8 bg-gradient-to-b from-[#14A098] to-[#CB2D6F] text-white flex flex-col justify-center">
            <h1 class="text-3xl font-bold">Welcome page </h1>
            <p class="mt-2">sign in to continue acess</p>
        </div>
    <div class="w-1/2 p-4">
    <form id="auth-form" class="space-y-4 mt-6" action="{{route('test')}}" method="POST">
        @csrf
        <div class="text-left">
            <label for="pseudo" class="block font-medium">Pseudo <span class="text-red-500">*</span></label>
            <input type="text" id="pseudo" name="pseudo" class="w-full p-2 border rounded" required>
        </div>
        <div class="text-left relative">
            <label for="password" class="block font-medium">Mot de passe <span class="text-red-500">*</span></label>
            <input type="password" id="password" name="password" class="w-full p-2 border rounded pr-10" required>
            <button type="button" id="toggle-password" class="absolute right-3 top-9 text-gray-600 ">
                <i id="eye-icon" class="fa-solid fa-eye"></i>
            </button>
        </div>
        <ul class="space-y-4">
            @foreach ($errors->all() as $error )
                <li class="alert alert-danger rounded shadow bg-red-300 ">{{$error}}</li>
            @endforeach
        </ul>
        <p id="error-message" class="text-red-500 text-sm"></p>
        <button type="submit" id="submit-btn" class="w-full bg-[#14A098] text-white py-2 rounded hover:bg-[#0F292F] transition">
            to continue
        </button>
    </form>
    <div class="flex justify-between mt-4">
        <button id="sign-in-btn" class="w-1/2 p-2 bg-[#501F3A] text-white rounded-l active hover:bg-[#CCCCCC] transition">Sign In</button>
        <button id="sign-up-btn" class="w-1/2 p-2 bg-gray-300 text-black rounded-r hover:bg-[#0F292F] transition hover:text-white"  onclick="window.location.href='/connexion';">Sign Up</button>
  </div>
</div>
</div>
@endsection
