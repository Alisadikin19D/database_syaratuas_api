<?php

include "../config/koneksi.php";

$Nama_Barang = @$_POST['Nama_Barang'];
$Jumlah_Barang = @$_POST ['Jumlah_Barang'];

$data = [];

$query = mysqli_query($kon, "INSERT INTO `barang`
( `Nama_Barang` , 
  `Jumlah_Barang` )
  VALUES
  ('". $Nama_Barang ."',
  '". $Jumlah_Barang ."')");

if($query){
    $status = true;
    $pesan = "request success";
    $data[] = $query;
}else{
    $status = false;
    $pesan = "request failed";
}

$json = [
  "status" => $status,
  "pesan" => $pesan,
  "data" => $data
];

header("Content-Type: application/json");
echo json_encode($json);

?>