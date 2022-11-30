<?php
    include("koneksi.php");

    if ($_GET["aksi"]=='add')
    {
        $strsql="INSERT INTO mhs(nim,nama,alamat,tgllahir,telp,email,jkel) VALUES(:nim,:nama,:alamat,:tgl,:tlp,:email,:jk)";
        $params=[
            ":nim"=>$_POST['TxtNIM'],
            ":nama"=>$_POST['TxtNama'],
            ":alamat"=>$_POST['TxtAlamat'],
            ":tgl"=>$_POST['TxtTglLahir'],
            ":tlp"=>$_POST['TxtTelp'],
            ":email"=>$_POST['TxtMail'],
            ":jk"=>$_POST['opJKel']
        ];
    }
    else
    {
        $strsql="UPDATE mhs SET nim=:nim,nama=:nama,alamat=:alamat,tgllahir=:tgl,telp=:tlp,email=:email,jkel=:jk WHERE nim=:Nimlama";
        $params=[
            ":nim"=>$_POST['TxtNIM'],
            ":nama"=>$_POST['TxtNama'],
            ":alamat"=>$_POST['TxtAlamat'],
            ":tgl"=>$_POST['TxtTglLahir'],
            ":tlp"=>$_POST['TxtTelp'],
            ":email"=>$_POST['TxtMail'],
            ":jk"=>$_POST['opJKel'],
            ":Nimlama"=>$_POST['TxtOldNIM']
        ];
    }
    $result=$conn->prepare($strsql);
    $result->execute($params);

    header('location:data_mhs.php');
?>