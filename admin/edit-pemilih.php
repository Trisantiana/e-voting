<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
    $id = $ff->get("id_pemilih");
    $res = $odb->select("pemilih where id_pemilih='$id'");
    $dt = $res->fetch();
?>

<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box box-header">
                <h3 class="box-title">Form Data Pemilih</h3>
            </div>
                <form action="spemilih.php?aksi&id_pemilih=<?=$dt['id_pemilih']?>" method="post">
                    <div class="box-body">
                    <div class="form-group">
                        <label >NIK</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </div>
                            <input type="number" class="form-control" value="<?=$dt["nik"]?>" name="nik">
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Nama</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" class="form-control" value="<?=$dt["nama"]?>" name="nama">
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Alamat</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-home"></i>
                            </div>
                            <input type="text" name="alamat" class="form-control" value="<?=$dt["alamat"]?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Jenis Kelamin</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-tags"></i>
                            </div>
                            <input type="text" name="jenkel" value="<?=$dt["jenkel"]?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Password</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </div>
                            <input type="text" name="pass" value="<?=$dt["pass"]?>" class="form-control">
                        </div>
                    </div>

                    <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Update">
                </form>
            </div>
        </div>
    </div>
</div>