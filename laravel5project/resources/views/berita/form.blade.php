<div class="form-group">
	<label class="col-sm-2 control-label">Judul</label>
	<div class="col-sm-10">
		{!! Form::text('judul',null,['class'=>'form-control','placeholder'=>"Judul"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Isi</label>
		<div class="col-sm-10">
			{!! Form::textarea('isi',null,['class'=>'form-control','placeholder'=>"Isi"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"> Photo</label>
		<div class="col-sm-10">
			{!! Form::file('photo',null,['class'=>'form-control','photoplaceholder'=>"Photo"]) !!}
			{!! Form::hidden('pengelola_id',\Auth::user()->pengelola_id,['class'=>'form-control','photoplaceholder'=>"Photo"]) !!}
		</div>
	</div>
	