<?php

namespace App;

use App\Report;

class ReportDocx extends Report
{

    public function generate()
    {
        return 'docx report';
    }
}