<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box box-header">
                <h3 class="box-title">Form Data Pemilih</h3>
            </div>
            <form action="spemilih.php?aksi=add" method="post">
                <div class="box-body">
                <div class="form-group">
                    <label >NIK</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input type="number" class="form-control" name="nik">
                    </div>
                </div>

                <div class="form-group">
                    <label >Nama</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>

                <div class="form-group">
                    <label >Alamat</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-home"></i>
                        </div>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label> Jenis Kelamin</label> <br>
                    <label>
                      <input type="radio" name="jenkel" class="flat-red" value="Laki-Laki"> Laki-Laki
                    </label>
                    <label>
                      <input type="radio" name="jenkel" class="flat-red" value="Perempuan"> Perempuan
                    </label>
                </div>

                <div class="form-group">
                    <label >Password</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input type="password" name="pass" class="form-control">
                    </div>
                </div>

                <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Simpan">
            </form>
            </div>
        </div>
    </div>
</div>