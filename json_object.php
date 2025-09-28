<?php
$jsonobj = '{"Nama":"kaila","Umur" :19,"Jurusan":"Teknik Informatika"}';

$obj = json_decode($jsonobj);

//mengakses nilai object
echo $obj ->Nama;
echo $obj ->Umur;
echo $obj ->Jurusan;
?>