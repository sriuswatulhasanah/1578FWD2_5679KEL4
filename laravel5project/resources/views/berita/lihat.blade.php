@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('berita') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data Berita</strong>
			</div>
			<table class="table">
				<tr>
						<td>Judul</td>
						<td>:</td>
						<td>{{ $berita->judul }}</td>
				</tr>
				<tr>
						<td>Isi</td>
						<td>:</td>
						<td>{{ $berita->isi }}</td>
				</tr>
				<tr>
						<td>Photo</td>
						<td>:</td>
						<td>{{ $berita->photo }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$berita->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$berita->updated_at}}</td>
				</tr>
		</table>
</div>
@stop