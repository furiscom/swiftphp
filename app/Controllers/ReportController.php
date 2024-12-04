<?php

namespace App\Controllers;

use App\Models\Report;

class ReportController
{
    public function generate()
    {
        $reportModel = new Report();
        $report = $reportModel->generate();
        echo $report;
    }
}
