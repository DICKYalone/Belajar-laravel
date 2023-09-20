@extends('app')
@section('content')
    halaman dashboard
    <hr>
    hello {{ auth()->user()->email }}
    <hr>
    <a href="/logout" class="py-1 px-6 bg-rose-500 rounded">logout</a>
@endsection