@extends('layouts.app')

@section('titulo')
    LOGINEA DESDE DEVSTAGRAN
@endsection

@section('contenido')
    <div class="flex justify-center items-center">
        <div class="md:w-5/12 p-5">
            <img class="rounded-3xl" src="{{ asset('img/login.jpg') }}" alt="" srcset="">
        </div>
        <div class="md:w-4/12 md:h-auto bg-white p-6 rounded-lg shadow-xl">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('mensaje') }}</p>
                @endif

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">email</label>
                    <input type="text" id="email" name="email" placeholder="email"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input type="password" id="password" name="password" placeholder="password"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="INICIAR SESIÓN"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
