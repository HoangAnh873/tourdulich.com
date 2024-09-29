<?php 
    use Illuminate\Support\Facades\Route;

    return [
        'module' => [
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
                'title' => 'Quản Lí Hóa Đơn',
                'icon' => 'fa fa-file',
                'name' => ['bill'],
                'subModule' => [
                    [
                        'title' => 'Bill',
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