@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="py-10 container mx-auto bg-gray-900 min-h-screen">
        <h1 class="text-3xl mb-5 text-center text-blue-400">Data Mahasiswa</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto bg-gray-800 rounded-lg shadow-lg border border-gray-600">
                <thead>
                    <tr class="bg-gray-900 text-gray-100">
                        <th class="py-3 px-4 text-left border border-gray-600">No</th>
                        <th class="py-3 px-4 text-left border border-gray-600">NIM</th>
                        <th class="py-3 px-4 text-left border border-gray-600">Nama</th>
                        <th class="py-3 px-4 text-left border border-gray-600">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $mahasiswa = [
                            ['nim' => '232410102011', 'nama' => 'Fiqri Ariel Pradhana', 'email' => 'Aril@gmail.com'],
                            ['nim' => '232410102012', 'nama' => 'Budo Susanto', 'email' => 'budi@gmail.com'],
                            ['nim' => '232410102054', 'nama' => 'Budiono Siregar', 'email' => 'Budiono@gmail.com'],
                            ['nim' => '232410102013', 'nama' => 'Narent Syavaras', 'email' => 'narent@gmail.com'],
                            ['nim' => '232410102088', 'nama' => 'Eko Julianto Amin', 'email' => 'Julianto@gmail.com'],
                            ['nim' => '232410102009', 'nama' => 'Fanny Alu Hilda', 'email' => 'Alu@gmail.com'],
                            ['nim' => '232410102092', 'nama' => 'Budiono Gemilang', 'email' => 'Budiii@gmail.com'],
                            ['nim' => '232410102098', 'nama' => 'Gumitir Cokro', 'email' => 'cokro21@gmail.com'],
                            ['nim' => '232410102017', 'nama' => 'Ika Sri Wahyuni', 'email' => 'ika1222@gmail.com'],
                            ['nim' => '232410102026', 'nama' => 'Joko Tole', 'email' => 'tolejoko123@gmail.com'],
                        ];
                    @endphp
                    
                    @foreach($mahasiswa as $index => $data)
                        <tr class="{{ $index % 2 == 0 ? 'bg-gray-700' : 'bg-gray-800' }}">
                            <td class="py-2 px-4 text-gray-300 border border-gray-600">{{ $index + 1 }}</td>
                            <td class="py-2 px-4 text-gray-300 border border-gray-600">{{ $data['nim'] }}</td>
                            <td class="py-2 px-4 text-gray-300 border border-gray-600">{{ $data['nama'] }}</td>
                            <td class="py-2 px-4 text-gray-300 border border-gray-600">{{ $data['email'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
