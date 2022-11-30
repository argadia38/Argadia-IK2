<?php
    try {
        $strserver="mysql:host=localhost;dbname=data_mahasiswa";
        $conn=new PDO($strserver,"root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    catch (PDOexception $e) {
        echo $e->getMessage();
    }
?>