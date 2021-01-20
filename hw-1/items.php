<?php
//Отсортировать массив по price.
// Используйте функцию для работы с массивами (вручную сортировать не нужно).
$items = [
    [
        'title' => 'Телефон',
        'price' => 100000,
        'count' => 4
    ],
    [
        'title' => 'Часы',
        'price' => 500000,
        'count' => 2
    ],
    [
        'title' => 'Кольцо',
        'price' => 80000,
        'count' => 10
    ],
    [
        'title' => 'Браслет',
        'price' => 120000,
        'count' => 7
    ],
    [
        'title' => 'Галстук',
        'price' => 8000,
        'count' => 50
    ],
];

$price = array_column($items, 'price');

array_multisort($price,SORT_ASC, $items);
var_dump($items);
