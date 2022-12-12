<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rumah Sakit Sayang | Log in</title>


 <!-- Theme style -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/dist/css/login.css">
 <!-- iCheck -->
 <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
</head>
<body class="hold-transition login-page">
 <div class="login-box">
 <div class="login-logo">
 <a href="<?php echo base_url(). 'web/index' ?>"><b>Rumah Sakit</b>Sayang</a>
 </div>
 <!-- /.login-logo -->
 <?php 
 if(isset($_GET['alert'])){
 if($_GET['alert']=="gagal"){
 echo "<div class='alert alert-danger font-weight-bold text-center'>Maaf! Username & Password 
Salah.</div>";
 }else if($_GET['alert']=="belum_login"){
 echo "<div class='alert alert-danger font-weight-bold text-center'>Anda Harus Login Terlebih 
Dulu!</div>";
 }else if($_GET['alert']=="logout"){
 echo "<div class='alert alert-success font-weight-bold text-center'>Anda Telah Logout!</div>";
 }
 } 
 ?>

<div class="container">
        <div class="login-left">
            <div class="login-header">
            <h1>Selamat Datang </h1>
                <p>Admin Silahkan Login</p>
            </div>

 <p class="login-box-msg">www.rumahsakitsayang.com</p>
 <form action="<?php echo base_url().'login/aksi' ?>" method="post">

   
 <div class="form-group has-feedback">
 <input type="text" class="form-control" placeholder="Username" name="username">
 
 </div>
</br>
 <?php echo form_error('username'); ?>
 <div class="form-group has-feedback">
 </div>
                    <div class="form-item">
 <input type="password" class="form-control" placeholder="Password" name="password">
 <span class="glyphicon glyphicon-lock form-control-feedback"></span>
 </div>
 <?php echo form_error('password'); ?>
 <div class="row">
 <div class="col-xs-8">
 <div class="checkbox icheck">
 <label>


 </label>
 </div>
 </div>
 <!-- /.col -->
 <div class="col-xs-4">
</br>

</br>
<a href="<?php echo base_url(). 'web/index' ?>">Kembali</a>
 <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>

 </div>
 <!-- /.col -->
 </div>
 </form>
 </div>
 <!-- /.login-box-body -->
 </div>
 <!-- /.login-box -->
 <!-- jQuery 3 -->
 <script src="<?php echo base_url(); ?>assets3/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="<?php echo base_url(); 
?>assets3/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 
</body>
</html>
</div>