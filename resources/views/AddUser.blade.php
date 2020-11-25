@extends('layouts.Master')

@section('title',' Add User ')

@section('content')

<div class="col-lg-8">
  <h1 class="my-4">DAFTAR USER</h1>

  <form action="/mUser/create" method="post" enctype="multipart/form-data">
   @csrf
   <div class="form-group">
     <label for="name">Nama</label>
     <input type="text" class="form-control" required="required" name="name"></br>
   </div>
   <div class="form-group">
     <label for="email">Email</label>
     <input type="text" class="form-control" required="required" name="email"></br>
   </div>
   <div class="form-group">
     <label for="password">Password</label>
     <input type="text" class="form-control" required="required" name="password"></br>
   </div>
    <div class="form-group">
      <label for="roles">Roles</label>
      <select name="roles" class="form-control" id="exampleFormControllerSelect1">
        <option value="Administrator">Administrator</option>
        <option value="User">User</option>
      </select>
    </div>
    <div class="form-group">
     <label for="image">Image Url</label>
     <input type="file" class="form-control" required="required" name="image"></br>
     <form action="/mUser/create" method="post" enctype="multipart/form-data">
   </div>

  <button type="submit" name="add" class="btn btn-primary float-right">Tambah User</button> <br><br>
</form>



</div>
