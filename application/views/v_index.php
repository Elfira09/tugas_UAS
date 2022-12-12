<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Rumah Sakit aja dah.</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/materialize/css/materialize.min.css"
        media="screen,projection" />
    <link href="<?php echo base_url(); ?>assets3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets3/css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets3/css/flexslider.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets3/css/style.css" rel="stylesheet" />
</head>

<body>

    <div id="wrapper" class="home-page">
        <!-- start header -->
        <?php error_reporting(0); ?>
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
                            <li><a class="waves-effect waves-dark"
                                    href="<?php echo base_url() . 'web/about' ?>">Layanan</a></li>
                            <li><a class="waves-effect waves-dark" href="<?php echo base_url() . 'Data' ?>">Jadwal
                                    Dokter</a></li>
                            <li><a class="waves-effect waves-dark"
                                    href="<?php echo base_url() . 'web/tentang' ?>">Tentang</a></li>
                            <li><a class="waves-effect waves-dark" href="<?php echo base_url() . 'Login' ?>">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <section id="banner">
                <div id="main-slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="<?php echo base_url(); ?>assets7/img/slides/4.jpg" width="100%" height="50%">
                            <div class="flex-caption">

                                <p>Anda bisa mempercayai kami.</p>
                            </div>
                        </li>
                        <li>
                            <img src="<?php echo base_url(); ?>assets7/img/slides/3.jpg" alt="" />
                            <div class="flex-caption">
                                <h3>Sistem Pengaduan dan Saran</h3>
                                <p>Segala yang terbaik untuk anda.</p>

                            </div>
                        </li>
                    </ul>

                </div>

        </header>



        <?php include 'v_layanan.php'; ?>

        <?php include 'tentang/v_tentang.php'; ?>
        <?php include 'v_artikel.php'; ?>

        <!--/ Section Blog End /-->
        <?php include 'v_slider.php'; ?>