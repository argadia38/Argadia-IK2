<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="reg_mhswa.html"><button>Tambah Data</button></a>
    <table width="100%" border="1">
        <tr>
            <td>NO</td>
            <td>NIM</td>
            <td>NAMA LENGKAP</td>
            <td>ALAMAT</td>
            <td>TGL LAHIR</td>
            <td>TELP</td>
            <td>EMAIL</td>
            <td>JKEL</td>
            <td>AKSI</td>
        </tr>
        <?php
        $strserver="mysql:host=localhost;dbname=data_mahasiswa";
        $conn=new PDO($strserver,"root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $strsql="SELECT nim,nama,alamat,tgllahir,telp,email,jkel FROM mhs ORDER BY nim";
        $rsmhs=$conn->query($strsql);
        while($kolom=$rsmhs->fetch())
        {
    ?>
    <tr>
        <td>NO</td>
        <td><?php echo $kolom['nim'] ; ?></td>    
        <td><?php echo $kolom['nama'] ; ?></td>
        <td><?php echo $kolom['alamat'] ; ?></td>
        <td><?php echo $kolom['tgllahir'] ; ?></td>
        <td><?php echo $kolom['telp'] ; ?></td>
        <td><?php echo $kolom['email'] ; ?></td>
        <td><?php echo $kolom['jkel'] ; ?></td>
        <td>Edit Del</td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>