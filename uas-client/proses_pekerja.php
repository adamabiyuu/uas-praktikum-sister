<?php
include "client_pekerja.php";
var_dump($_POST); 
if ($_POST['aksi'] == 'tambah') {
    $data = array(
        "id_pekerja" => $_POST['id_pekerja'],
        "nama_pekerja" => $_POST['nama_pekerja'],
        "posisi_pekerja" => $_POST['posisi_pekerja'],
        "gaji_pekerja" => $_POST['gaji_pekerja'],
        "alamat_pekerja" => $_POST['alamat_pekerja'],
        "aksi" => $_POST['aksi']
    );
    $pekerja->tambah_data($data);
    header('location:lihat_pekerja.php');
} else if ($_POST['aksi'] == 'ubah') {
    $data = array(
        "id_pekerja" => $_POST['id_pekerja'],
        "nama_pekerja" => $_POST['nama_pekerja'],
        "posisi_pekerja" => $_POST['posisi_pekerja'],
        "gaji_pekerja" => $_POST['gaji_pekerja'],
        "alamat_pekerja" => $_POST['alamat_pekerja'],
        "aksi" => $_POST['aksi']
    );
    $pekerja->ubah_data($data);
    header('location:lihat_pekerja.php');
} elseif ($_GET['aksi'] == 'hapus') {
    $data = array(
        "id_pekerja" => $_GET['id_pekerja'],
        "aksi" => $_GET['aksi']
    );
    $pekerja->hapus_data($data);
    header('location:lihat_pekerja.php');
}
unset($pekerja, $data);
