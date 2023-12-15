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
    public function tampil_semua_data()
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
    public function tampil_data($id_pekerja)
    {
        $id_pekerja = $this->filter($id_pekerja);
        $client = curl_init($this->url . "?aksi=tampil&id_pekerja=" . $id_pekerja);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        curl_close($client);
        $data = json_decode($response);
        return $data;
        unset($id_pekerja, $client, $response, $data);
    }

    public function tambah_data($data)
    {
        $data = '{  "id_pekerja":"' . $data['id_pekerja'] . '",
                    "nama_pekerja":"' . $data['nama_pekerja'] . '",
                    "posisi_pekerja":"' . $data['posisi_pekerja'] . '",
                    "gaji_pekerja":"' . $data['gaji_pekerja'] . '",
                    "alamat_pekerja":"' . $data['alamat_pekerja'] . '",
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

    public function ubah_data($data)
    {
        $data = '{"id_pekerja":"' . $data['id_pekerja'] . '",
            "nama_pekerja":"' . $data['nama_pekerja'] . '",
            "posisi_pekerja":"' . $data['posisi_pekerja'] . '",
            "gaji_pekerja":"' . $data['gaji_pekerja'] . '",
            "alamat_pekerja":"' . $data['alamat_pekerja'] . '",
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

    public function hapus_data($data)
    {
        $id_pekerja = $this->filter($data['id_pekerja']);
        $data = '{  "id_pekerja":"' . $id_pekerja . '",
                    "aksi":"' . $data['aksi'] . '"
                }';
        $c = curl_init();
        curl_setopt($c, CURLOPT_URL, $this->url);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($c);
        curl_close($c);
        unset($id_pekerja, $data, $c, $response);
    }

    // function yang terakhir kali di-load saat class dipanggil
    public function __destruct()
    { // hapus variable dari memory 
        unset($this->url);
    }
}

$url = 'http://10.90.33.129/uas-server/uas-server/server/server_pekerja.php';
// $url = 'http://10.90.32.105/uas-server/uas-server/server/server_tugas.php';

// buat objek baru dari class client
$pekerja = new Client($url);
