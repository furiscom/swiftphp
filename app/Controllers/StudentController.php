<?php

namespace App\Controllers;

use App\Models\Student;

class StudentController
{
    public function index()
    {
        $studentModel = new Student();
        $students = $studentModel->getAll();
        include "../app/Views/students/index.php";
    }

    public function create()
    {
        include "../app/Views/students/create.php";
    }

    public function store($data)
    {
        $studentModel = new Student();
        $studentModel->create($data);
        header("Location: /students");
    }

    public function show($id)
    {
        $studentModel = new Student();
        $student = $studentModel->getById($id); // Mengambil data siswa berdasarkan ID

        if ($student) {
            // Tampilkan view dan kirim data $student
            include "../app/Views/students/show.php";
        } else {
            http_response_code(404);
            echo "Siswa tidak ditemukan.";
        }
        
    }
}
