<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

    include_once "../class/Db.php";
    include_once "../class/Ff.php";

    $aksi=$ff->get("aksi");
    if ($aksi=="add") {
        $post=$odb->sant(INPUT_POST);
        extract($post);
        $odb->insert("admin","null,'$username','$pass','$level'");
        $ff->alert("Data Tersimpan");
        $ff->redirect("admin.php?hal=data-admin");
    }
    if ($aksi=="edit") {
        $id=$ff->get("id_admin");
        $post=$odb->sant(INPUT_POST);
        extract($post);
        $odb->update("admin","username='$username',pass='$pass',level='$level' where id_admin='$id'");
        $ff->alert("Data Telah Diubah");
        $ff->redirect("admin.php?hal=dkategori");
    }
    if ($aksi=="hapus") {
        $id=$ff->get("id_admin");
        $odb->delete("admin where id_admin='$id'");
        $ff->alert("Data Terhapus");
        $ff->redirect("admin.php?hal=data-admin");
    }