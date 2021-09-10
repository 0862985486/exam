<?php
// Aside menu
return [
  'items' => [

    [
        'title' => 'เพิ่มบัญชีไหม่',
        'icon' => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
        'page' => '/bank',
        'new-tab' => false,
    ],

    [
        'title' => 'ฝาก-โอน',
        'desc' => '',
        'icon' => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
        'bullet' => 'dot',
        'root' => true,
        'submenu' => [
            [
                'title' => 'ฝาก',
                'page' => 'layout/themes/aside-light',
                'page' => '/add',
            ],
            [
                'title' => 'โอน',
                'page' => 'layout/themes/aside-light',
                'page' => '',
            ]
        ]
    ],

    [
        'title' => 'รายการ',
        'icon' => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
        'page' => '/transaction',
        'new-tab' => false,
    ],
    // [
    //     'title' => '',
    //     'icon' => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
    //     'page' => '',
    //     'new-tab' => false,
    // ],

    // [
    //     'title' => '',
    //     'icon' => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
    //     'page' => '',
    //     'new-tab' => false,
    // ],

    // [
    //     'title' => '',
    //     'icon' => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
    //     'page' => '',
    //     'new-tab' => false,
    // ],

    // [
    //     'title' => '',
    //     'icon' => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
    //     'page' => '',
    //     'new-tab' => false,
    // ],

    // Dashboard
    // [
    //   'title' => 'Dashboard',
    //   'root' => true,
    //   'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
    //   'page' => '/',
    //   'new-tab' => false,
    // ],

    // // Purchase Requisition
    // [
    //   'section' => 'Purchase Requisition',
    // ],
    // [
    //   'title' => 'Purchase order',
    //   'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
    //   'page' => '/purchase-order',
    //   'new-tab' => false,
    // ],

    // // Assets
    // [
    //   'section' => 'Assets Management',
    // ],
    // [
    //   'title' => 'Assets',
    //   'icon' => 'media/svg/icons/Shopping/Barcode-read.svg',
    //   'page' => '/',
    //   'new-tab' => false,
    // ],
    // [
    //   'title' => 'Borrow assets',
    //   'icon' => 'media/svg/icons/Home/Library.svg',
    //   'page' => '/',
    //   'new-tab' => false,
    // ],

    // // Accounting
    // [
    //   'section' => 'Accounting',
    // ],
    // [
    //   'title' => 'PMO',
    //   'icon' => 'media/svg/icons/Layout/Layout-horizontal.svg',
    //   'page' => '/',
    //   'new-tab' => false,
    // ],

    // // Settings
    // [
    //   'section' => 'Settings',
    // ],
    // [
    //   'title' => 'นักศึกษา',
    //   'icon' => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
    //   'page' => '/student',
    //   'new-tab' => false,
    // ],
    // [
    //     'title' => 'Department',
    //     'icon' => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
    //     'page' => '/department',
    //     'new-tab' => false,
    // ],
    // [
    //     'title' => 'Branch',
    //     'icon' => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
    //     'page' => '/branch',
    //     'new-tab' => false,
    // ],
    // [
    //     'title' => 'Company',
    //     'icon' => 'media/svg/icons/Layout/Layout-left-panel-2.svg',
    //     'page' => '/company',
    //     'new-tab' => false,
    // ],
  ]
];
