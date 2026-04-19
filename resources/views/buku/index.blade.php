@extends('layouts.app')

@section('content')

<h3>Data Buku</h3>

<a href="/buku/create" class="btn btn-primary mb-3">+ Tambah Buku</a>

<table class="table table-bordered">
<tr>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Penerbit</th>
    <th>Tahun</th>
    <th>Aksi</th>
</tr>

@foreach($bukus as $b)
<tr>
    <td>{{ $b->judul }}</td>
    <td>{{ $b->penulis }}</td>
    <td>{{ $b->penerbit }}</td>
    <td>{{ $b->tahun_terbit }}</td>
    <td>
        <a href="/buku/{{ $b->id }}/edit">Edit</a>
    </td>
</tr>
@endforeach

</table>

@endsection
