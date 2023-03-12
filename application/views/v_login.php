<style>
  .background{
    background-color:#663399;
  }

  .button{
    color: black;
    border: none;
    border-radius:10px;
    padding:10px;
    min-height:15px;
    min-width:70px;

    
  }
</style>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Buku Tamu App | Buku Tamu Online </title>
  <meta name="description" content="GuestBook - Aplikasi Buku Tamu Online terintegrasi dengan Whatsapp Gateway disertai dengan administrasi tata persuratan, mudah digunakan, akurat dan Aman">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/7.JPG'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/iCheck/skins/square/_all.css'?>">


</head>
<body class="background">
<div class="login-box">
  <div>
   <p><?php echo $this->session->flashdata('msg');?></p>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="text-center"><img src="<?php echo base_url().'assets/images/7.JPG'?>" width="200px"></div>
    <h3 class="text-center login-box-msg"><b>Buku Tamu</b></h3>
   
    <form action="<?php echo site_url().'login/auth'?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck ">
            <label>
              <input type="checkbox"> Ingatkan Saya
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="button">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <!-- /.social-auth-links -->
    <hr/>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js'?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
