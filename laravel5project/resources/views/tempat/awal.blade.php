@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Tempat</strong>
			<a href="{{ url('tempat/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> Tempat</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Nama </th>
									<th>Alamat</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($data as $tempat)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $tempat->nama_tempat or 'nama_tempat kosong'}}</td>
									<td>{{ $tempat->alamat or 'alamat kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('tempat/edit/'.$tempat->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('tempat/'.$tempat->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('tempat/hapus/'.$tempat->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop