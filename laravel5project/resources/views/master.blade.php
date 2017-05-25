<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <style type="text/css">
			body {
					padding-top: 70px;
					padding-bottom: 70px;
                    background-color: orange;
			}
			.starter-template {
					padding: 40px 15px;
					text-align: center;
			}
			.form-horizontal{
					padding: 15px 10px;
			}
			footer{
					padding-top: 15px;
					text-align: right;
			}
	</style>

    <title>Kebun Raya Unmul Samarinda</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset ('bootstrap/css/bootstrap.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset ('bootstrap/css/modern-business.css')}} ">

    <!-- Custom Fonts -->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('#')}}" class="navbar-brand">Sistem Pengelolaan Data Tumbuhan</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{url('pengguna')}}">Pengguna</a>
                    </li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pengelola <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('pengelola')}}">Pengelola</a>
                            </li>
                            <li>
                                <a href="{{url('berita')}}">Berita</a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Budidaya <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('tumbuhan')}}">Tumbuhan</a>
                            </li>
                            <li>
                                <a href="{{url('tempat')}}">Tempat</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tumbuhan <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('jenis')}}">Jenis</a>
                            </li>
                            <li>
                                <a href="{{url('kategori')}}">Kategori</a>
                            </li>
                        </ul>
                    </li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Budidayah Tumbuhan <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('budidaya')}}">Budidaya</a>
                            </li>
                            <li>
                                <a href="{{url('budidaya_tumbuhan')}}">Budidaya Tumbuhan</a>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li>
                        <a href="{{url('logout')}}">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div align="center" src="{!!asset('img/1.jpg')!!}"><img align="center" src="img/1.jpg"></div>
            </div>
            <div class="item">
                <div align="center" src="img/2.jpg"><img align="center" src="img/2.jpg"></div>
            </div>
             <div class="item">
                <div align="center" src="img/3.jpg"><img align="center" src="img/3.jpg"></div>
            </div>
             <div class="item">
                <div align="center" src="img/4.jpg"><img align="center" src="img/4.jpg"></div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <hr>
        <div class="clearfix"></div>
							<div class="container">
									@if (Session::has('informasi'))
											<div class="alert alert-info">
													<strong>Informasi :</strong>
				{{Session::get('informasi')}}
									</div>
							@endif
							@if (count($errors) > 0)
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif
							@yield('container')
					</div>
		<!-- <hr> -->
    <!-- Page Content -->
    <!-- <div class="container"> -->

        <!-- Marketing Icons Section -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Apotek Kimia Farma
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Tentang Kami</h4>
                    </div>
                    <div class="panel-body">
                        <p>Menurut Peraturan Menteri Kesehatan RI Nomor 922/Menkes/Per/X/1993 tentang Ketentuan dan Tata Cara Pemberian Izin Apotik, memberikan batasan tentang apotik yaitu suatu tempat tertentu tempat dilakukan pekerjaan kefarmasian dan penyaluran perbekalan farmasi kepada masyarakat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Misi</h4>
                    </div>
                    <div class="panel-body">
                        <p> -Memberikan jasa pelayanan prima atas ritel farmasi dan jasa terkait serta memberikan jasa layanan kefarmasian bagi pelanggan.
                        
                        -Meningkatkan nilai perusahaan untuk pemegang saham dan pihak-pihak yang berkepentingan dengan berdasarkan prinsip Good Corporate Governance (GCG).

                        -Mengembangkan kompetensi dan komitmen sumber daya manusia yang lebih professional untuk meningkatkan nilai perusahaan dan kesejahteraan sumber daya manusia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Visi</h4>
                    </div>
                    <div class="panel-body">
                        <p>Menjadi perusahaan jaringan layanan farmasi yang terkemuka di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /.row -->

        <!-- Portfolio Section -->
      <!--   <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Barang Yang Di Jual</h2>
            </div>
            <div class="col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="{!!asset('img/21.jpg')!!}" alt="">
                <div class="carousel-caption">
                    <h2>Tablet</h2>
                </div>
                </a>
            </div>

            <div class="col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="{!!asset('img/31.jpg')!!}" alt="">
                <div class="carousel-caption">
                    <h2>Salep</h2>
                </div>
                </a>
            </div>
            <div class="col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="{!!asset('img/41.jpg')!!}" alt="">
                <div class="carousel-caption">
                    <h2>Kapsul</h2>
                </div>
                </a>
            </div>
            <div class="col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="{!!asset('img/11.jpg')!!}" alt="">
                <div class="carousel-caption">
                    <h2>Sirup</h2>
                </div>
                </a>
            </div>
        </div> -->
        <!-- /.row -->
        <!-- Features Section -->
       <!--  <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Sejarah</h2>
            </div>
            <div class="col-md-6">
                <p>Sejarah PT Kimia Farma Apotek dimulai hampir dua abad yang lalu yaitu tahun 1817 yang kala itu merupakan perusahaan farmasi pertama didirikan Hindia Belanda di Indonesia bernama NV Chemicalien Handle Rathkamp & Co. Kemudian pada awal kemerdekaan dinasionalisasi oleh pemerintah Republik Indonesia dan seterusnya pada tanggal 16 Agustus 1971 menjadi PT (Persero) Kimia Farma, sebuah perusahaan farmasi negara yang bergerak dalam bidang industri farmasi, distribusi, dan apotek. Sampai dengan tahun 2002, apotek merupakan salah satu kegiatan usaha PT Kimia Farma (Persero) Tbk, yang selanjutnya pada awal tahun 2003 di-spin-off menjadi PT Kimia Farma Apotek.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="{!!asset('img/home.jpg')!!}" alt="">
            </div>
        </div> -->
        <!-- /.row -->

        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
