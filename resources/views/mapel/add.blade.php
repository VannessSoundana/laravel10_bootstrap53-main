@extends('layout.main')
@section('content')


<h3>Tambah Data Mapel</h3>
<form action="{{ route('mapel.store') }}" method="POST">
    @csrf
<table>
    <tr>
        <td>Nama Mapel</td><td><input type="text" name="nama_mapel"></td>
    </tr>
    <tr>
        <td>Lama Jam Pelajaran</td><td><input type="text" name="jam"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection