<?php 
    use Illuminate\Support\Facades\Route;

    return [
        'module' => [
            [
                'title' => 'Dashboard',
                'icon' => 'fa fa-database',
                'name' => ['dashboard'],
                'route' => 'dashboard/index',
                'class' => 'special'

            ],
            [
                'title' => 'Quản lí Thành Viên',
                'icon' => 'fa fa-user',
                'name' => ['user'],
                'subModule' => [
                    [
                        'title' => 'Thành Viên',
                        'route' => 'user/index'
                    ]
                ]
            ],
            [
                'title' => 'Quản Lí Tour',
                'icon' => 'fa fa-file',
                'name' => ['tour'],
                'subModule' => [
                    [
                        'title' => 'Tour',
                        'route' => 'tour/index'
                    ],
                ]
            ],
            [
                'title' => 'Quản Lí Phiếu Đặt',
                'icon' => 'fa fa-file',
                'name' => ['order'],
                'subModule' => [
                    [
                        'title' => 'Phiếu Đặt',
                        'route' => 'order/index'
                    ],
                ]
            ],
            [
                'title' => 'Quản Lí Hóa Đơn',
                'icon' => 'fa fa-file',
                'name' => ['bill'],
                'subModule' => [
                    [
                        'title' => 'Hóa Đơn',
                        'route' => 'bill/index'
                    ],
                ]
            ],
            [
                'title' => 'Cấu Hình Chung',
                'icon' => 'fa fa-file',
                'name' => ['language'],
                'subModule' => [
                    [
                        'title' => 'Ngôn Ngữ',
                        'route' => 'language/index'
                    ],
                ]
            ]
            
        ],
    ];