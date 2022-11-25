<?php
$strserver="mysql:host=localhost;dbname=data_mahasiswa";
$conn=new PDO($strserver,"root","");
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

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
$result=$conn->prepare($strsql);
$result->execute($params);

header('location:data_mhs.php');