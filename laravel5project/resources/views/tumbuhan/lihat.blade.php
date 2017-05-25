@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('tumbuhan') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data Tumbuhan</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama</td>
						<td>:</td>
						<td>{{ $tumbuhan->nama }}</td>
				</tr>
				<tr>
						<td>Jenis</td>
						<td>:</td>
						<td>{{ $tumbuhan->jenis->jenis }}</td>
				</tr>
				<tr>
						<td>Kategori</td>
						<td>:</td>
						<td>{{ $tumbuhan->kategori->kategori }}</td>
				</tr>
				<tr>
						<td>Tempat</td>
						<td>:</td>
						<td>{{ $tumbuhan->tempat->nama_tempat }}</td>
				</tr>
				<tr>
						<td>Pengelola</td>
						<td>:</td>
						<td>{{ $tumbuhan->pengelola->nama }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$tumbuhan->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$tumbuhan->updated_at}}</td>
				</tr>
		</table>
</div>
@stop