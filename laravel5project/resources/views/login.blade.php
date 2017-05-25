<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title','Halaman Awal') | SISTEM PENGELOLAAN DATA TUMBUHAN</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">

	<style type="text/css">
	body {
		padding-top: 70px;
		padding-bottom: 70px;
		background-color: orange;
		/*background-image: url({{asset('gambar/th2.jpg')}});;*/
		}
	.starter-template {
		padding: 40px 15px;
		text-align: center;
		}
	.form-horizontal {
		padding: 35px 20px;
	}	
	footer {
		padding-top: 50px;
		text-align: right;
	}
	.navbar-inverse {
		background-color: #000000;
		border-color: #000000;
		
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-targer="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{url('login')}}">SISTEM PENGELOLAAN DATA TUMBUHAN </a>	
			</div>
		</div>
	</nav>
		<div class="clearfix"></div>
			<div class="col-md-4 col-md-offset-4">
			@if(count(Session::get('errors')) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach(Session::get('errors')->all() as $error)
						<li>{{ $error }}</li>
					@endforeach	
				</ul>
			</div>
			@endif
			<div class="panel panel-default">
				<div class="panel-heading">
				<strong> Masuk Aplikasi </strong>
				</div>
			{!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
			<div class="form-group">
				<label class="col-sm-4 control-label"> Username</label>
			<div class="col-sm-8">
			{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}	
			</div>	
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label"> Password</label>
			<div class="col-sm-8">
			{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}	
			</div>	
			</div>
			<div style="width: 100%;text-align: right;">
			<button class="btn btn-primary"><i class="fa fa-lock"></i> Masuk </button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Batal</button>	
			</div>
			{!! Form::close() !!}
			</div>	
			</div>

		<nav class="navbar navbar-inverse navbar navbar-fixed-bottom">
		<footer class="container">
			<!-- Please dont delete this-->
			
			<!-- Please dont delete this-->
		</footer>	
		</nav>	
			<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js') }}"></script>
			<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
			<script type="text/javascript">
				$(function () {
					$('[data-toggle="tooltip"]').tooltip()
				});
			</script>

</body>
</html>