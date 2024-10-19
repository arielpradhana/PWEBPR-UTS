@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="text-center py-20">
        <h1 class="text-4xl mb-6">Selamat Datang di Website PWEB</h1>
        <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</a>
        <a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Register</a>
    </div>
@endsection
