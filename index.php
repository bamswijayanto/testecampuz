<!-- 
Author: Bambang Wijayanto
Date: 11 Februrari 2022
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
<h1>Logical Test</h1>
<h2>1. Array Loop</h2>
<?php
$aplikasi[0] = "gtAkademik";
$aplikasi[1] = "gtFinansi";
$aplikasi[2] = "gtPerizinan";
$aplikasi[3] = "eCampuz";
$aplikasi[4] = "eOviz";
$i = 1;
	while ($i <= 1) {
		echo "Aplikasi1 " . $aplikasi[0] . ", " . 
		"Aplikasi2 " . $aplikasi[1] . ", " .
		"Aplikasi3 " . $aplikasi[2] . ", " .
		"Aplikasi4 " . $aplikasi[3] . ", " . 
		"Aplikasi4 " . $aplikasi[4] ;
		$i++;
	}
?>

<!-- LT array loop  -->

<!-- Mysql Query -->
<h2>2. MySQL Query</h2>
<p> SELECT tb_mahasiswa.mhs_nim, tb_mahasiswa_nilai.nilai FROM tb_mahasiswa, nilai, tb_matakuliah WHERE tb_matakuliah.mk_kode = "MK303" AND tb_mahasiswa_nilai.nilai = (SELECT max(Value) FROM tb_mahasiswa_nilai WHERE mk_kode = "MK303")	</p>
<!-- Mysql Query -->

<!-- OPerator Logic -->
<h2>3. Operator Logic</h2>
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
<h2>4. Looping Condition</h2>
<?php
	
	 for($no=1; $no<=50; $no++)
        {
            if($no % 3 == 0)
                {echo "$no = Foo <br>";}
            else if ($no % 5 == 0)
                {echo "$no = Bar <br>";}
            else if ($no % 3 || 5 == 0)
                {echo "$no = FooBar <br>";}            
            // else
            // 	{echo "FooBar <br>";}
        }
	
?>
<!-- Perulangan -->


</body>
</html>


