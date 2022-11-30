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
    <a href="reg_mhs.php"><button>Tambah Data</button></a>
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
            include("koneksi.php");

            $strsql="SELECT nim,nama,alamat,tgllahir,telp,email,jkel FROM mhs ORDER BY nim";
            $rsmhs=$conn->query($strsql);
            $no=0;
            while($kolom=$rsmhs->fetch())
            {
                $no++
            
        ?>
        <tr>
            <td><?=$no;?></td>
            <td><?=$kolom['nim'] ; ?></td>    
            <td><?=$kolom['nama'] ; ?></td>
            <td><?=$kolom['alamat'] ; ?></td>
            <td><?=$kolom['tgllahir'] ; ?></td>
            <td><?=$kolom['telp'] ; ?></td>
            <td><?=$kolom['email'] ; ?></td>
            <td><?=$kolom['jkel'] ; ?></td>
            <td>
                <a href="reg_mhs.php?crNIM=<?=$kolom['nim'] ;?>">Edit</a>                        
                <a href="del_mhs.php?crNIM=<?=$kolom['nim'] ;?>">Del</a>                
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>