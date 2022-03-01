<?php

namespace App;

abstract class Report
{
    protected $title = 'Отчет о продажах автомобилей';

    public function __construct (
        protected array $data
    ) {}

    abstract public function generate();
}