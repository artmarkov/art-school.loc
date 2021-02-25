<?php
use artsoft\widgets\Nav;
?>
<!-- SIDEBAR NAV -->
<nav id="js-primary-nav" class="primary-nav" role="navigation">
    <?= \artsoft\widgets\SANav::widget([
        'items'  => [
            [
                'label' => 'Главная',
                'icon' => 'fal fa-th',
                'url' => '/admin',
            ],
            [
                'label' => 'Реестры',
                'icon' => 'fal fa-list',
                'url' => '#',
                'items' => [
                    ['label' => 'Контрагенты', 'url' => ['client/index']],
                    ['label' => 'Заявления', 'url' => ['order/index']],
                    ['label' => 'Список сотрудников', 'url' => ['employees/index']],
                    ['label' => 'Список учеников', 'url' => ['students/index']],
                    ['label' => 'Список родителей', 'url' => ['parents/index']],
                ],
            ],
            [
                'label' => 'Организационная работа',
                'icon' => 'fal fa-university',
                'url' => '#',
                'items' => [
                    ['label' => 'План мероприятий', 'url' => ['activities/index']],
                    ['label' => 'Учебные планы', 'url' => ['studyplan/index']],
                    ['label' => 'Счета за обучение', 'url' => ['attandlog/index']],
                    ['label' => 'Табель учета педагогических часов', 'url' => ['attandlog/index']],
                    ['label' => 'Календарный график', 'url' => ['attandlog/index']],
                    ['label' => 'Работы и сертификаты', 'url' => ['creative/index']],
                ],
            ],
            [
                'label' => 'Учебная работа',
                'icon' => 'fal fa-graduation-cap',
                'url' => '#',
                'items' => [
                    ['label' => 'Вступительные экзамены', 'url' => ['attandlog/index']],
                    ['label' => 'Движение учеников', 'url' => ['attandlog/index']],
                    ['label' => 'Расписание занятий', 'url' => ['attandlog/index']],
                    ['label' => 'Календарь мероприятий', 'url' => ['attandlog/index']],
                    ['label' => 'Журнал успеваемости', 'url' => ['attandlog/index']],
                ],
            ],
            [
                'label' => 'Аналитика',
                'icon' => 'fal fa-bar-chart',
                'url' => '#',
                'items' => [
                    ['label' => 'Журнал посещений', 'url' => ['attandlog/index']],
                    ['label' => 'Показатели эфективности', 'url' => ['visual/index']],
                    ['label' => 'Портфолио преподавателей', 'url' => ['visual/index']],
                    ['label' => 'Контроль исполнения', 'url' => ['visual/index']],
                ],
            ],
            [
                'label' => 'Справочники',
                'icon' => 'fal fa-briefcase',
                'url' => '#',
                'items' => [
                    ['label' => 'Аудитории школы', 'url' => ['auditory/index']],
                    ['label' => 'Дисциплины', 'url' => ['subject/index']],
                    ['label' => 'Сведения об организации', 'url' => ['own/index']],
                ],
            ],
            [
                'label' => 'Администрирование',
                'icon' => 'fal fa-cogs',
                'url' => '#',
                'items' => [
                    ['label' => 'Сеансы', 'url' => ['/user/session/index']],
                    ['label' => 'Журнал', 'url' => ['/user/request/index']],
                    ['label' => 'Лог посещений', 'url' => ['/user/visit-log/index']],
                    ['label' => 'Пользователи', 'url' => ['/user/default/index'],],
                    ['label' => 'Роли', 'url' => ['/user/role/index']],
                    ['label' => 'Права доступа', 'url' => ['/user/permission/index']],
                    ['label' => 'Группы прав доступа', 'url' => ['/user/permission-groups/index']],
                    ['label' => 'Календарь', 'url' => ['calendar/index']],
                    ['label' => 'Назначенные задания', 'url' => ['/queue-schedule/default/index']],
                    ['label' => 'Инструменты админа', 'url' => ['admin/tools']],
                    ['label' => 'Очистить кэш', 'url' => ['/settings/cache/flush']],
                    ['label' => 'Общие настройки', 'url' => ['/settings/default/index']],
                    ['label' => 'Настройки чтения', 'url' => ['/settings/reading/index']],
                ],
            ],
            [
                'label' => 'Помощь',
                'icon' => 'fal fa-question-circle',
                'url' => '#',
                'items' => [
                    ['label' => 'Техническая поддержка', 'url' => ['support/index']],
                    ['label' => 'Руководства пользователя', 'url' => ['site/help']],
                    ['label' => 'О системе', 'url' => ['site/about']],
                ],
            ],
            ['label' => 'Debug', 'icon' => 'fal fa-dashboard', 'url' => ['/debug'], 'visible' => isset(Yii::$app->modules['debug'])],
            ['label' => 'Gii', 'icon' => 'fal fa-file-code-o', 'url' => ['/gii'], 'visible' => Yii::$app->getModule('gii') !== null],
        ],
    ]) ?>
<!--    --><?php //print_r(Menu::getMenuItems('admin-menu'))?>
</nav>
<!-- !SIDEBAR NAV -->


<!--<nav id="js-primary-nav" class="primary-nav" role="navigation">-->
<!--    <!---->
<!--    TIP: The menu items are not auto translated. You must have a residing lang file associated with the menu saved inside dist/media/data with reference to each 'data-i18n' attribute.-->
<!--    -->-->
<!--    <ul id="js-nav-menu" class="nav-menu">-->
<!--        <li class="active">-->
<!--            <a href="blank.html" title="Blank Project" data-filter-tags="blank page">-->
<!--                <i class="fal fa-globe"></i>-->
<!--                <span class="nav-link-text" data-i18n="nav.blankpage">Blank Project</span>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li class="nav-title">Navigation Title</li>-->
<!--        <li>-->
<!--            <a href="#" title="Category" data-filter-tags="category">-->
<!--                <i class="fal fa-file"></i>-->
<!--                <span class="nav-link-text" data-i18n="nav.category">Category</span>-->
<!--            </a>-->
<!--            <ul>-->
<!--                <li>-->
<!--                    <a href="javascript:void(0);" title="Menu child" data-filter-tags="utilities menu child">-->
<!--                        <span class="nav-link-text" data-i18n="nav.utilities_menu_child">Sub-category</span>-->
<!--                    </a>-->
<!--                    <ul>-->
<!--                        <li>-->
<!--                            <a href="javascript:void(0);" title="Sublevel Item" data-filter-tags="utilities menu child sublevel item">-->
<!--                                <span class="nav-link-text" data-i18n="nav.utilities_menu_child_sublevel_item">Sublevel Item</span>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="javascript:void(0);" title="Another Item" data-filter-tags="utilities menu child another item">-->
<!--                                <span class="nav-link-text" data-i18n="nav.utilities_menu_child_another_item">Another Item</span>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="disabled">-->
<!--                    <a href="javascript:void(0);" title="Disabled item" data-filter-tags="utilities disabled item">-->
<!--                        <span class="nav-link-text" data-i18n="nav.utilities_disabled_item">Disabled item</span>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <!-- Example of open and active states -->-->
<!--        <li class="active open">-->
<!--            <a href="#" title="Category" data-filter-tags="category">-->
<!--                <i class="fal fa-plus"></i>-->
<!--                <span class="nav-link-text" data-i18n="nav.category">Open Item</span>-->
<!--            </a>-->
<!--            <ul>-->
<!--                <li class="active open">-->
<!--                    <a href="javascript:void(0);" title="Menu child" data-filter-tags="utilities menu child">-->
<!--                        <span class="nav-link-text" data-i18n="nav.utilities_menu_child">Open Sub-category</span>-->
<!--                    </a>-->
<!--                    <ul>-->
<!--                        <li class="active">-->
<!--                            <a href="javascript:void(0);" title="Sublevel Item" data-filter-tags="utilities menu child sublevel item">-->
<!--                                <span class="nav-link-text" data-i18n="nav.utilities_menu_child_sublevel_item">Active Item</span>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <!--                <div class="filter-message js-filter-message bg-success-600"></div>-->-->
<!--</nav>-->