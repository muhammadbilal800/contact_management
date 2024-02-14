@extends('layouts.app')
@section('title','Registeration Page')
@section('content')

    <div class="flex h-screen  m-auto w-[30%] items-center justify-center">
      
      <form action="{{ route('signup') }}" method="post">
        <h1 class="text-3xl mb-2 font-extrabold text-[#1c2434]">{{ $name }}</h1>
      @csrf
      @if (session('success'))
      <x-alerts.success :success="session('success')" />    
      @endif
       <x-home.input-field type="text" name="name" placeholder="Username" />
       @error('name')
       <x-alerts.error :$message />
       @enderror
       <x-home.input-field type="email" name="email" placeholder="Email" />
       @error('email')
       <x-alerts.error :$message />
       @enderror
       <x-home.input-field type="password" name="password" placeholder="Password" />
       @error('password')
       <x-alerts.error :$message />
       @enderror
       <x-home.input-field type="password" name="password_confirmation" placeholder="Confirm Password" />
       @error('password')
       <x-alerts.error :$message />
       @enderror
     <div class="mt-3 flex items-center justify-center px-4 py-3 bg-slate-800">
      <button  class=" text-white font-semibold text-xl" type="submit">Signup</button>
     </div>
      </form>
    
    </div>
@endsection