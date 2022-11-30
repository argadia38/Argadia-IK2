<?php
    include("koneksi.php");

        $strsql="DELETE FROM mhs WHERE nim=:nim";
        $params=[
            ":nim"=>$_GET['crNIM']
        ];

    $result=$conn->prepare($strsql);
    $result->execute($params);
    
    header('location:data_mhs.php');
?>