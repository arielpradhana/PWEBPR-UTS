@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <form class="bg-gray-800 p-6 rounded-lg shadow-lg" method="GET" action="{{ route('contact') }}">
            <h2 class="text-2xl mb-4">Register</h2>
            <input type="text" placeholder="Username" class="mb-4 p-2 w-full bg-gray-700 rounded" name="username" required>
            <input type="email" placeholder="Email" class="mb-4 p-2 w-full bg-gray-700 rounded" name="email" required>
            <input type="password" placeholder="Password" class="mb-4 p-2 w-full bg-gray-700 rounded" name="password" required>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Register</button>
        </form>
    </div>
@endsection
