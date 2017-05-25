@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
			<strong>Seluruh Data Berita</strong>
			<a href="{{ url('berita/tambah') }}" class="btn btn-xs btn-primary pull-right">
		<i class="fa fa-plus"></i> Berita</a>
				<div class="clearfix"></div>
			</div>
			<table class="table">
						<thead>
							<tr>
									<th>No.</th>
									<th>Judul</th>
									<th>Isi</th>
									<th>Photo</th>
									<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php $x=1?>
								@foreach ($semuaBerita as $berita)
									<tr>
									<td>{{ $x++ }}</td>
									<td>{{ $berita->judul or 'judul kosong'}}</td>
									<td>{{ $berita->isi or 'isi kosong'}}</td>
									<td>{{ $berita->photo or 'photo kosong'}}</td>
									<td>
										<div class="btn-group" role="group">
											<a href="{{url('berita/edit/'.$berita->id) }}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah">
											<i class="fa fa-pencil"></i></a>
											<a href="{{url('berita/'.$berita->id) }}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
											<a href="{{url('berita/hapus/'.$berita->id) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
											</div>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
					</div>
					@stop