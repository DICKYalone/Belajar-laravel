@extends('layouts.app')
@section('content')
<h1>Perpustakaan</h1>
<div>
    list buku: 

    <ul>
        @foreach ($buku as $b)
            <li>
                <div class="flex">
                {{ $b["judul_buku"] }} ({{ $b["harga"] }}) -

                    <a class="m-2 px-6 bg-sky-700 rounded text-white" href="buku/{{ $b['id'] }}">lihat</a>
                    
                    <form action="buku/{{$b['id']}}" method="POST">
                        @method("delete")
                        @csrf
                        <button class="m-2 px-6 bg-rose-700 rounded text-white">hapus</button>
                    </form>

                </div>
            </li>
        @endforeach
    </ul>
</div>

<hr>

    <div>
        <h3>input buku</h3>
        <form action="buku" method="POST">
            @csrf
            <input type="text" placeholder="judul" name="judul_buku">
            <input type="text" placeholder="harga" name="harga">
            <button type="submit">kirim</button>
        </form>
    </div>
@endsection