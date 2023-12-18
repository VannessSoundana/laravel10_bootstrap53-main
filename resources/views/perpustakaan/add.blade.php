@extends('layout.main')
@section('content')


<h3>Tambah Data Petugas</h3>
<form action="{{ route('perpustakaan.store') }}" method="POST">
    @csrf
<table>
    <tr>
        <td>Nama Petugas</td><td><input type="text" name="nama_petugas"></td>
    </tr>
    <tr>
        <td>Alamat</td><td><input type="text" name="alamat"></td>
    </tr>
    <tr>
        <td>No HP</td><td><input type="text" name="nohp"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection