@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Tumbuhan</strong>
			<a href="{{ url('tumbuhan/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> Tumbuhan</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Jenis</th>
									<th>Kategori</th>
									<th>Tempat</th>
									<th>Pengelola</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuaTumbuhan as $tumbuhan)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $tumbuhan->nama or 'nama kosong'}}</td>
									<td>{{ $tumbuhan->jenis->jenis or 'jenis kosong'}}</td>
									<td>{{ $tumbuhan->kategori->kategori or 'kategori kosong'}}</td>
									<td>{{ $tumbuhan->tempat->nama_tempat or 'nama_tempat kosong'}}</td>
									<td>{{ $tumbuhan->pengelola->nama or 'nama kosong'}}
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('tumbuhan/edit/'.$tumbuhan->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('tumbuhan/'.$tumbuhan->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('tumbuhan/hapus/'.$tumbuhan->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop