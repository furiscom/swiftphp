<?php

namespace App\Models;

class Student
{
    // Properti untuk koneksi database (misalnya menggunakan PDO)
    protected $db;

    public function __construct()
    {
        // Inisialisasi koneksi database, misalnya menggunakan PDO
        $this->db = new \PDO('mysql:host=localhost;dbname=astrazenith', 'root', '');
    }

    // Method untuk mengambil semua data siswa
    public function getAll()
    {
        $stmt = $this->db->query('SELECT * FROM siswa');
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Method untuk mengambil siswa berdasarkan ID
    public function getById($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM siswa WHERE id = :id');
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    

    // Method untuk menyimpan siswa baru
    public function create($namaLengkap, $nisn, $nik, $tanggalLahir, $tingkatRombel, $alamat, $jenisKelamin, $kebutuhanKhusus, $namaAyahKandung, $namaIbuKandung)
    {
        $stmt = $this->db->prepare('INSERT INTO siswa (nama_lengkap, nisn, nik, tanggal_lahir, tingkat_rombel, alamat, jenis_kelamin, kebutuhan_khusus, nama_ayah_kandung, nama_ibu_kandung) 
                                    VALUES (:nama_lengkap, :nisn, :nik, :tanggal_lahir, :tingkat_rombel, :alamat, :jenis_kelamin, :kebutuhan_khusus, :nama_ayah_kandung, :nama_ibu_kandung)');
        $stmt->bindParam(':nama_lengkap', $namaLengkap, \PDO::PARAM_STR);
        $stmt->bindParam(':nisn', $nisn, \PDO::PARAM_STR);
        $stmt->bindParam(':nik', $nik, \PDO::PARAM_STR);
        $stmt->bindParam(':tanggal_lahir', $tanggalLahir, \PDO::PARAM_STR);
        $stmt->bindParam(':tingkat_rombel', $tingkatRombel, \PDO::PARAM_STR);
        $stmt->bindParam(':alamat', $alamat, \PDO::PARAM_STR);
        $stmt->bindParam(':jenis_kelamin', $jenisKelamin, \PDO::PARAM_STR);
        $stmt->bindParam(':kebutuhan_khusus', $kebutuhanKhusus, \PDO::PARAM_STR);
        $stmt->bindParam(':nama_ayah_kandung', $namaAyahKandung, \PDO::PARAM_STR);
        $stmt->bindParam(':nama_ibu_kandung', $namaIbuKandung, \PDO::PARAM_STR);
        return $stmt->execute();
    }
}
