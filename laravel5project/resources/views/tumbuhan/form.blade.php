<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="jenis_id"> Jenis</label>
		<div class="col-sm-10">
			{!! Form::select('jenis_id',$jenis->lists('jenis','id'),null,['class'=>'form-control','id'=>'jenis_id','placeholder'=>"Jenis"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="kategori_id"> Kategori</label>
		<div class="col-sm-10">
			{!! Form::select('kategori_id',$kategori->lists('kategori','id'),null,['class'=>'form-control','id'=>'kategori_id','placeholder'=>"Kategori"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="tempat_id"> Tempat</label>
		<div class="col-sm-10">
			{!! Form::select('tempat_id',$tempat->lists('nama_tempat','id'),null,['class'=>'form-control','id'=>'tempat_id','placeholder'=>"Tempat"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="pengelola_id"> Pengelola</label>
		<div class="col-sm-10">
			{!! Form::select('pengelola_id'$pengelola->lists('nama','id'),null,['class'=>'form-control','id'=>'pengelola_id','placeholder'=>"Pengelola"]) !!}
		</div>
	</div>	