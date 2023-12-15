<?php
error_reporting(1);
class Client
{
    private $url;

    // function yan pertama kali di load saat class dipanggil 
    public function __construct($url)
    {
        $this->url = $url;
        unset($url);
    }

    // function untuk menghapus selain huruf dan angka
    public function filter($data)
    {
        $data = preg_replace('/[^a-zA-Z0-9]/', '', $data);
        return $data;
        unset($data);
    }
    //TAMPIL SEMUA DATA
    public function tampil_semua_proyek()
    {
        $client = curl_init($this->url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        // mengembalikan data 
        return $data;
        // menghapus variabel dari memory 
        unset($data, $client, $response);
    }

    //TAMPIL DATA
    public function tampil_proyek($id_proyek)
    {
        $id_proyek = $this->filter($id_proyek);
        $client = curl_init($this->url . "?aksi=tampil&id_proyek=" . $id_proyek);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($id_proyek, $client, $response, $data);
    }

    public function tambah_proyek($data)
    {
        $data = '{  "id_proyek":"' . $data['id_proyek'] . '",
                    "nama_proyek":"' . $data['nama_proyek'] . '",
                    "tanggal_mulai":"' . $data['tanggal_mulai'] . '",
                    "tanggal_selesai":"' . $data['tanggal_selesai'] . '",
                    "status_proyek":"' . $data['status_proyek'] . '",
                    "aksi":"' . $data['aksi'] . '"
                }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function ubah_proyek($data)
    {
        $data = '{  "id_proyek":"' . $data['id_proyek'] . '",
            "nama_proyek":"' . $data['nama_proyek'] . '",
            "tanggal_mulai":"' . $data['tanggal_mulai'] . '",
            "tanggal_selesai":"' . $data['tanggal_selesai'] . '",
            "status_proyek":"' . $data['status_proyek'] . '",
            "aksi":"' . $data['aksi'] . '"
        }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($data, $c, $response);
    }

    public function hapus_proyek($data)
    {
        $id_proyek = $this->filter($data['id_proyek']);
        $data = '{  "id_proyek":"' . $id_proyek . '",
                    "aksi":"' . $data['aksi'] . '"
                }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($id_proyek, $data, $c, $response);
    }

    // function yang terakhir kali di-load saat class dipanggil
    public function __destruct()
    { // hapus variable dari memory 
        unset($this->url);
    }
}

$url = 'http://10.90.33.129/uas-server/uas-server/server/server_proyek.php';
// $url = 'http://10.90.32.105 /uas-server/uas-server/server/server_tugas.php';

// buat objek baru dari class client
$proyek = new Client($url);
