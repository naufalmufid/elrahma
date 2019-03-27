<?php
$daftar_dosen=array(
			"grafik_desain"=>array("Simi", "simo", "Sowo"),
    "Web_Master"=>array("programming"=>"Kelvin", "javascript"=>"Rizal", "bootstrap"=>"Joko")
    );
echo "Daftar Dosen Grafik desain adalah :<br>";
echo $daftar_dosen['grafik_desain'][0].",". $daftar_dosen['grafik_desain'][1].", dan " . $daftar_dosen['grafik_desain'][2];
echo "<br>Daftar Dosen Web master adalah : <br>";
echo $daftar_dosen['Web_Master']['programming'] . ", " . $daftar_dosen['Web_Master']['javascript'] . ", dan " . $daftar_dosen['Web_Master']['bootstrap'];
?>