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
    $project_id = filter_input(INPUT_GET, 'id');
    //if ($project_id != null && is_numeric($project_id)) {
        //$list_of_users_tasks.=' and id='.$project_id;
    //}
    $result2 = mysqli_query($con, $list_of_users_tasks);
    if ($result2){
        $tasks = mysqli_fetch_all($result2, MYSQLI_ASSOC);
    }
    else {
        $content = include_template('error.php',
                                    ['error' => mysqli_error($con)]
                                   );
    }
//задание 6.1
/*
    $sort_tasks = 'show_users_tasks';
    $project_id = filter_input(INPUT_GET, 'id');
    var_dump($project_id);
    $sql_show_users_tasks = 'SELECT * FROM TASKS where user_id = 1 and id='.$project_id;
    $res_show_users_tasks = mysqli_query($con, $sql_show_users_tasks);
    if($res_show_users_tasks) {
        $users_tasks = mysqli_fetch_all($res_show_users_tasks, MYSQLI_ASSOC);
    }
    */
}

$show_complete_tasks = rand (0, 1);

$page_content = include_template('main.php',
                                 ['tasks' => $tasks,
                                  'active_project_id' => $project_id,
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
