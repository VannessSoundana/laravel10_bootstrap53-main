@extends('layout.main')
@section('content')

<h1>Master Mata Pelajaran</h1>
<div class="card">
        <div class="card-header">
        <a href="{{ route('mapel.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
        </div>
        <div class="card-body">   
            <table class="table table-sm table-stripped table-bordered">
                <thead>
            <tr>
                <td>No</td>
                <td>Nama Mapel</td>
                <td>Lama Jam Pelajaran</td>
                <td>Aksi</td>
                <td>Delete</td>
            </tr>
            </thead>
            @foreach ($mapel as $rows)
            <tbody>
                 <tr>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $rows->nama_mapel }}</td>
                    <td>{{ $rows->jam }} </td>
                    <td>
                        <a href="{{ route('mapel.edit', $rows->id) }}">Edit</a>  
                                     
                </td>
                <td> 
                    <form action="{{ route('mapel.destroy', $rows->id) }}" method="POST">
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