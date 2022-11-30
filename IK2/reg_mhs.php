<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("koneksi.php");

        $aksi="add";
        if (isset($_GET["crNIM"]))
        {
            $cari=$_GET["crNIM"];
            $strsql="SELECT nim,nama,alamat,tgllahir,telp,email,jkel FROM mhs WHERE nim=$cari";
            $rsmhs=$conn->query($strsql);
            $kolom=$rsmhs->fetch();
            $aksi="edit";
        }
    ?>

    <form method="POST" action="save_mhs.php?aksi=$aksi">
        <h2>Registrasi Mahasiswa</h2>
        <table>
            <tr>
                <td>NO.Induk Mahasiswa</td>
                <td>
                    <input type="hidden" name="TxtOldNIM" value="<?=@$kolom["nim"]; ?>">
                    <input type="text" name="TxtNIM" size="20" value="<?=@$kolom["nim"]; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="TxtNama" size="40" value="<?=@$kolom["nama"]; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea type="text" name="TxtAlamat" size="40" rows="3">
                        <?=@$kolom["alamat"];?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="TxtTglLahir" size="20" value="<?=@$kolom["tgllahir"]; ?>"></td>
            </tr>
            <tr>
                <td>No.Telephone</td>
                <td><input type="text" name="TxtTelp" size="20" value="<?=@$kolom["telp"]; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="TxtMail" size="20" value="<?=@$kolom["email"]; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" value="P" name="opJKel" <?=@$kolom["jkel"]=="p"?"checked":""; ?>>Pria
                    <input type="radio" value="W" name="opJKel" <?=@$kolom["jkel"]=="w"?"checked":""; ?>>Wanita
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>