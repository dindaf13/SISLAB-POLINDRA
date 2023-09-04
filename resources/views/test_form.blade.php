@extends('administrator.theme')
@section('content')
    <form action="{{ route('input.get') }}">
        <input type="text" name="name" placeholder="Masukkan nama">
        <br>
        <input type="text" name="type" placeholder="Masukkan tipe">
        <br>
        <input type="text" name="condition" placeholder="Masukkan kondisi">
        <br>
        <input type="text" name="quantity" placeholder="Masukkan kuantitas">
        <br>
        <button type="submit">SIMPAN</button>
    </form>
@endsection
