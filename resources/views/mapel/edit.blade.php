@extends('layout.main')
@section('content')


<h3>Edit Data Mapel</h3>
<form action="{{ route('mapel.update', $mapel->id) }}" method="POST">
    @csrf
    @method('PUT')
<table>
    <tr>
        <td>Nama Mapel</td><td><input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}"></td>
    </tr>
    <tr>
        <td>Jumlah Jam Pelajaran</td><td><input type="text" name="jam" value="{{ $mapel->jam }}"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Kirim"></td>
    </tr>
</table>
</form>

@endsection