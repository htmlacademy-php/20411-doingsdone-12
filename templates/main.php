<div class="container container--with-sidebar">
    <header class="main-header">
        <a href="/">
            <img src="img/logo.png" width="153" height="42" alt="Логотип Дела в порядке">
        </a>
        <div class="main-header__side">
            <a class="main-header__side-item button button--plus open-modal" href="pages/form-task.html">Добавить задачу</a>
            <div class="main-header__side-item user-menu">
                <div class="user-menu__data">
                    <p>Константин</p>
                    <a href="#">Выйти</a>
                </div>
            </div>
        </div>
    </header>
    <div class="content">
        <section class="content__side">
            <h2 class="content__side-heading">Проекты</h2>
            <nav class="main-navigation">
                <ul class="main-navigation__list">
                    <?php foreach ($projects as $key => $value): ?>
                    <li class="main-navigation__list-item">
                        <a class="main-navigation__list-item-link
                          <?php if ($active_project_id === $value["id"]): ?>
                           main-navigation__list-item--active
                           <?php endif;?>"
                            href="<?='/?id='.esc($value["id"])?>">
                            <?=esc($value['project_name'])?>
                        </a>
                        <span class="main-navigation__list-item-count">
                            <?= count_projects ($tasks, $value); var_dump($value);?>
                        </span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <a class="button button--transparent button--plus content__side-button" href="pages/form-project.html" target="project_add">Добавить проект</a>
        </section>
        <main class="content__main">
            <h2 class="content__main-heading">Список задач</h2>
            <form class="search-form" action="index.php" method="post" autocomplete="off">
                <input class="search-form__input" type="text" name="" value="" placeholder="Поиск по задачам">
                <input class="search-form__submit" type="submit" name="" value="Искать">
            </form>
            <div class="tasks-controls">
                <nav class="tasks-switch">
                    <a href="/" class="tasks-switch__item tasks-switch__item--active">Все задачи</a>
                    <a href="/" class="tasks-switch__item">Повестка дня</a>
                    <a href="/" class="tasks-switch__item">Завтра</a>
                    <a href="/" class="tasks-switch__item">Просроченные</a>
                </nav>
                <label class="checkbox">
                    <input class="checkbox__input visually-hidden show_completed" type="checkbox" <?php if ($show_complete_tasks == 1): ?> checked <?php endif; ?>>
                    <span class="checkbox__text">Показывать выполненные</span>
                </label>
            </div>
            <table class="tasks">
                <?php foreach ($tasks as $key => $value): ?>
                <?php if ($show_complete_tasks === 0 && $value['done'] == true) { continue; } ?>
                <tr class="tasks__item task
                   <?php if ($value['done'] == true): ?> task--completed<?php endif; ?>
                   <?php if (date_difference($value['date_of_implementation']) == 1): ?>task--important<?php endif; ?>
                   ">
                    <td class="task__select">
                        <label class="checkbox task__checkbox">
                            <input class="checkbox__input visually-hidden task__checkbox" type="checkbox" value="1">
                            <span class="checkbox__text"><?=esc($value['task_name']);?></span>
                        </label>
                    </td>
                    <td class="task__file">
                        <a class="download-link" href="#">файл</a>
                    </td>
                    <td class="task__date"><?=esc($value['date_of_implementation']);?></td>
                </tr>
                <?php endforeach; ?>
                <?php if ($show_complete_tasks === 1): ?>
                <tr class="tasks__item task task--completed">
                    <td class="task__select">
                        <label class="checkbox task__checkbox">
                            <input class="checkbox__input visually-hidden" type="checkbox" checked>
                            <span class="checkbox__text">Записаться на интенсив "Базовый PHP"</span>
                        </label>
                    </td>
                    <td class="task__date">10.10.2019</td>
                    <td class="task__controls"></td>
                </tr>
                <?php endif; ?>
            </table>
        </main>
    </div>
</div>
