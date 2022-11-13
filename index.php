<?php

declare(strict_types=1);


use Objects\Humans as Human;
use Objects\Transport as Auto;
use Objects\Devices as TV;

$student = new Human\Student(45, 'Антон', 'Смоленский');
echo $student->name;
echo PHP_EOL;
echo $student->getAge();
echo PHP_EOL;
echo (Human\Student::getInstitution());
echo PHP_EOL;
echo '===========================================';
echo PHP_EOL;

$car = new Auto\Car('UAZ', 31631);
$car->setOwner('Олаф', 'Шольц');
echo ($car->getFullModelIndex());
echo PHP_EOL;
echo '===========================================';
echo PHP_EOL;

$tv = new TV\Televisor('Рубин', 18);
echo ($tv->getFullModelIndex());
echo PHP_EOL;
echo (TV\Televisor::getNickname());
echo PHP_EOL;
echo '===========================================';
echo PHP_EOL;

echo 'HomeWork '. (Auto\Car::getHomeWorkCode()) . ' has compleate!';