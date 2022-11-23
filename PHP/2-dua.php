<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Mengenal Variable ARRAY danLOOPS</h2>
    <?php
    $Nim=array("2022320093","2022320099","2022320102","2022320094");
    $Nama=array("Fanny","Fito","Yoga","Arga");
    $Kota=array("Magetan","Magetan","Madiun","Madiun");
    $TglLahir=array("09/03/2003","06/21/2003","08/16/2002","12/15/2003");
    $NmBulan=array("September","Juni","Agustus","December");
    $nmhari=array("Rabu","Sabtu","Jumat","Senin");
    ?>
    <table border="1" width="100%">
        <tr>
            <td>No</td>
            <td>NIM</td>
            <td>Nama Lengkap</td>
            <td>Kota</td>
            <td>Tgl Lahir</td>
            <td>Usia</td>
        </tr>
        <?php
        for ($i=0;$i<count($Nim);$i++)
        {
            $Tgl=date(" Y ",strtotime($TglLahir[$i]));
            $usia=date("Y")-date("Y",strtotime($TglLahir[$i]));
            ?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $Nim[$i]; ?></td>
                <td><?php echo $Nama[$i]; ?></td>
                <td><?php echo $Kota[$i]; ?></td>
                <td><?php echo $nmhari[$i],date(", d "),$NmBulan[$i],$Tgl;?></td>
                <td><?php echo $usia." Tahun"; ?></td>
            </tr>
    <?php
        }
    ?>    
</body>
</html>
