@extends('layouts.app')
@section('content')

Buku - {{ $buku->judul_buku }}

<br>
<br>

<form action="{{$buku->id}}" method="POST">
    @method('PUT')

    @csrf

    <input type="text" name="judul_buku" 
    value="{{ $buku->judul_buku }}">

    <input type="text" name="harga" 
    value="{{ $buku->harga }}">

    <button type="submit">update</button>
</form>

@endsection
