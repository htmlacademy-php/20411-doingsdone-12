<?php
require_once ('helpers.php');



$con = mysqli_connect("172.21.0.1", "user", "pass", "doings_bd");

mysqli_set_charset($con, "utf8");

if ($con == false) {
   print("Ошибка подключения: " . mysqli_connect_error());
}
else {
    $list_of_users_projects = 'SELECT `id`, `project_name` FROM projects';
    $result = mysqli_query($con, $list_of_users_projects);

    if($result) {
        $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}

$show_complete_tasks = rand(0, 1);
$tasks = [
    [
        'name' => 'Собеседование в IT компании',
        'date_of_implementation' => '19.02.2021',
        'project' => 'Работа',
        'done' => false
    ],
    [
        'name' => 'Выполнить тестовое задание',
        'date_of_implementation' => '15.02.2021',
        'project' => 'Работа',
        'done' => false
    ],
    [
        'name' => 'Сделать задание первого раздела',
        'date_of_implementation' => '14.02.2021',
        'project' => 'Учеба',
        'done' => true
    ],
    [
        'name' => 'Встреча с другом',
        'date_of_implementation' => '16.02.2021',
        'project' => 'Входящие',
        'done' => false
    ],
    [
        'name' => 'Купить корм для кота',
        'date_of_implementation' => '17.02.2021',
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
