@extends('layout.main')
@section('content')

<h1>Master Data Petugas</h1>
<div class="card">
        <div class="card-header">
        <a href="{{ route('perpustakaan.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Nama Petugas</td>
                <td>Alamat</td>
                <td>No HP</td>
                <td>Aksi</td>
                <td>Delete</td>
            </tr>
            </thead>
            @foreach ($perpustakaan as $rows)
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->nama_petugas }}</td>
                    <td>{{ $rows->alamat }} </td>
                    <td>{{ $rows->nohp }} </td>
                    <td>
                        <a href="{{ route('perpustakaan.edit', $rows->id) }}">Edit</a>  
                                     
                </td>
                <td> 
                    <form action="{{ route('perpustakaan.destroy', $rows->id) }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Del</button>
                        </form>  </td>
                 </tr>   
            @endforeach
            </tbody>
            </table>
        </div>
</div>

@endsection