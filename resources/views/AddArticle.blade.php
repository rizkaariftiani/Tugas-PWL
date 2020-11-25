@extends('layouts.Master')

@section('title',' Add ')

@section('content')

<div class="col-lg-8">
  <h1 class="my-4">DAFTAR MEMBER</h1>

  <form action="/manage/create" method="post">
   @csrf
   <div class="form-group">
     <label for="title">Judul</label>
     <input type="text" class="form-control"
     required="required" name="title"></br>
   </div>
   <div class="form-group">
     <label for="content">Content</label>
     <input type="text" class="form-control"
     required="required" name="content"></br>
   </div>
   <div class="form-group">
     <label for="image">Image Url</label>
     <input type="file" class="form-control" required="required" name="image"></br>
     <form action="/manage/create" method="post" enctype="multipart/form-data">
   </div>

  <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button> <br><br>
</form>



</div>
