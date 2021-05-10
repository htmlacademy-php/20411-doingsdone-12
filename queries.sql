INSERT INTO users (id, email, password, name, date_registration) VALUES
(1, 'vasya@mail.ru', 'password', 'lohpidr', 21.05.2010),
(2, 'petya@mail.ru', 'qwerty', 'bulochka', 11.05.2015),
(3, 'user@mail.ru', 'flat-surv-28195', 'piska', 01.10.2017);

INSERT INTO projects (id, user_id, project_name) VALUES
(1, 2, 'Работа'),
(2, 1, 'Учеба'),
(3, 2, 'Входящие'),
(4, 2, 'Домашние дела'),
(5, 3, 'Авто');

INSERT INTO tasks (id, user_id, project_id, date_creation, status, task_name, date_of_implementation) VALUES
(1, 2, 1, 03.05.2021, false, 'Собеседование в IT компании', 19.02.2021),
(2, 1, 1, 07.05.2021, false, 'Выполнить тестовое задание', 15.02.2021),
(3, 1, 2, 08.05.2021, true, 'Сделать задание первого раздела', 14.02.2021),
(4, 1, 3, 09.05.2021, false, 'Встреча с другом', 16.02.2021),
(5, 1, 4, 09.05.2021, false, 'Купить корм для кота', 16.02.2021),
(6, 1, 4, 09.05.2021, false, 'Заказать пиццу', null);

SELECT project_name FROM projects WHERE user_id = 2;

SELECT task_name FROM tasks where project_id = 4;

INSERT INTO tasks SET status = true WHERE project_id = 2;

INSERT INTO tasks SET task_name = "купить суси" WHERE project_id = 6;


