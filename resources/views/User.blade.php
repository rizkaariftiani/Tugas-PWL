@extends('layouts.Master')

@section('title',' User ')

@section('content')

<br><br>
<!-- Page Content -->
<div class="container">

  <div class="row">


    <!-- Post Content Column -->

    <div class="col-lg-12">

      <div class="card">
        <p>Nama Pengguna</p>
        <div class="card-header">
          {{ $user->string }}
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>Email</p>
            <p>{{ $user->string }}</p>
          </blockquote>
        </div>
      </div>


      </div>

    </div>
    <!-- /.row -->

  </div>
  <br><br>
  @endsection