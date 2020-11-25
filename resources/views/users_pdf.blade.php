<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan User</h4>
		</center>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Gambar</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($user as $u)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$u->name}}</td>
					<td>{{$u->email}}</td>
					<td><img width="150px" src="{{('storage/'.$u->imageurl)}}"></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</body>
	</html>