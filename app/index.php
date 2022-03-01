<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once ('carsData.php');

use App\ReportXlsx;
use App\SendReport;

$xlsxReport = new ReportXlsx($carsData);
$sendReport = new SendReport($xlsxReport);
print_r($sendReport->saveToFile());