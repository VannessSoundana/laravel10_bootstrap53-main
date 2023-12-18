@extends('layout.main')
@section('content')


<h3>Edit Data Petugas</h3>
<form action="{{ route('perpustakaan.update', $perpustakaan->id) }}" method="POST">
    @csrf
    @method('PUT')
<table>
    <tr>
        <td>Nama Petugas</td><td><input type="text" name="nama_petugas" value="{{ $perpustakaan->nama_petugas }}"></td>
    </tr>
    <tr>
        <td>Alamat</td><td><input type="text" name="alamat" value="{{ $perpustakaan->alamat }}"></td>
    </tr>
    <tr>
        <td>No Hp</td><td><input type="text" name="nohp" value="{{ $perpustakaan->nohp }}"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection