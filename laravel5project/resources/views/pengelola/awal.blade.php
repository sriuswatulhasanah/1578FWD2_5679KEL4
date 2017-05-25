@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Pengelola</strong>
			<a href="{{ url('pengelola/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> Pengelola</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Nik</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuaPengelola as $pengelola)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $pengelola->nama or 'nama kosong'}}</td>
									<td>{{ $pengelola->nik or 'nik kosong'}}</td>
									<td>{{ $pengelola->jeniskelamin or 'jeniskelamin kosong'}}</td>
									<td>{{ $pengelola->alamat or 'alamat kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('pengelola/edit/'.$pengelola->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('pengelola/'.$pengelola->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('pengelola/hapus/'.$pengelola->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop