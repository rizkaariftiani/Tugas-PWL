@extends('layouts.Master')

@section('title',' Member ')

@section('content')

<div class="col-lg-8"></div>
<h1 class="my-4">PENGELOLAAN ARTIKEL</h1>

<a href="/manage/add" class="btn btn-secondary btn-lg btn-block">Tambah Data Artikel</a>
<a href="/manage/cetak_pdf" class="btn btn-primary btn-lg btn-block" target="_blank">CETAK PDF</a>


<div class="card body"></div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($article as $a)
        <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->title}}</td>
            <td>{{$a->created_at}}</td>
            <td>
                <a href="manage/edit/{{ $a->id }}" class="btn btn-danger badge badgewarning">Edit</a>
                <a href="manage/delete/{{ $a->id }}" class="btn btn-warning badge badgedanger">Hapus</a>
            </td>        
        </tr>
        
@endforeach
    
</tbody>
</table>

@endsection