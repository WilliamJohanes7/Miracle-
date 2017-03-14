<?php
$json_data=file_get_contents("tugas.json");
$obj = json_decode($json_data);
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "NIM : "; echo $obj->nim;
echo "<br>";
echo "Progdi : "; echo $obj->progdi;
echo "<br>";
echo "Mata kuliah 1: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Mata kuliah 2: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Mata kuliah 3: ";echo $obj->mata_kuliah[2];
echo "<br>";
echo "Mata kuliah 3: ";echo $obj->mata_kuliah[3];
echo "<br>";
echo "Mata kuliah 3: ";echo $obj->mata_kuliah[4];

?>