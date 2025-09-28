<?php
$jsonobj = '{"Nama":"kaila","Umur" :19,"Jurusan":"Teknik Informatika"}';

$arr = json_decode($jsonobj, true);

//mengakses nilai object
echo $arr ["Nama"];
echo $arr ["Umur"];
echo $arr ["Jurusan"];
?>