<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

    $q = "select * from admin";
    $page = isset($_GET['page']) ?$_GET['page']:1;
    $pag = $odb->paging($q,4,$page);
?>

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Data Admin</h3>
        <a href="?hal=form-admin" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah</a>
    </div>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th colspan="2">Option</th>
                </tr>
            </thead>
                <?php
                    $j = $pag["no"];
                    $n = $j + 1;
                    while ($dt = $pag["query"]->fetch()) {
                ?>
            <tbody>
                <tr>
                    <td><?=$n?></td>
                    <td><?=$dt["username"]?></td>
                    <td><?=$dt["pass"]?></td>
                    <td><?=$dt["level"]?></td>

                    <td>
                        <a href="?hal=edit-admin&id_admin=<?=$dt['id_admin']?>" class="btn  btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="?hal=sadmin&aksi=hapus&id_admin=<?=$dt['id_admin']?>" class="btn  btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php
                    $n++;
                }
                ?>
            </tbody>
            <tr>
                <td colspan="6"></td>
            </tr>
        </table>
        <?php
            $odb->nav("?hal=data-pemilih",$pag["jumlah"],$page);
        ?><br><br>
    </div>
</div>

<script src="../bootstrap/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

