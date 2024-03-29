<?php
error_reporting(1);
include "Database.php";
$abc = new Database();

if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');
}
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    exit(0);
}

$postdata = file_get_contents("php://input");

function filter($data)
{
    $data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
    return $data;
    unset($data);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode($postdata);
    $id_pekerja = $data->id_pekerja;
    $nama_pekerja = $data->nama_pekerja;
    $posisi_pekerja = $data->posisi_pekerja;
    $gaji_pekerja = $data->gaji_pekerja;
    $alamat_pekerja = $data->alamat_pekerja;
    $aksi = $data->aksi;

    if ($aksi == 'tambah') {
        $data2 = array(
            'id_pekerja' => $id_pekerja,
            'nama_pekerja' => $nama_pekerja,
            'posisi_pekerja' => $posisi_pekerja,
            'gaji_pekerja' => $gaji_pekerja,
            'alamat_pekerja' => $alamat_pekerja
        );
        $abc->tambah_data($data2);
    } elseif ($aksi == 'ubah') {
        $data2 = array(
            'id_pekerja' => $id_pekerja,
            'nama_pekerja' => $nama_pekerja,
            'posisi_pekerja' => $posisi_pekerja,
            'gaji_pekerja' => $gaji_pekerja,
            'alamat_pekerja' => $alamat_pekerja
        );
        $abc->ubah_data($data2);
    } elseif ($aksi == 'hapus') {
        $abc->hapus_data($id_pekerja);
    }

    unset($postdata, $data, $data2, $id_pekerja, $nama_pekerja, $posisi_pekerja, $gaji_pekerja, $alamat_pekerja, $aksi, $abc);
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (($_GET['aksi'] == 'tampil') and (isset($_GET['id_pekerja']))) {
        $id_pekerja = filter($_GET['id_pekerja']);
        $data = $abc->tampil_data($id_pekerja);
        echo json_encode($data);
    } else {
        $data = $abc->tampil_semua_data();
        echo json_encode($data);
    }
    unset($postdata, $data, $id_pekerja, $abc);
}
