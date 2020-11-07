@extends('layouts.Master')

@section('title',' Kelola User ')

@section('content')

<div class="col-lg-8"></div>
<h1 class="my-4">PENGELOLAAN USER</h1>



<div class="card body"></div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pengguna</th>
            <th>Roles</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $u)
        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->roles}}</td>
            <td>
                <a href="mUser/edit/{{ $u->id }}" class="btn btn-danger badge badgewarning">Edit</a>
                <a href="mUser/delete/{{ $u->id }}" class="btn btn-warning badge badgedanger">Hapus</a>
            </td>        
        </tr>
        
@endforeach
    
</tbody>
</table>

@endsection