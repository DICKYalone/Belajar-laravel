@extends('app')
@section('content')
    halaman login


    <form action="login" method="POST">

        @csrf
        
        <input type="text" name="email" autocomplete="off">

        <input type="password" name="password">

        <button type="submit" class="py-1 px-6 bg-blue-500 rounded text-white">login</button>
    </form>
@endsection