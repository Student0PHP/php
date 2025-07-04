<?php

use App\Developer;

require_once ('../vendor/autoload.php');
//$worker = new \App\Worker('Boris',25,[6,8,8]);
$developer = new \App\Developer('Boris',25,[6,8,8]);
$designer = new \App\Designer('Igor',28,[6,8,8]);
//$developer->setPosition('developer');
//$developer->work();
//$developer->rest();

$workers = [$developer, $designer];

$salary = \App\Salary::count($developer->getHours());
//var_dump(\App\Salary::$totalHours);
\App\Salary::$totalHours = \App\Salary::$totalHours + 100;
//var_dump(\App\Salary::$totalHours);
//$salaryObj = new \App\Salary();
//var_dump($salaryObj::$totalHours);

// Абстракция (Если есть классы у которых есть общие свойства и методы то нужно вынести их в отдельный абстрактный класс.)

// Инкапсуляция (Свойства заранее прописаны и никаких новых свойств быть не может.)

// Наследование (Связано с абстракцией, наследование происходит от более абстрактного класса к менее абстрактному классу.)

// Полиморфизм (Создание метода который будет вызываться по одному наименованию, но для каждого объекта выдавать разную реализацию.)

foreach ($workers as $worker) {
    $worker->work();
}