<?php

return [
  'title' => 'AdminLTE',
  'logo' => 'AdminLte.Logo.png',    // logo file inside webroot/img
  'profilebtn' => [
    'position' => 'navbar',   // options [ 'navbar', 'sidebarTop', sidebarBottom']
    'profileUrl' => '/profile',
    'buttons' => []
  ],
  'sidemenus' => [
    [
      'icon' => '<i class="nav-icon bi bi-speedometer"></i>',
      'title' => 'Dashboard',
      'path' => '/dashboard'
    ],
    // [
    //   'title' => 'Expanded Menus'
    // ],
    // [
    //   'icon' => '<i class="nav-icon bi bi-box-seam-fill"></i>',
    //   'title' => 'Widgets',
    //   'submenus' => [
    //     [
    //       'icon' => '<i class="nav-icon bi bi-circle"></i>',
    //       'title' => 'Small Box',
    //       'path' => '/small-box'
    //     ],
    //     [
    //       'icon' => '<i class="nav-icon bi bi-circle"></i>',
    //       'title' => 'Info Box',
    //       'path' => '/info-box'
    //     ],
    //     [
    //       'icon' => '<i class="nav-icon bi bi-circle"></i>',
    //       'title' => 'Cards',
    //       'path' => '/cards'
    //     ]
    //   ]
    // ]
  ],
  'navmenus' => [],
  'fullscreen' => true,
  'notifications' => false,
  'apps' => [],
];
