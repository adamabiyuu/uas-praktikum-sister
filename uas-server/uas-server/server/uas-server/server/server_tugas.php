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
    $id_tugas = $data->id_tugas;
    $id_proyek = $data->id_proyek;
    $deskripsi_tugas = $data->deskripsi_tugas;
    $tanggal_mulai_tugas = $data->tanggal_mulai_tugas;
    $tanggal_selesai_tugas = $data->tanggal_selesai_tugas;
    $status_tugas = $data->status_tugas;
    $aksi = $data->aksi;

    if ($aksi == 'tambah') {
        $data2 = array(
            'id_tugas' => $id_tugas,
            'id_proyek' => $id_proyek,
            'deskripsi_tugas' => $deskripsi_tugas,
            'tanggal_mulai_tugas' => $tanggal_mulai_tugas,
            'tanggal_selesai_tugas' => $tanggal_selesai_tugas,
            'status_tugas' => $status_tugas
        );
        $abc->tambah_tugas($data2);
    } elseif ($aksi == 'ubah') {
        $data2 = array(
            'id_tugas' => $id_tugas,
            'id_proyek' => $id_proyek,
            'deskripsi_tugas' => $deskripsi_tugas,
            'tanggal_mulai_tugas' => $tanggal_mulai_tugas,
            'tanggal_selesai_tugas' => $tanggal_selesai_tugas,
            'status_tugas' => $status_tugas
        );
        $abc->ubah_tugas($data2);
    } elseif ($aksi == 'hapus') {
        $abc->hapus_tugas($id_tugas);
    }

    unset($postdata, $data, $data2, $id_tugas, $id_proyek, $deskripsi_tugas, $tanggal_mulai_tugas, $tanggal_selesai_tugas, $status_tugas, $aksi, $abc);
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (($_GET['aksi'] == 'tampil') and (isset($_GET['id_tugas']))) {
        $id_tugas = filter($_GET['id_tugas']);
        $data = $abc->tampil_tugas($id_tugas);
        echo json_encode($data);
    } else {
        $data = $abc->tampil_semua_tugas();
        echo json_encode($data);
    }
    unset($postdata, $data, $id_tugas, $abc);
}
