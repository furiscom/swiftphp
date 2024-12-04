<?php

namespace App\Models;

class Attendance
{
    // Properti untuk koneksi database (misalnya menggunakan PDO)
    protected $db;

    public function __construct()
    {
        // Inisialisasi koneksi database, misalnya menggunakan PDO
        $this->db = new \PDO('mysql:host=localhost;dbname=astrazenith', 'root', '');
    }

    // Method untuk mengambil semua data absensi
    public function getAll()
    {
        $stmt = $this->db->query('SELECT * FROM attendances');
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Method untuk mengambil absensi berdasarkan ID siswa
    public function getByStudentId($studentId)
    {
        $stmt = $this->db->prepare('SELECT * FROM attendances WHERE student_id = :student_id');
        $stmt->bindParam(':student_id', $studentId, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Method untuk menyimpan absensi baru
    public function create($studentId, $date, $status, $remarks = null)
    {
        $stmt = $this->db->prepare('INSERT INTO attendances (student_id, date, status, remarks) VALUES (:student_id, :date, :status, :remarks)');
        $stmt->bindParam(':student_id', $studentId, \PDO::PARAM_INT);
        $stmt->bindParam(':date', $date, \PDO::PARAM_STR);
        $stmt->bindParam(':status', $status, \PDO::PARAM_STR);
        $stmt->bindParam(':remarks', $remarks, \PDO::PARAM_STR);
        return $stmt->execute();
    }
    public function getById($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM siswa WHERE id = :id');
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
