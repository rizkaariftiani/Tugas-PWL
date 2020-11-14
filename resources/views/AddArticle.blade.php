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

   <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="https://i.pinimg.com/564x/4b/57/c2/4b57c226885bbf5f90698a8910be2089.jpg" class="card-img" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body" style="background-color: #FFDAB9">
          <h5 class="card-header" style="background-color: #DB7093">My Profil</h5>
          <p class="card-text" >
            Hi, aku Rizka Nur Ariftiani dari MI 2F, Politeknik Negeri Malang. <br>
          From Bekasi and Enjoy it!</p>
        </div>
      </div>
    </div>
  </div>

  <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button> <br><br>
</form>



</div>
