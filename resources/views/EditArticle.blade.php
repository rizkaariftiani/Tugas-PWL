@extends('layouts.Master')

@section('title',' Edit ')

@section('content')


<div class="col-lg-12">
	<h1 class="my-4">DAFTAR MEMBER</h1>



	<form action="/manage/update/{{$article->id}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$article->id}}"></br>
		<div class="form-group">
			<label for="title">Judul</label>
			<input type="text" class="form-control"
			required="required" name="title" value="{{$article->title}}"></br>
		</div>
		<div class="form-group">
			<label for="content">Content</label>
			<input type="text" class="form-control"
			required="required" name="content" value="{{$article->content}}"></br>
		</div>
		<div class="form-group">
			<label for="image">Image Url</label>
			<input type="text" class="form-control"
			required="required" name="image" value="{{$article->imageurl}}"></br>
		</div>
		<button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button><br><br>
	</form>

	  </div>

	  @endsection