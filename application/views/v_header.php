<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Rumah Sakit aja dah.</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets2/materialize/css/materialize.min.css" media="screen,projection" />
    <link href="<?php echo base_url() ?>assets2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets2/css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets2/css/flexslider.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets2/css/style.css" rel="stylesheet" />
</head>

<body>

    <div id="wrapper" class="home-page">
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href=""><i
                                class="icon-info-blocks material-icons">local_hospital</i>RS.PUNYA <b>SAYANG</b></a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li class="active"><a class="waves-effect waves-light btn-large" href="">Home</a></li>
                            <li><a class="waves-effect waves-dark" href="">Layanan</a></li>
                            <li><a class="waves-effect waves-dark" href="informasi.php">INFORMASI</a></li>
                            <li><a class="waves-effect waves-dark" href="hubungi.php">Hubungi Kami</a></li>
                            <li><a class="waves-effect waves-dark" href="login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        <section id="banner">
            <section id="banner">

                <!-- Slider -->
                <div id="main-slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="<?php echo base_url() ?>assets2/img/slides/1.jpg" alt="" />
                            <div class="flex-caption">
                                <h3>Rumah Sakit Cinta Ibu</h3>
                                <p>Anda bisa mempercayai kami.</p>

                            </div>
                        </li>
                        <li>
                            <img src="assets2/img/slides/2.jpg" alt="" />
                            <div class="flex-caption">
                                <h3>Sistem Pengaduan dan Saran</h3>
                                <p>Segala yang terbaik untuk anda.</p>

                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- end slider -->