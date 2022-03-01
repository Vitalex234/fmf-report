<?php

namespace App;

use App\Report;

class SendReport
{
    protected $report;
    protected $file;

    public function __construct(Report $report) {
        $this->report = $report;
        $this->file = $this->report->generate();
    }

    public function sendEmail()
    {
        //отправка почты и удаление файла $file
        return 'sendEmail';
    }

    public function saveToFile()
    {
        //возвращаем адрес файла, не удаляем сам файл
        return $this->file;
    }

    public function sendResponce()
    {
        //читаем файл, отправляем и удаляем файл
        return 'sendResponce';
    }
}