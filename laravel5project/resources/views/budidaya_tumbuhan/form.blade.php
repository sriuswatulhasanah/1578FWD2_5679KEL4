<div class="form-group">
	<label class="col-sm-2 control-label" id="tumbuhan_id">Tumbuhan</label>
	<div class="col-sm-10">
		{!! Form::select('tumbuhan_id',$tumbuhan->lists('nama','id'),null,['class'=>'form-control','id'=>'tumbuhan_id','placeholder'=>"Tumbuhan"]) !!}
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label" id="budidaya_id"> Budidaya</label>
		<div class="col-sm-10">
			{!! Form::select('budidaya_id',$budidaya->lists('nama_budidaya','id'),null,['class'=>'form-control','id'=>'budidaya_id','placeholder'=>"Budidaya"]) !!}
		</div>
	</div>
	