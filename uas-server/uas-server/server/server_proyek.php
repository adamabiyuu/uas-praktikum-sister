<?php
error_reporting(1);
include "Database.php";
$abc = new Database();

if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');
}
if ($_SERVER['REQUEST METHOD'] == 'OPTIONS') {
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
    $id_proyek = $data->id_proyek;
    $nama_proyek = $data->nama_proyek;
    $tanggal_mulai = $data->tanggal_mulai;
    $tanggal_selesai = $data->tanggal_selesai;
    $status_proyek = $data->status_proyek;
    $aksi = $data->aksi;

    if ($aksi == 'tambah') {
        $data2 = array(
            'id_proyek' => $id_proyek,
            'nama_proyek' => $nama_proyek,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'status_proyek' => $status_proyek
        );
        $abc->tambah_proyek($data2);
    } elseif ($aksi == 'ubah') {
        $data2 = array(
            'id_proyek' => $id_proyek,
            'nama_proyek' => $nama_proyek,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'status_proyek' => $status_proyek
        );
        $abc->ubah_proyek($data2);
    } elseif ($aksi == 'hapus') {
        $abc->hapus_proyek($id_proyek);
    }

    unset($postdata, $data, $data2, $id_proyek, $nama_proyek, $tanggal_mulai, $tanggal_selesai, $status_proyek, $aksi, $abc);
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (($_GET['aksi'] == 'tampil') and (isset($_GET['id_proyek']))) {
        $id_proyek = filter($_GET['id_proyek']);
        $data = $abc->tampil_proyek($id_proyek);
        echo json_encode($data);
    } else {
        $data = $abc->tampil_semua_proyek();
        echo json_encode($data);
    }
    unset($postdata, $data, $id_proyek, $abc);
}
