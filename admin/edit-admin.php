<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
    $id = $ff->get("id_admin");
    $res = $odb->select("kandidat where id_admin='$id'");
    $dt = $res->fetch();
?>

<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box box-header">
                <h3 class="box-title">Edit Data Kandidat</h3>
            </div>
            <form action="sadmin.php?aksi=edit&id_kandidat=<?=$dt['id_admin']?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label >Username</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" class="form-control" value="<?=$dt["username"]?>" name="no_kandidat">
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Password</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </div>
                            <input type="text" class="form-control" value="<?=$dt["pass"]?>" name="nama">
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Level</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-tags"></i>
                            </div>
                            <input type="text" class="form-control" value="<?=$dt["level"]?>" name="nama">
                        </div>
                    </div>


                    <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Update">
            </form>
            </div>
        </div>
    </div>
</div>