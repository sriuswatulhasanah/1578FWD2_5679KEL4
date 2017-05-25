<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="nik"> Nik</label>
		<div class="col-sm-10">
			{!! Form::text('nik',null,['class'=>'form-control','id'=>'nik','placeholder'=>"Nik"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="jeniskelamin"> Jenis Kelamin</label>
		<div class="col-sm-10">
			{!! Form::text('jeniskelamin',null,['class'=>'form-control','id'=>'jeniskelamin','placeholder'=>"Jenis Kelamin"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="alamat"> Alamat</label>
		<div class="col-sm-10">
			{!! Form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"Alamat"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Username</label>
		<div class="col-sm-10">
			{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Password</label>
		<div class="col-sm-10">
			{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Level</label>
		<div class="col-sm-10">
			{!! Form::text('level',null,['class'=>'form-control','placeholder'=>"Level"]) !!}
		</div>
	</div>