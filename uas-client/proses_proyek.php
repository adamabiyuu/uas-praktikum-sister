<?php
include "client_proyek.php";
if ($_POST['aksi'] == 'tambah') {
    $data = array(
        "id_proyek" => $_POST['id_proyek'],
        "nama_proyek" => $_POST['nama_proyek'],
        "tanggal_mulai" => $_POST['tanggal_mulai'],
        "tanggal_selesai" => $_POST['tanggal_selesai'],
        "status_proyek" => $_POST['status_proyek'],
        "aksi" => $_POST['aksi']
    );
    $proyek->tambah_proyek($data);
    header('location:lihat_proyek.php');
} else if ($_POST['aksi'] == 'ubah') {
    $data = array(
        "id_proyek" => $_POST['id_proyek'],
        "nama_proyek" => $_POST['nama_proyek'],
        "tanggal_mulai" => $_POST['tanggal_mulai'],
        "tanggal_selesai" => $_POST['tanggal_selesai'],
        "status_proyek" => $_POST['status_proyek'],
        "aksi" => $_POST['aksi']
    );
    $proyek->ubah_proyek($data);
    header('location:lihat_proyek.php');
} elseif ($_GET['aksi'] == 'hapus') {
    $data = array(
        "id_proyek" => $_GET['id_proyek'],
        "aksi" => $_GET['aksi']
    );
    $proyek->hapus_proyek($data);
    header('location:lihat_proyek.php');
}
unset($proyek, $data);
