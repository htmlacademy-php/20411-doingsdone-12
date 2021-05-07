INSERT INTO users (id, email, password, name, date_registration) VALUES
(1, 'vasya@mail.ru', 'password', 'lohpidr', 21.05.2010),
(2, 'petya@mail.ru', 'qwerty', 'bulochka', 11.05.2015),
(3, 'user@mail.ru', 'flat-surv-28195', 'piska', 01.10.2017);

INSERT INTO projects (id, user_id, project_name) VALUES
(1, 2, 'Работа'),
(1, 1, 'Учеба'),
(1, 2, 'Входящие'),
(1, 2, 'Домашние дела');

INSERT INTO tasks (id, user_id, project_id, date_creation, status, task_name, date_of_task) VALUES
(1, 2, 1, 03.05.2021, false, 'Собеседование в IT компании' 19.02.2021),
(2, 1, 1, 03.05.2021, false, 'Собеседование в IT компании' 19.02.2021),






/*

['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];
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


*/
