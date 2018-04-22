<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pilgub | Memilih</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="bootstrap/bower_components/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="bootstrap/bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="bootstrap/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="bootstrap/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Ayo</b>Memilih</a>
  </div>

  <div class="login-box-body">
    <p class="login-box-msg">Sign in Untuk Memilih</p>

    <form action="admin/admin.php" method="post">
      <div class="form-group has-feedback">
        <input type="number" class="form-control" placeholder="NIK" name="nik">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">

        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="btnsimpan" class="btn btn-primary btn-block btn-flat">Siap Pilih!</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
</div>


<script src="bootstrap/bower_components/jquery/dist/jquery.min.js"></script>

<script src="bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="bootstrap/plugins/iCheck/icheck.min.js"></script>
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

<?php

    session_start();
    include_once "class/Db.php";
    include_once "class/Ff.php";

    $post=$odb->sant(INPUT_POST);
    if (isset($_POST['btnsimpan'])) {
    extract($post);

        $q = $odb->select("pemilih where binary nik = '$nik' and binary pass = '$pass'");
        $hsl = $odb->nur($q);

        if ($hsl < 1) {

        // $ff->alert("Welcome $nik");
        $ff->redirect("index.php");
        } else {

            $ff->alert("Selamat Datang");
            $ff->redirect("admin.php");
        }
    }

?>

