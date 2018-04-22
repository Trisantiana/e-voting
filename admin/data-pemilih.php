<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

    $q = "select * from pemilih";
    $page = isset($_GET['page']) ?$_GET['page']:1;
    $pag = $odb->paging($q,4,$page);
?>


<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Data Pemilih</h3>
        <a href="?hal=form-pemilih" class="btn  btn-primary pull-right"><i class="fa fa-plus"></i> Tambah</a>
    </div>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Password</th>
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
                    <td><?=$dt["nik"]?></td>
                    <td><?=$dt["nama"]?></td>
                    <td><?=$dt["alamat"]?></td>
                    <td><?=$dt["jenkel"]?></td>
                    <td><?=$dt["pass"]?></td>
                    <td>
                        <a href="?hal=edit-pemilih&id_pemilih=<?=$dt['id_pemilih']?>" class="btn btn-primary"> <i class="fa fa-edit"></i></a>
                        <a href="?hal=spemilih&aksi=hapus&id_pemilih=<?=$dt['id_pemilih']?>" class="btn btn-danger"> <i class="fa fa-trash"></i></a>
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



