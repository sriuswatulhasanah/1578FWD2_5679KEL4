@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('budidaya') }}"><i style="color:#8a6d3b" class=" fa text-default fa-chevron-left"></i></a> Detail Data Budidaya</strong>
			</div>
			<table class="table">
				<tr>
						<td>Nama Budidaya</td>
						<td>:</td>
						<td>{{ $budidaya->nama_budidaya }}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Dibuat tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$budidaya->created_at}}</td>
				</tr>
				<tr>
						<td class="col-xs-4">Diperbarui Tanggal</td>
						<td class="col-xs-1">:</td>
						<td>{{$budidaya->updated_at}}</td>
				</tr>
		</table>
</div>
@stop