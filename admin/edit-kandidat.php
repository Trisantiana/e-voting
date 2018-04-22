<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
    $id = $ff->get("id_kandidat");
    $res = $odb->select("kandidat where id_kandidat='$id'");
    $dt = $res->fetch();
?>

<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box box-header">
                <h3 class="box-title">Edit Data Kandidat</h3>
            </div>
            <form action="skandidat.php?aksi=edit&id_kandidat=<?=$dt['id_kandidat']?>" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label >No. Kandidat</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </div>
                            <input type="number" class="form-control" value="<?=$dt["no_kandidat"]?>" name="no_kandidat">
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
                        <label >Visi</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-newspaper"></i>
                            </div>
                            <input type="text" name="visi" value="<?=$dt["visi"]?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Misi</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-newspaper"></i>
                            </div>
                            <input type="text" name="misi" value="<?=$dt["misi"]?>" class="form-control">
                        </div>
                    </div>

                    <input type="submit" name="btnsimpan" class="btn btn-primary pull-left" value="Update"> <br><br><br>
            </form>
            <form method="post" action="skandidat.php?aksi=ganti&id_kandidat=<?=$id?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputFile">Gambar</label>
                    <img src="../images/<?=$dt["foto"]?>" width="50" height="50">
                    <input type="file" name="foto" value="<?=$dt["foto"]?>" id="exampleInputFile">
                </div>
                <input type="submit" name="btngambar" class="btn btn-primary pull-left" value="Update Gambar">
            </form>
            </div>
        </div>
    </div>
</div>