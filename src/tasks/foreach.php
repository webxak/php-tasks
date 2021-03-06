<?php

/**
 * Выведите столбец чисел от 1 до 100
 */
foreach (range(1, 100) as $value) {
    echo $value . PHP_EOL;
}

/**
 * Выведите столбец четных чисел в промежутке от 0 до 100
 */
foreach (range(0, 100) as $value) {
    if (($value % 2) == 0) {
        echo $value . PHP_EOL;
    }
}

/**
 * Выведите столбец нечетных чисел в промежутке от 0 до 100
 */
foreach (range(0, 100) as $value) {
    if (($value % 2) !== 0) {
        echo $value . PHP_EOL;
    }
}

/**
 * Дан массив с элементами 1, 2, 3, 4, 5
 * С помощью цикла foreach найдите сумму квадратов элементов этого массива
 * Результат запишите переменную $result
 */
$result = 0;
$a = [1, 2, 3, 4, 5];
foreach ($a as $value) {
    $result += ($value * $value);
}
echo $result;

/**
 * Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'
 * С помощью цикла foreach выведите эти слова в столбик
 */
$list = ['html', 'css', 'php', 'js', 'jq'];
foreach ($list as $value) {
    echo $value . PHP_EOL;
}

/**
 * Дан массив $a 'blue' => 'Синий', 'green' => 'Зеленый', 'red' => 'Красный'
 * С помощью цикла foreach выведите на экран
 * столбец ключей и элементов в формате 'green => зеленый'
 */
$list = ['blue' => 'Синий', 'green' => 'Зеленый', 'red' => 'Красный'];
foreach ($list as $key => $value) {
    echo "{$key}=>{$value}" . PHP_EOL;
}

/**
 * Дан массив $users
 * с ключами 'Коля', 'Вася', 'Петя' и с элементами '200', '300', '400'
 * С помощью цикла foreach выведите на экран
 * столбец строк такого формата: 'Коля - зарплата 200 руб.'
 */
$users = ['Коля' => 200, 'Вася' => 300, 'Петя' => 400];
foreach ($users as $key => $value) {
    echo "{$key} - зарплата {$value} руб." . PHP_EOL;
}





