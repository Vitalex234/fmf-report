<?php

namespace App;

use App\Report;

class ReportPdf extends Report
{
    public function generate()
    {
        return 'pdf report';
    }
}