@extends('layouts.Master')

@section('title',' Kelola Komen ')

@section('content')

<div class="col-lg-8"></div>
<h1 class="my-4">PENGELOLAAN KOMEN</h1>



<div class="card body"></div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pengguna</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comment as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->title}}</td>
            <td>{{$c->created_at}}</td>
            <td>
                <a href="mKomen/edit/{{ $c->id }}" class="btn btn-danger badge badgewarning">Edit</a>
                <a href="mKomen/delete/{{ $c->id }}" class="btn btn-warning badge badgedanger">Hapus</a>
            </td>        
        </tr>
        
@endforeach
    
</tbody>
</table>

@endsection