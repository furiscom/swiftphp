<?php

namespace App\Models;

class User
{
    protected $db;

    public function __construct()
    {
        // Inisialisasi koneksi database, misalnya menggunakan PDO
        $this->db = new \PDO('mysql:host=localhost;dbname=astrazenith', 'root', '');
    }

    // Method untuk mengambil semua data pengguna
    public function getAll()
    {
        $stmt = $this->db->query('SELECT * FROM siswa');
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Method untuk mengambil data pengguna berdasarkan ID
    public function find($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM siswa WHERE id = :id');
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    public function getById($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM siswa WHERE id = :id');
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
