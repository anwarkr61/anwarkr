<?php

//nama file data01.php

include"koneksidb.php";

$a = mysqli_query($conn,"select * from m_mahasiswa");
echo"<table border='1' width='50%' align='center'>";
echo"<th colspan='5'> <b>DATA MAHASISWA</b> </th>";
echo"<tr>";
echo"<th> Id </th>";
echo"<th> NIM </th>";
echo"<th> NAMA </th>";
echo"<th> JENIS KELAMIN </th>";
echo"<th> ALAMAT </th>";
echo"</tr>";
$c = 1;
while($b = mysqli_fetch_array($a)){
			if ($b['jk'] == 'P') {
				$jk = 'Perempuan' ;
			}
			else {
				$jk = 'Laki Laki'; };
			echo"<tr>";
			echo"<td> $c </td> ";
			echo"<td> $b[nim] </td> ";
			echo"<td> $b[nm_mhs] </td> ";
			echo"<td> $jk </td> ";
			echo"<td> $b[alamat] </td> ";
			echo"</tr>";
			}
echo"</table>";
?>