<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

    include_once "../class/Db.php";
    include_once "../class/Ff.php";

    $aksi=$ff->get("aksi");
    if ($aksi=="add") {
        $post=$odb->sant(INPUT_POST);
        extract($post);
        $odb->insert("pemilih","null,'$nik','$nama','$alamat','$jenkel','$pass'");
        $ff->alert("Data Tersimpan");
        $ff->redirect("admin.php?hal=data-pemilih");
    }
    if ($aksi=="edit") {
        $id=$ff->get("id_pemilih");
        $post=$odb->sant(INPUT_POST);
        extract($post);
        $odb->update("pemilih","nik='$nik',nama='$nama',alamat='$alamat',jenkel='$jenkel',pass='$pass' where id_pemilih='$id'");
        $ff->alert("Data Telah Diubah");
        $ff->redirect("admin.php?hal=data-pemilih");
    }
    if ($aksi=="hapus") {
        $id=$ff->get("id_pemilih");
        $odb->delete("pemilih where id_pemilih='$id'");
        $ff->alert("Data Terhapus");
        $ff->redirect("admin.php?hal=data-pemilih");
    }