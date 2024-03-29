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
        header("Access-Control-Allow_Methods: GET, POST, OPTIONS");
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
    $id_tugas_pekerja = $data->id_tugas_pekerja;
    $id_tugas = $data->id_tugas;
    $id_pekerja = $data->id_pekerja;
    $aksi = $data->aksi;

    if ($aksi == 'tambah') {
        $data2 = array('id_tugas_pekerja' => $id_tugas_pekerja, 'id_tugas' => $id_tugas, 'id_pekerja' => $id_pekerja);
        $abc->tambah_tugas_pekerja($data2);
    } elseif ($aksi == 'hapus') {
        $abc->hapus_tugas_pekerja($id_tugas);
    }

    unset($postdata, $data, $data2, $id_tugas_pekerja, $id_tugas, $id_pekerja, $aksi, $abc);
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (($_GET['aksi'] == 'tampil') and (isset($_GET['id_tugas_pekerja']))) {
        $id_tugas_pekerja = filter($_GET['id_tugas_pekerja']);
        $data = $abc->tampil_tugas_pekerja($id_tugas_pekerja);
        echo json_encode($data);
    } else {
        $data = $abc->tampil_semua_tugas_pekerja();
        echo json_encode($data);
    }
    unset($postdata, $data, $id_tugas_pekerja, $abc);
}
