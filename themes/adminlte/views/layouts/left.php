<aside class="main-sidebar">

    <section class="sidebar">
        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        [
                            'label' => 'Dashboard',
                            'icon' => 'fa fa-retweet',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Dashboard', 'icon' => 'fa fa-circle-o text-yellow', 'url' => ['/site/index/'],],
                            ],
                        ],
                        [
                            'label' => 'Settings',
                            'icon' => 'fa fa-gears',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Roles', 'icon' => 'fa fa-circle-o text-yellow', 'url' => ['/role/index'],],
//                                ['label' => 'Roles', 'icon' => 'fa fa-circle-o text-yellow', 'url' => ['/user/search']],
                            ],
                        ],
                        [
                            'label' => 'Modules',
                            'icon' => 'fa fa-navicon',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Users', 'icon' => 'fa fa-circle-o text-yellow', 'url' => ['/user/index'],],
                                ['label' => 'Customers', 'icon' => 'fa fa-circle-o text-aqua', 'url' => ['/customer/index'],],
                                ['label' => 'Campaigns', 'icon' => 'fa fa-circle-o text-yellow', 'url' => ['/campaign/index'],],
                            ],
                        ],
                        [
                            'label' => 'Calenda',
                            'icon' => 'fa fa-calendar',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Calenda', 'icon' => 'fa fa-circle-o text-yellow', 'url' => ['/calenda/index'],],
//                                ['label' => 'Time Condition', 'icon' => 'fa fa-clock-o', 'url' => ['/'],],
//                                ['label' => 'Interactive Voice Recording', 'icon' => 'fa fa-sort-amount-asc', 'url' => ['/'],],
                            ],
                        ],
                        [
                            'label' => 'Reports',
                            'icon' => 'fa fa-list-ol',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Report', 'icon' => 'fa fa-circle-o text-aqua', 'url' => ['/report/index/'],],
                            ],
                        ],
                        ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                        ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ],
                ]
        )
        ?>


    </section>

</aside>
