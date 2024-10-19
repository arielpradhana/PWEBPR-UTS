@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <form class="bg-gray-800 p-6 rounded-lg shadow-lg" method="GET" action="{{ route('contact') }}">
            <h2 class="text-2xl mb-4">Login</h2>
            <input type="text" placeholder="Username" class="mb-4 p-2 w-full bg-gray-700 rounded" name="username" required>
            <input type="password" placeholder="Password" class="mb-4 p-2 w-full bg-gray-700 rounded" name="password" required>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
        </form>
    </div>
@endsection
