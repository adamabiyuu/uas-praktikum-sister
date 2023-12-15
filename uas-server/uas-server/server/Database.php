    <?php
    class Database
    {
        private $host = "localhost";
        private $dbname = "task_manager";
        private $user = "root";
        private $password = "";
        private $port = "3306";
        private $conn;

        // function yang pertama kali di-load saat class dipanggil
        public function __construct()
        { // koneksi database 
            try {
                $this->conn = new PDO("mysql:host=$this->host;port=$this->port; dbname=$this->dbname; charset=utf8", $this->user, $this->password);
            } catch (PDOException $e) {
                echo "Koneksi gagal";
            }
        }


        ////////////////--------- FUNCTION UNTUK TABEL PEKERJA ----------/////////////////
        public function tampil_semua_data()
        {
            $query = $this->conn->prepare("select * from pekerja");
            $query->execute();
            // mengambil banyak data dengan fetchAll
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            return $data;
            $query->closeCursor();
            unset($data);
        }
        public function tampil_data($id_pekerja)
        {
            $query = $this->conn->prepare("select id_pekerja, nama_pekerja, posisi_pekerja, gaji_pekerja, alamat_pekerja from pekerja where id_pekerja=?");
            $query->execute(array($id_pekerja));
            // mengambil satu data dengan fetch
            $data = $query->fetch(PDO::FETCH_ASSOC); // mengembalikan data
            return $data;
            // hapus variable dari memory
            $query->closeCursor();
            unset($id_pekerja, $data);
        }

        public function tambah_data($data)
        {
            $query = $this->conn->prepare("insert ignore into pekerja(id_pekerja, nama_pekerja, posisi_pekerja, gaji_pekerja, alamat_pekerja) values (?,?,?,?,?)");
            $query->execute(array($data['id_pekerja'], $data['nama_pekerja'], $data['posisi_pekerja'], $data['gaji_pekerja'], $data['alamat_pekerja']));
            $query->closeCursor();
            unset($data);
        }

        public function ubah_data($data)
        {
            $query = $this->conn->prepare("update pekerja set nama_pekerja=?, posisi_pekerja=?, gaji_pekerja=?, alamat_pekerja=? where id_pekerja=?");
            $query->execute(array($data['nama_pekerja'], $data['posisi_pekerja'], $data['gaji_pekerja'], $data['alamat_pekerja'], $data['id_pekerja']));
            $query->closeCursor();
            unset($data);
        }

        public function hapus_data($id_pekerja)
        {
            $query = $this->conn->prepare("delete from pekerja where id_pekerja=?");
            $query->execute(array($id_pekerja));
            $query->closeCursor();
            unset($id_pekerja);
        }

        ////////////////--------- FUNCTION UNTUK TABEL PROYEK ----------/////////////////
        public function tampil_semua_proyek()
        {
            $query = $this->conn->prepare("select * from proyek");
            $query->execute();
            // mengambil banyak data dengan fetchAll
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            return $data;
            $query->closeCursor();
            unset($data);
        }
        public function tampil_proyek($id_proyek)
        {
            $query = $this->conn->prepare("select id_proyek, nama_proyek, tanggal_mulai, tanggal_selesai, status_proyek from proyek where id_proyek=?");
            $query->execute(array($id_proyek));
            // mengambil satu data dengan fetch
            $data = $query->fetch(PDO::FETCH_ASSOC); // mengembalikan data
            return $data;
            // hapus variable dari memory
            $query->closeCursor();
            unset($id_proyek, $data);
        }

        public function tambah_proyek($data)
        {
            $query = $this->conn->prepare("insert ignore into proyek(id_proyek, nama_proyek, tanggal_mulai, tanggal_selesai, status_proyek  ) values (?,?,?,?,?)");
            $query->execute(array($data['id_proyek'], $data['nama_proyek'], $data['tanggal_mulai'], $data['tanggal_selesai'], $data['status_proyek']));
            $query->closeCursor();
            unset($data);
        }

        public function ubah_proyek($data)
        {
            $query = $this->conn->prepare("update proyek set nama_proyek=?, tanggal_mulai=?, tanggal_selesai=?, status_proyek=? where id_proyek=?");
            $query->execute(array($data['nama_proyek'], $data['tanggal_mulai'], $data['tanggal_selesai'], $data['status_proyek'], $data['id_proyek']));
            $query->closeCursor();
            unset($data);
        }

        public function hapus_proyek($id_proyek)
        {
            $query = $this->conn->prepare("delete from proyek where id_proyek=?");
            $query->execute(array($id_proyek));
            $query->closeCursor();
            unset($id_proyek);
        }

        ////////////////--------- FUNCTION UNTUK TABEL TUGAS ----------/////////////////
        public function tampil_semua_tugas()
        {
            $query = $this->conn->prepare("select * from tugas");
            $query->execute();
            // mengambil banyak data dengan fetchAll
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            return $data;
            $query->closeCursor();
            unset($data);
        }
        public function tampil_tugas($id_tugas)
        {
            $query = $this->conn->prepare("select id_tugas, id_proyek, deskripsi_tugas, tanggal_mulai_tugas, tanggal_selesai_tugas, status_tugas from tugas where id_tugas=?");
            $query->execute(array($id_tugas));
            // mengambil satu data dengan fetch
            $data = $query->fetch(PDO::FETCH_ASSOC); // mengembalikan data
            return $data;
            // hapus variable dari memory
            $query->closeCursor();
            unset($id_tugas, $data);
        }

        public function tambah_tugas($data)
        {
            $query = $this->conn->prepare("insert ignore into tugas(id_tugas, id_proyek, deskripsi_tugas, tanggal_mulai_tugas, tanggal_selesai_tugas, status_tugas) values (?,?,?,?,?,?)");
            $query->execute(array($data['id_tugas'], $data['id_proyek'], $data['deskripsi_tugas'], $data['tanggal_mulai_tugas'], $data['tanggal_selesai_tugas'], $data['status_tugas']));
            $query->closeCursor();
            unset($data);
        }

        public function ubah_tugas($data)
        {
            $query = $this->conn->prepare("update tugas set id_proyek=?, deskripsi_tugas=?, tanggal_mulai_tugas=?, tanggal_selesai_tugas=?, status_tugas=? where id_tugas=?");
            $query->execute(array($data['id_proyek'], $data['deskripsi_tugas'], $data['tanggal_mulai_tugas'], $data['tanggal_selesai_tugas'], $data['status_tugas'], $data['id_tugas']));
            $query->closeCursor();
            unset($data);
        }

        public function hapus_tugas($id_tugas)
        {
            $query = $this->conn->prepare("delete from tugas where id_tugas=?");
            $query->execute(array($id_tugas));
            $query->closeCursor();
            unset($id_tugas);
        }

        ////////////////--------- FUNCTION UNTUK TABEL TUGAS_PEKERJA ----------/////////////////
        public function tampil_semua_tugas_pekerja()
        {
            $query = $this->conn->prepare("select * from tugas_pekerja");
            $query->execute();
            // mengambil banyak data dengan fetchAll
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            return $data;
            $query->closeCursor();
            unset($data);
        }
        public function tampil_tugas_pekerja($id_tgs_pekerja)
        {
            $query = $this->conn->prepare("select id_tugas, id_pekerja from tugas_pekerja where id_tgs_pekerja=?");
            $query->execute(array($id_tgs_pekerja));
            // mengambil satu data dengan fetch
            $data = $query->fetch(PDO::FETCH_ASSOC); // mengembalikan data
            return $data;
            // hapus variable dari memory
            $query->closeCursor();
            unset($id_tgs_pekerja, $data);
        }

        public function tambah_tugas_pekerja($data)
        {
            $query = $this->conn->prepare("insert ignore into tugas_pekerja(id_tgs_pekerja,id_tugas, id_pekerja) values (?,?)");
            $query->execute(array($data['id_tgs_pekerja'], $data['id_tugas'], $data['id_pekerja']));
            $query->closeCursor();
            unset($data);
        }

        public function hapus_tugas_pekerja($id_tugas)
        {
            $query = $this->conn->prepare("delete from tugas_pekerja where id_tugas=?");
            $query->execute(array($id_tugas));
            $query->closeCursor();
            unset($id_tugas);
        }
    }
