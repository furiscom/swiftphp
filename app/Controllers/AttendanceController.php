<?php

namespace App\Controllers;

use App\Models\Attendance;

class AttendanceController
{
    public function index()
    {
        $attendanceModel = new Attendance();
        $attendances = $attendanceModel->getAll();
        echo json_encode($attendances);
    }

    public function create()
    {
        // Render view untuk membuat kehadiran baru
    }

    public function store($data)
    {
        $attendanceModel = new Attendance();
        $attendanceModel->create($data);
        header("Location: /attendances");
    }
}
