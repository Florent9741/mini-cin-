@extends('layouts.app')

@section('main')
<div class="h-screen bg-gradient-to-br from-blue-600 to-indigo-600 flex justify-center items-center w-full">
    <form action="{{ route('login') }}" method="post">
        @csrf
      <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-md max-w-sm">
        <div class="space-y-4">
          <h1 class="text-center text-2xl font-semibold text-gray-600">Login</h1>

          <div>
            <label for="email" class="block mb-1 text-gray-600 font-semibold">Email</label>
            <input type="text" name="email" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
          <div>
            <label for="email" class="block mb-1 text-gray-600 font-semibold">Password</label>
            <input type="password" name="password" class="bg-indigo-50 px-4 py-2 outline-none rounded-md w-full" />
          </div>
        </div>
        <button class="mt-4 w-full bg-gradient-to-tr from-blue-600 to-indigo-600 text-indigo-100 py-2 rounded-md text-lg tracking-wide">Register</button>
      </div>
    </form>
  </div>

@endsection
