<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

    include_once "../class/Db.php";
    include_once "../class/Ff.php";

    $aksi = $ff->get("aksi");
    if ($aksi == "add") {
        $post = $odb->sant(INPUT_POST);
        extract($post);
        $sukses = $ff->upload("foto");
        $status= "1";
        $tanggal = date("Y-m-d");
        if ($sukses!="") {
            die($sukses);
            $odb->insert("kandidat", "null, '$no_kandidat', '$nama', '$sukses', '$visi', '$misi'");
            $ff->alert("Data Berhasil Disimpan");
            $ff->redirect("admin.php?hal=data-kandidat");
        } else {
            $odb->insert("kandidat", "null, '$no_kandidat', '$nama', '', '$visi', '$misi'");
            $ff->alert("Data berhasil disimpan tanpa gambar");
            $ff->redirect("admin.php?hal=data-kandidat");
        }
    }
    if ($aksi=="edit") {
        $id = $ff->get("id_kandidat");
        $tanggal = date("Y-m-d");
        $status = "1";
        $post = $odb->sant(INPUT_POST);
        extract($post);
        $odb->update("kandidat" , "no_kandidat='$no_kandidat', nama='$nama', visi='$visi', misi='$misi' where id_kandidat='$id' ");
        $ff->alert("Data Berhasil diubah tanpa gambar");
        $ff->redirect("admin.php?hal=data-kandidat");
    }
    if ($aksi == "ganti") {
        $id = $ff->get("id_kandidat");
        $post = $odb->sant(INPUT_POST);
        extract($post);
        $sukses = $ff->upload("foto");
        $status = "1";
        $tanggal = date("Y-m-d");
        if ($sukses!="") {
            $odb->update("kandidat", "foto='$sukses' where id_kandidat='$id' ");
            $ff->alert("Data berhasil diubah gambar");
            $ff->redirect("admin.php?hal=data-kandidat");
        } else {
            $ff->alert("Gagal ubah gambar");
            $ff->back();
        }
    }
    if ($aksi == "hapus") {
        $id = $ff->get("id_kandidat");
        $odb->delete("kandidat where id_kandidat='$id'");
        $ff->alert("Data berhasil dihapus");
        $ff->redirect("admin.php?hal=data-kandidat");
    }