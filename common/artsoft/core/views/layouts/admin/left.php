<?php
use artsoft\widgets\Nav;
?>
<!-- SIDEBAR NAV -->
<div class="navbar-default sidebar metismenu" role="navigation">
    <?= Nav::widget([
        'encodeLabels' => false,
        'dropDownCaret' => '<span class="arrow"></span>',
        'options' => [
            ['class' => 'nav side-menu'],
            ['class' => 'nav nav-second-level'],
            ['class' => 'nav nav-third-level']
        ],
        'items'  => [
            [
                'label' => 'Главная',
                'icon' => 'fa fa-th',
                'url' => '/admin',
            ],
            [
                'label' => 'Реестры',
                'icon' => 'fa fa-list',
                'url' => '#',
//                'options' => ['class' => 'treeview'],
                'items' => [
                    ['label' => 'Контрагенты', 'icon' => 'fa fa-minus', 'url' => ['client/index']],
                    ['label' => 'Заявления', 'icon' => 'fa fa-minus', 'url' => ['order/index']],
                    ['label' => 'Список сотрудников', 'icon' => 'fa fa-minus', 'url' => ['employees/index']],
                    ['label' => 'Список учеников', 'icon' => 'fa fa-minus', 'url' => ['students/index']],
                    ['label' => 'Список родителей', 'icon' => 'fa fa-minus', 'url' => ['parents/index']],
                ],
            ],
            [
                'label' => 'Организационная работа',
                'icon' => 'fa fa-university',
                'url' => '#',
//                'options' => ['class' => 'treeview'],
                'items' => [
                    ['label' => 'План мероприятий', 'icon' => 'fa fa-minus', 'url' => ['activities/index']],
                    ['label' => 'Учебные планы', 'icon' => 'fa fa-minus', 'url' => ['studyplan/index']],
                    ['label' => 'Счета за обучение', 'icon' => 'fa fa-minus', 'url' => ['attandlog/index']],
                    ['label' => 'Табель учета педагогических часов', 'icon' => 'fa fa-minus', 'url' => ['attandlog/index']],
                    ['label' => 'Календарный график', 'icon' => 'fa fa-minus', 'url' => ['attandlog/index']],
                    ['label' => 'Работы и сертификаты', 'icon' => 'fa fa-minus', 'url' => ['creative/index']],
                ],
            ],
            [
                'label' => 'Учебная работа',
                'icon' => 'fa fa-graduation-cap',
                'url' => '#',
//                'options' => ['class' => 'treeview'],
                'items' => [
                    ['label' => 'Вступительные экзамены', 'icon' => 'fa fa-minus', 'url' => ['attandlog/index']],
                    ['label' => 'Движение учеников', 'icon' => 'fa fa-minus', 'url' => ['attandlog/index']],
                    ['label' => 'Расписание занятий', 'icon' => 'fa fa-minus', 'url' => ['attandlog/index']],
                    ['label' => 'Календарь мероприятий', 'icon' => 'fa fa-minus', 'url' => ['attandlog/index']],
                    ['label' => 'Журнал успеваемости', 'icon' => 'fa fa-minus', 'url' => ['attandlog/index']],
                ],
            ],
            [
                'label' => 'Аналитика',
                'icon' => 'fa fa-bar-chart',
                'url' => '#',
//                'options' => ['class' => 'treeview'],
                'items' => [
                    ['label' => 'Журнал посещений', 'icon' => 'fa fa-minus', 'url' => ['attandlog/index']],
                    ['label' => 'Показатели эфективности', 'icon' => 'fa fa-minus', 'url' => ['visual/index']],
                    ['label' => 'Портфолио преподавателей', 'icon' => 'fa fa-minus', 'url' => ['visual/index']],
                    ['label' => 'Контроль исполнения', 'icon' => 'fa fa-minus', 'url' => ['visual/index']],
//                            ['label' => 'Визуализация', 'icon' => 'fa fa-minus', 'url' => ['visual/index']],
                ],
            ],
            [
                'label' => 'Справочники',
                'icon' => 'fa fa-briefcase',
                'url' => '#',
//                'options' => ['class' => 'treeview'],
                'items' => [
                    ['label' => 'Аудитории школы', 'icon' => 'fa fa-minus', 'url' => ['auditory/index']],
                    ['label' => 'Дисциплины', 'icon' => 'fa fa-minus', 'url' => ['subject/index']],
                    ['label' => 'Сведения об организации', 'icon' => 'fa fa-minus', 'url' => ['own/index']],
//                            ['label' => 'Справочник ОКСМ', 'icon' => 'fa fa-minus', 'url' => ['oksm/index']],
                ],
            ],
            [
                'label' => 'Администрирование',
                'icon' => 'fa fa-cogs',
                'url' => '#',
//                'options' => ['class' => 'treeview'],
                'items' => [
                    ['label' => 'Сеансы', 'icon' => 'fa fa-minus', 'url' => ['/user/session/index']],
                    ['label' => 'Журнал', 'icon' => 'fa fa-minus', 'url' => ['/user/request/index']],
                    ['label' => 'Лог посещений', 'icon' => 'fa fa-minus', 'url' => ['/user/visit-log/index']],
                    ['label' => 'Пользователи', 'icon' => 'fa fa-minus', 'url' => ['/user/default/index'],],
                    ['label' => 'Роли', 'icon' => 'fa fa-minus', 'url' => ['/user/role/index']],
                    ['label' => 'Права доступа', 'icon' => 'fa fa-minus', 'url' => ['/user/permission/index']],
                    ['label' => 'Группы прав доступа', 'icon' => 'fa fa-minus', 'url' => ['/user/permission-groups/index']],
                    ['label' => 'Календарь', 'icon' => 'fa fa-minus', 'url' => ['calendar/index']],
                    ['label' => 'Назначенные задания', 'icon' => 'fa fa-minus', 'url' => ['/queue-schedule/default/index']],
                    ['label' => 'Инструменты админа', 'icon' => 'fa fa-minus', 'url' => ['admin/tools']],
                    ['label' => 'Очистить кэш', 'icon' => 'fa fa-minus', 'url' => ['/settings/cache/flush']],
                    ['label' => 'Общие настройки', 'icon' => 'fa fa-minus', 'url' => ['/settings/default/index']],
                    ['label' => 'Настройки чтения', 'icon' => 'fa fa-minus', 'url' => ['/settings/reading/index']],
                ],
            ],
            [
                'label' => 'Помощь',
                'icon' => 'fa fa-question-circle',
                'url' => '#',
//                'options' => ['class' => 'treeview'],
                'items' => [
                    ['label' => 'Техническая поддержка', 'icon' => 'fa fa-minus', 'url' => ['support/index']],
                    ['label' => 'Руководства пользователя', 'icon' => 'fa fa-minus', 'url' => ['site/help']],
                    ['label' => 'О системе', 'icon' => 'fa fa-minus', 'url' => ['site/about']],
                ],
            ],
            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'], 'visible' => isset(Yii::$app->modules['debug'])],
            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'], 'visible' => Yii::$app->getModule('gii') !== null],
        ],
    ]) ?>
<!--    --><?php //print_r(Menu::getMenuItems('admin-menu'))?>
</div>
<!-- !SIDEBAR NAV -->