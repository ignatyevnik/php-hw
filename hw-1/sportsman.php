<?php
//  Дано:
// $x - количество километров, которое спортсмен пробежал в первый день
// $y - количество километров (не может быть меньше $x)
//
// В первый день спортсмен пробежал $x километров, а затем он каждый день увеличивал пробег на 10% от предыдущего значения.
// Определить номер дня, на который пробег спортсмена составит не менее $y километров.

$x = 20;
$y = 100;
$days = 1;
while ($x < $y) {
    $x *= 1.1;
    var_dump($x);
    $days++;
}
echo "Кол-во дней: $days";