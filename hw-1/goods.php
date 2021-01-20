<?php
// Вывести в html информацию о товарах из массива $goods.
// Информацию о характеристиках товара
// (description) выводить в таблице.
$goods = [
    [
        'id' => 1,
        'title' => 'Flute',
        'price' => 20000,
        'img' => 'flute.jpg',
        'description' => [
            'color' => 'white',
            'material' => 'bamboo'
        ]
    ],
    [
        'id' => 2,
        'title' => 'Гитара',
        'price' => 18000,
        'img' => 'guitar.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'linden'
        ]
    ],
    [
        'id' => 3,
        'title' => 'Барабан',
        'price' => 68000,
        'img' => 'drum.jpg',
        'description' => [
            'color' => 'brown',
            'material' => 'steel'
        ]
    ],
];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF=8">
    <title>Задача 1</title>
</head>
<body>
<section>
    <div>

        <?php foreach ($goods as $good): ?>
        <h3><?php echo $good['title'] ?></h3>
        <p><?php echo $good['price'] ?></p>
        <img src="./img/goods/<?php echo $good['img'] ?>" height="300" width="300">
        <table>
            <tr>
                <th>Цвет</th>
                <th>Материал</th>
            </tr>
            <tr>
                <td><?php echo $good['description']['color']?> </td>
                <td><?php echo $good['description']['material']?> </td>
            </tr>
        </table>
        <?php endforeach; ?>
    </div>
</section>
</body>
</html>
