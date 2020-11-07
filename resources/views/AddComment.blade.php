@extends('layouts.Master')

@section('title',' Tambah Komenan ')

@section('content')

<div class="col-lg-8">
  <h1 class="my-4">DAFTAR KOMEN</h1>

  <form action="/mKomen/create" method="post">
   @csrf
   <div class="form-group">
     <label for="title">Nama Pengguna</label>
     <input type="text" class="form-control"
     required="required" name="title"></br>
   </div>
   <div class="form-group">
     <label for="content">Comment</label>
     <input type="text" class="form-control"
     required="required" name="content"></br>
   </div>
   
  <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button> <br><br>
</form>



</div>
@endsection