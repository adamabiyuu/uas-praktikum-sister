<?php
include "client_tugas_pekerja.php";
if ($_POST['aksi'] == 'tambah') {
    $data = array(
        "id_tugas_pekerja" => $_POST['id_tugas_pekerja'],
        "id_tugas" => $_POST['id_tugas'],
        "id_pekerja" => $_POST['id_pekerja'],
        "aksi" => $_POST['aksi']
    );
    $abc->tambah_tugas_pekerja($data);
    header('location:lihat_tugas_pekerja.php');

    // } else if ($_POST['aksi'] == 'ubah') {
    //     $data = array(
    //         "id_berkas" => $_POST['id_berkas'],
    //         "pelamar" => $_POST['pelamar'],
    //         "foto" => $_POST['foto'],
    //         "portofolio" => $_POST['portofolio'],
    //         "ijazah" => $_POST['ijazah'],
    //         "aksi" => $_POST['aksi']
    //     );
    //     $abc->ubah_berkas($data);
    //     header('location:lihat_berkas.php');

} elseif ($_GET['aksi'] == 'hapus') {
    $data = array(
        "id_tugas_pekerja" => $_GET['id_tugas_pekerja'],
        "aksi" => $_GET['aksi']
    );
    $abc->hapus_tugas_pekerja($data);
    header('location:lihat_tugas_pekerja.php');
}
unset($abc, $data);
