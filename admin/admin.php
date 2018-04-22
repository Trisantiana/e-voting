<?php
    include_once "../class/Db.php";
    include_once "../class/Ff.php";

    $nik = isset($_SESSION['nik']) ?$_SESSION['nik']:"";
    if ($nik == "1") {
        $ff->alert("Data Tidak Terdaftar");
        $ff->redirect("index.php");
    }
?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>admin-Pilgub</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="../bootstrap/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="../bootstrap/bower_components/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="../bootstrap/bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" type="text/css" href="../bootstrap/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


  <link rel="stylesheet" href="../bootstrap/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../bootstrap/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    <header class="main-header">

    <a href="../bootstrap/index2.html" class="logo">

      <span class="logo-mini"><b>Pilgub</b></span>

        <span class="logo-lg"><b>Pilgub</b>Jateng</span>
    </a>

    <nav class="navbar navbar-static-top">

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">








          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../images/pilgub.jpg" class="user-image" alt="User Image">
              <?php
                $q = $odb->select("admin");
                $a = $q->fetch();
              ?>
              <span class="hidden-xs"><?=$a["username"]?></span>
            </a>
            <ul class="dropdown-menu">

              <li class="user-header">
                <img src="../images/pilgub.jpg" class="img-circle" alt="User Image">

                <p>
                  <?=$a["username"]?> - <?=$a["level"]?> Pilgub Jateng
                </p>
              </li>



              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>

          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>


<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="../images/pilgub.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>AYO MILIH LUUR!</p>
            </div>
        </div>

            <ul class="sidebar-menu" data-widget="tree">
                <li class="header"> NAVIGATION</li>
                    <li >
                        <a href="admin.php">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="?hal=data-pemilih">
                            <i class="fa fa-user"></i> <span>Data Pemilih</span>
                        <span class="pull-right-container">
                            <?php
                                    $q = $odb->select("pemilih");
                                    $a = $odb->nur($q);
                                ?>
                            <span class="label label-success pull-right hidden-sm hidden-xs"><?=$a?></span>

                        </span>
                        </a>
                    </li>
                    <li>
                        <a href="?hal=data-kandidat">
                            <i class="fa fa-user"></i> <span>Data Kandidat</span>
                            <?php
                                    $q = $odb->select("kandidat");
                                    $a = $odb->nur($q);
                            ?>
                           <span class="pull-right-container">
                                <small class="label pull-right bg-green"><?=$a?></small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="?hal=data-admin">
                        <i class="fa fa-user"></i> <span>Data Admin</span>
                        <span class="pull-right-container">
                            <?php
                                    $q = $odb->select("admin");
                                    $a = $odb->nur($q);
                                ?>
                            <span class="label label-success pull-right hidden-sm hidden-xs"><?=$a?></span>

                        </span>
                        </a>
                    </li>

                    <li>
                        <a href="?hal=data-hasil">
                        <i class="fa fa-th"></i> <span> Perhitungan Suara</span>
                        <span class="pull-right-container">
                            <?php
                                    $q = $odb->select("hasil");
                                    $a = $odb->nur($q);
                                ?>
                            <span class="label label-success pull-right hidden-sm hidden-xs"><?=$a?></span>

                        </span>
                        </a>
                    </li>
                    <li class="treeview">
                      <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Charts</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="../bootstrap/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                        <li><a href="../bootstrap/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                        <li><a href="../bootstrap/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                        <li><a href="../bootstrap/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                      </ul>
                    </li>
                </li>
            </ul>






    </section>

</aside>

  <div class="content-wrapper">

    <section class="content">
    <?php
        $hal=isset($_GET['hal']) ?$_GET['hal']:"dashboard";
        include("$hal".'.php');
        ?>


    </section>

  </div>


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Pilgub-Jateng</b> 2018
    </div>
    <strong>Copyright &copy; 2018 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>


<script src="../bootstrap/bower_components/jquery/dist/jquery.min.js"></script>

<script src="../bootstrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../bootstrap/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="../bootstrap/bower_components/fastclick/lib/fastclick.js"></script>

<script src="../bootstrap/dist/js/adminlte.min.js"></script>

<script src="../bootstrap/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>

<script src="../bootstrap/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bootstrap/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
