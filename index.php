<?php
require_once ('helpers.php');

$con = mysqli_connect("172.21.0.1", "user", "pass", "doings_bd");

mysqli_set_charset($con, "utf8");

if ($con == false) {
   print("Ошибка подключения: " . mysqli_connect_error());
}
else {
    $list_of_users_projects = 'SELECT `id`, `project_name` FROM projects where user_id = 1';
    $result = mysqli_query($con, $list_of_users_projects);

    if($result) {
        $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    else {
        print("Ошибка. Не удалось отобразить проекты пользователя!");
    }

    $list_of_users_tasks = 'SELECT `id`, `project_id`, `status`, `task_name`, `file_url`, `date_of_implementation` FROM tasks where user_id = 1';
    $result2 = mysqli_query($con, $list_of_users_tasks);

    if ($result2){
        $tasks = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    }
    else {
        print("Ошибка. Не удалось отобразить задачи пользователя!");
    }
//задание 6.1

    $sort_tasks = 'show_users_tasks';
    $tab = filter_input(INPUT_GET, 'tab');
    if ($tab == $value['project_name']) {
    	$sort_field = 'dt_add';
	}
    $sql = 'SELECT * FROM TASKS where user_id = 1';

}

$show_complete_tasks = rand(0, 1);

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
