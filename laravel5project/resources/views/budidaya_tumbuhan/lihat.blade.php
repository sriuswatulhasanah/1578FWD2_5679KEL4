@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('budidaya_tumbuhan') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data Budidaya Tumbuhan</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama Tumbuhan</td>
						<td>:</td>
						<td>{{ $budidaya_tumbuhan->tumbuhan->nama }}</td>
				</tr>
				<tr>
						<td>Nama Budidayah</td>
						<td>:</td>
						<td>{{ $budidaya_tumbuhan->budidaya->nama_budidaya }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$budidaya_tumbuhan->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$budidaya_tumbuhan->updated_at}}</td>
				</tr>
		</table>
</div>
@stop