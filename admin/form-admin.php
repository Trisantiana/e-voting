<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box box-header">
                <h3 class="box-title">Form Data Admin</h3>
            </div>
            <form action="sadmin.php?aksi=add" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label >Username</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </div>
                            <input type="text" class="form-control" name="username">
                        </div>
                    </div>

                    <div class="form-group">
                        <label >Password</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </div>
                            <input type="password" class="form-control" name="pass">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" name="level">
                            <option>Admin</option>
                            <option>Petugas</option>
                        </select>
                    </div>


                    <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Simpan">
            </form>
            </div>
        </div>
    </div>
</div>