<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('page_title','Halaman Utama') | Project Akhir Praktikum Framework</title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">

		<style type="text/css">
				body {
						padding-top: 70px;
						padding-bottom: 70px;
				}
				.starter-template {
					padding: 40px 15px;
					text-align: center;
				}
				.form-horizontal{
					padding-top: 15px;
					text-align: right;
				}
		</style>
</head>
<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>	
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
		<a class="navbar-brand" href="{{url('/')}}"> SISTEM INFORMASI DATA TUMBUHAN </a>		
				</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown active">
		<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pengguna <span class="caret"></span></a>	
			<ul class="dropdown-menu" aria-labelledby="dLabel">
				<li><a href="{{url('berita')}}"> Data Pengguna</a></li>
			</ul>	
				</li>
				<li class="dropdown active">
		<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Data Tumbuhan <span class="caret"></span></a>	
			<ul class="dropdown-menu" aria-labelledby="dLabel">
			<li><a href="{{url('budidaya')}}"> Data Budidaya</a></li>
			<li><a href="{{url('pengelola')}}"> Data Pengelola</a></li>
			</ul>	
				</li>
				<li class="dropdown active">
		<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Pengaturan Akun <span class="caret"></span></a>	
			<ul class="dropdown-menu" aria-labelledby="dLabel">
				
				<li><a href="{{url('logout')}}"> Logout</a></li>	
			</ul>	
				</li>
			</ul>	
		</div>		
			</div>	
		</nav>
		<div class="clearfix"></div>
		<div class="container">
			@if (Session::has('informasi'))
			<div class="alert alert-info">
				<strong>Informasi :</strong> {{Session::get('informasi')}}
			</div>	
		@endif
			@if(count(Session::get('errors')) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach(Session::get('errors')->all() as $error)
						<li>{{ $error }}</li>
					@endforeach	
				</ul>
			</div>
			@endif
			@yield('container')	
		</div>
		<nav class="navbar navbar-default navbar-fixed-bottom">
		<footer class="container">
			<!-- Please dont delete this -->
			<!--/ Please dont delete this -->
		</footer>	
		</nav>
		<script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript">
			$(function() {
				$('[data-toggle="tooltip"]').tooltip()
			});	
			}
			</script>	
</body>
</html>	
