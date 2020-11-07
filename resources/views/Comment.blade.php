@extends('layouts.Master')

@section('title',' Comment ')

@section('content')

<br><br>
<!-- Page Content -->
<div class="container">

  <div class="row">


    <!-- Post Content Column -->

    <div class="col-lg-12">

      <div class="card">
        <div class="card-header">
          {{ $comment->title }}
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{ $comment->content }}</p>
          </blockquote>
        </div>
      </div>


      </div>

    </div>
    <!-- /.row -->

  </div>
  <br><br>
  @endsection