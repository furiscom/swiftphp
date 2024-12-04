<?php

namespace App\Models;

class Report
{
    // Properti untuk koneksi database (misalnya menggunakan PDO)
    protected $db;

    public function __construct()
    {
        // Inisialisasi koneksi database, misalnya menggunakan PDO
        $this->db = new \PDO('mysql:host=localhost;dbname=astrazenith', 'root', '');
    }

    // Method untuk mengambil semua data laporan
    public function getAll()
    {
        $stmt = $this->db->query('SELECT * FROM reports');
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Method untuk mengambil laporan berdasarkan ID siswa
    public function getByStudentId($studentId)
    {
        $stmt = $this->db->prepare('SELECT * FROM reports WHERE student_id = :student_id');
        $stmt->bindParam(':student_id', $studentId, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Method untuk menyimpan laporan baru
    public function create($studentId, $class, $reportDate, $reportDetails)
    {
        $stmt = $this->db->prepare('INSERT INTO reports (student_id, class, report_date, report_details) VALUES (:student_id, :class, :report_date, :report_details)');
        $stmt->bindParam(':student_id', $studentId, \PDO::PARAM_INT);
        $stmt->bindParam(':class', $class, \PDO::PARAM_STR);
        $stmt->bindParam(':report_date', $reportDate, \PDO::PARAM_STR);
        $stmt->bindParam(':report_details', $reportDetails, \PDO::PARAM_STR);
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
