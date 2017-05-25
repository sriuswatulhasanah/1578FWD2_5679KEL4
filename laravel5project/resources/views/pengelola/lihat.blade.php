@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('pengelola') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data Pengelola</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ $pengelola->nama }}</td>
				</tr>
				<tr>
						<td>Nik</td>
						<td>:</td>
						<td>{{ $pengelola->nik }}</td>
				</tr>
				<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>{{ $pengelola->jeniskelamin }}</td>
				</tr>
				<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>{{ $pengelola->alamat }}</td>
				</tr>
				<tr>
						<td>Username</td>
						<td>:</td>
						<td>{{ $pengelola->pengguna->username }}</td>
				</tr>
				<tr>
						<td>Password</td>
						<td>:</td>
						<td>{{ $pengelola->pengguna->password }}</td>
				</tr>
				<tr>
						<td>Level</td>
						<td>:</td>
						<td>{{ $pengelola->pengguna->level }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$pengelola->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$pengelola->updated_at}}</td>
				</tr>
		</table>
</div>
@stop