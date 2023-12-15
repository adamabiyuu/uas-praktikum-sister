<?php
include "client_tugas.php";
if ($_POST['aksi'] == 'tambah') {
    $data = array(
        "id_tugas" => $_POST['id_tugas'],
        "id_proyek" => $_POST['id_proyek'],
        "deskripsi_tugas" => $_POST['deskripsi_tugas'],
        "tanggal_mulai_tugas" => $_POST['tanggal_mulai_tugas'],
        "tanggal_selesai_tugas" => $_POST['tanggal_selesai_tugas'],
        "status_tugas" => $_POST['status_tugas'],
        "aksi" => $_POST['aksi']
    );
    $tugas->tambah_tugas($data);
    header('location:lihat_tugas.php');
} else if ($_POST['aksi'] == 'ubah') {
    $data = array(
        "id_tugas" => $_POST['id_tugas'],
        "id_proyek" => $_POST['id_proyek'],
        "deskripsi_tugas" => $_POST['deskripsi_tugas'],
        "tanggal_mulai_tugas" => $_POST['tanggal_mulai_tugas'],
        "tanggal_selesai_tugas" => $_POST['tanggal_selesai_tugas'],
        "status_tugas" => $_POST['status_tugas'],
        "aksi" => $_POST['aksi']
    );
    $tugas->ubah_tugas($data);
    header('location:lihat_tugas.php');
} elseif ($_GET['aksi'] == 'hapus') {
    $data = array(
        "id_tugas" => $_GET['id_tugas'],
        "aksi" => $_GET['aksi']
    );
    $tugas->hapus_tugas($data);
    header('location:lihat_tugas.php');
}
unset($tugas, $data);
