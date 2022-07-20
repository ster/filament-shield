<?php

return [
    'auth_provider_model' => [
        'fqcn' => 'App\\Models\\User'
    ],

    'settings' => [
        'driver' => 'file', //database
        'gui_enabled' => false
    ],

    'super_admin' => [
        'enabled' => true,
        'name'  => 'super_admin'
    ],

    'filament_user' => [
        'enabled' => true,
        'name' => 'filament_user'
    ],

    'permission_prefixes' => [
        'resource' => [
            'view',
            'view_any',
            'create',
            'delete',
            'delete_any',
            'update',
            'export',
        ],

        'page' => 'page',
        'widget' => 'widget',
    ],

    'entities' => [
        'pages' => true,
        'widgets' => true,
        'resources' => true,
        'custom_permissions' => false,
    ],

    'generator' => [
        'option' => 'policies_and_permissions'
    ],

    'exclude' => [
        'enabled' => true,

        'pages' => [
            'Dashboard',
        ],

        'widgets' => [
            'AccountWidget','FilamentInfoWidget',
        ],

        'resources' => [],
    ],

    'register_role_policy' => [
        'enabled' => false
    ],
];
