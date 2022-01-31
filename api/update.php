<?php

include "../config/koneksi.php";

$Id = @$_POST['Id'];
$Nama_Barang = @$_POST['Nama_Barang'];
$Jumlah_Barang = @$_POST['Jumlah_Barang'];

$data = [];

$query = mysqli_query($kon, "UPDATE `barang`
SET `Nama_Barang` ='". $Nama_Barang ."',
`Jumlah_Barang`  = '". $Jumlah_Barang ."'
WHERE `Id` ='". $Id ."'");

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