INSERT INTO users (email, password, name, date_registration) VALUES
('vasya@mail.ru', 'password', 'lohpidr', "2021-04-10 19:01:33" ),
('petya@mail.ru', 'qwerty', 'bulochka', "2020-01-01 03:18:11"),
('user@mail.ru', 'flat-surv-28195', 'piska', "2016-09-30 13:51:03");

INSERT INTO projects (user_id, project_name) VALUES
(2, 'Работа'),
(1, 'Учеба'),
(2, 'Входящие'),
(2, 'Домашние дела'),
(3, 'auto');

INSERT INTO tasks (user_id, project_id, date_creation, status, task_name, date_of_implementation) VALUES
(2, 1, "2021-02-18 10:01:03", false, 'Собеседование в IT компании', "2021-02-19 10:01:03"),
(1, 1, "2021-05-20 02:19:00", false, 'Выполнить тестовое задание', "2021-05-23 02:19:00"),
(1, 2, "2021-05-20 12:31:18", true, 'Сделать задание первого раздела', "2021-05-21 12:31:18"),
(1, 3, "2010-01-29 13:51:03", false, 'Встреча с другом', "2010-01-30 13:51:03"),
(1, 4, "2016-09-10 13:51:03", false, 'Купить корм для кота', "2016-09-30 13:51:03"),
(1, 4, "2016-09-30 13:51:03", false, 'Заказать пиццу', null);

SELECT * FROM projects WHERE user_id = 2;

SELECT task_name FROM tasks where project_id = 4;

UPDATE tasks  SET status = true WHERE id = 2;

UPDATE tasks SET task_name = "купить суси" WHERE project_id = 6;
