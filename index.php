<!-- 
Author: Bambang Wijayanto
Date: 3 March 2021
Desc: Test Web Developer in eCampuz
 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>	Alamat github: https://github.com/bamswijayanto/testecampuz </p>

<!-- LT array loop  -->
<h2>Array Loop Logical Test</h2>
<?php
$i = 1;
$array = array('gtAkademik', 'gtFinansi', 'gtPerizinan', 'eCampuz', 'eOviz');
# perulangan ini akan dilakukan selama nilai $i kurang dari 20.
while ($row = each($array)) {
    echo "Aplikasi ke-{$i} adalah: ";
    echo $row['value'] . ' ';
    echo "<br>";

    $i++;
}
?>
<!-- LT array loop  -->

<!-- Mysql Query -->
<h2>Jawaban Query: </h2>
<p> SELECT tb_mahasiswa.mhs_nim, tb_mahasiswa_nilai.nilai FROM tb_mahasiswa, nilai, tb_matakuliah WHERE tb_matakuliah.mk_kode = "MK303" AND tb_mahasiswa_nilai.nilai = (SELECT max(Value) FROM tb_mahasiswa_nilai WHERE mk_kode = "MK303")	</p>
<!-- Mysql Query -->

<!-- OPerator Logic -->
<h2>Jawaban Fungsi Bagi: </h2>
<?php 	
function pembagian()
{
$nilai=8/4;
$hasil=round($nilai);
echo"$hasil";
}
echo pembagian();
 ?>
<!-- OPerator Logic -->

<!-- Perulangan -->
<h2>Jawaban Perulangan: </h2>

<!-- Perulangan -->


</body>
</html>