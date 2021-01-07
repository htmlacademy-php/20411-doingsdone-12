<?php
require_once ('helpers.php');
$show_complete_tasks = rand(0, 1);
$projects = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];
$tasks = [
    [
        'name' => 'Собеседование в IT компании',
        'date_of_implementation' => '01.12.2019',
        'project' => 'Работа',
        'done' => false
    ],
    [
        'name' => 'Выполнить тестовое задание',
        'date_of_implementation' => '25.12.2019',
        'project' => 'Работа',
        'done' => false
    ],
    [
        'name' => 'Сделать задание первого раздела',
        'date_of_implementation' => '21.12.2019',
        'project' => 'Учеба',
        'done' => true
    ],
    [
        'name' => 'Встреча с другом',
        'date_of_implementation' => '22.12.2019',
        'project' => 'Входящие',
        'done' => false
    ],
    [
        'name' => 'Купить корм для кота',
        'date_of_implementation' => null,
        'project' => 'Домашние дела',
        'done' =>  false
    ],
    [
        'name' => 'Заказать пиццу',
        'date_of_implementation' => null,
        'project' => 'Домашние дела',
        'done' => false
    ]
];
$page_content = include_template('main.php',
                                 ['tasks' => $tasks,
                                  'projects' => $projects,
                                  'show_complete_tasks' => $show_complete_tasks
                                 ]);

$layout_content = include_template('layout.php',
[
    'content' => $page_content,
    'title' => 'Дела в порядке - Главная'
]);

print($layout_content);
?>
