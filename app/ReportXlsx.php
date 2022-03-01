<?php

namespace App;

use App\Report;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ReportXlsx extends Report
{
    public function generate()
    {
        $filename = __DIR__.'/uploads/'.uniqid('report-xlsx-').'.xlsx';
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', $this->title);
        $sheet->setCellValue('A2', 'г.________');
        $sheet->setCellValue('I2', date('d-m-Y'));
        $sheet->fromArray(array_keys($this->data[0]), null, 'A4');
        $sheet->fromArray($this->data, null, 'A5');
        $writer = new Xlsx($spreadsheet);
        $writer->save($filename);

        if (file_exists($filename)) {
            return $filename;
        }
    }
}