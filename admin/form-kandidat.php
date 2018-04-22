<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box box-header">
                <h3 class="box-title">Form Data Pemilih</h3>
            </div>
            <form action="skandidat.php?aksi=add" method="post" enctype="multipart/form-data">
                <div class="box-body">
                <div class="form-group">
                    <label >No.Kandidat</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input type="number" class="form-control" name="no_kandidat">
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
                    <label for="exampleInputFile">Gambar</label>
                        <input type="file" name="foto" id="exampleInputFile">
                </div>


                <div class="form-group">
                    <label >Visi</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-tags"></i>
                        </div>
                        <textarea name="visi" class="form-control"></textarea>
                    </div>
                </div>

               <div class="form-group">
                    <label >Misi</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-tags"></i>
                        </div>
                        <textarea name="misi" class="form-control"></textarea>
                    </div>
                </div>

                <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Simpan">
            </form>
            </div>
        </div>
    </div>
</div>