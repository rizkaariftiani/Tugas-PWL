@extends('layouts.Master')

@section('title',' Edit Komen ')

@section('content')


<div class="col-lg-12">
	<h1 class="my-4">DAFTAR KOMEN</h1>



	<form action="/mKomen/update/{{$comment->id}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$comment->id}}"></br>
		<div class="form-group">
			<label for="title">Nama Pengguna</label>
			<input type="text" class="form-control"
			required="required" name="title" value="{{$comment->title}}"></br>
		</div>
		<div class="form-group">
			<label for="content">Komen</label>
			<input type="text" class="form-control"
			required="required" name="content" value="{{$comment->content}}"></br>
		</div>
		<button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button><br><br>
	</form>

	  </div>

	  @endsection