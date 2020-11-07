@extends('layouts.Master')

@section('title',' Edit User ')

@section('content')


<div class="col-lg-12">
	<h1 class="my-4">DAFTAR USER</h1>



	<form action="/mUser/update/{{$user->id}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$user->id}}"></br>
		<div class="form-group">
			<label for="name">Nama Pengguna</label>
			<input type="text" class="form-control" required="required" name="name" value="{{$user->name}}"></br>
		</div>
		<div class="form-group">
			<label for="roles">Roles</label>
			<select name="roles" class="form-control" id="exampleFormControllerSelect1">
				<option value="Administrator">Administrator</option>
				<option value="User">User</option>
			</select>
		</div>

		<button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button><br><br>
	</form>

	  </div>
