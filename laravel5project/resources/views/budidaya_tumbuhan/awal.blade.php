@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Budidaya Tumbuhan</strong>
			<a href="{{ url('budidaya_tumbuhan/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> Budidaya Tumbuhan</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama Tumbuhan</th>
									<th>Nama Budidaya</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuaBudidayahTumbuhan as $budidaya_tumbuhan)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $budidaya_tumbuhan->tumbuhan->nama or 'nama kosong'}}</td>
									<td>{{ $budidaya_tumbuhan->budidaya->nama_budidaya or 'nama_budidaya kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('budidaya_tumbuhan/edit/'.$budidaya_tumbuhan->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('budidaya_tumbuhan/'.$budidaya_tumbuhan->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('budidaya_tumbuhan/hapus/'.$budidaya_tumbuhan->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop