<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Menghitung Berat Badan IDEAL</h3>
    <table width="50%" border="2">
        <tr>
            <td>Nama Lengkap</td>
            <td>Argadia Fachri Kusuma</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>15 Desember 2003</td>
        </tr>
        <?php
            $jk="Pria";
            echo "<tr>";
            echo "<td>Jenis Kelamin</td>";
            echo "<td>$jk</td>";
            echo "</tr>";

            $berat=50;
            echo "<tr>";
            echo "<td>Berat Badan (kg)</td>";
            echo "<td>$berat</td>";
            echo "</tr>";
                
            $tinggi=1.66;
            echo "<tr>";
            echo "<td>Tinggi Badan</td>";
            echo "<td>$tinggi</td>";
            echo "</tr>";

            $total=$berat/($tinggi*$tinggi);

            if ($total < 18.5)
                {
                    $ket = "Kekurangan berat badan";
                }
                else if ($total < 24.9)
                {
                    $ket = "Normal(Ideal)";
                    
                }
                else if ($total < 29.9)
                {
                    $ket = "Kelebihan Berat Badan";
                }
                else
                {
                    $ket = "Kegemukan(obesitas)";
                }

                $total;
                echo "<tr>";
                echo "<td>BMI</td>";
                echo "<td>$total<br>$ket</td>";
                echo "</tr>";

        ?>
</body>
</html>