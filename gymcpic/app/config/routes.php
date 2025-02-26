<?php 
return [
    "/" => [
        "controller" => 'App\Controllers\Homecontroller',
        "action" => 'index'
    ],
    '/home' => [
        "controller" => 'App\Controllers\Homecontroller',
        "action" => 'index'
    ],
    '/hello' => [
        "controller" => 'App\Controllers\Homecontroller',
        "action" => 'saludar'
    ],
    //---------------TABLA ROL ------------------
    '/rol/index' => [
        "controller" => 'App\Controllers\RolController',
        "action" => 'index'
    ],
    '/rol/view' => [
        "controller" => 'App\Controllers\RolController',
        "action" => 'view'
    ],
    '/rol/new' => [
        "controller" => 'App\Controllers\RolController',
        "action" => 'newRol'
    ],
    '/rol/create' => [
        "controller" => 'App\Controllers\RolController',
        "action" => 'createRol'
    ],
    '/rol/view/(\d+)' => [
        "controller" => 'App\Controllers\RolController',
        "action" => 'viewRol'
    ],
    '/rol/edit/(\d+)' => [
        "controller" => 'App\Controllers\RolController',
        "action" => 'editRol'
    ],
    '/rol/update' => [
        "controller" => 'App\Controllers\RolController',
        "action" => 'updateRol'
    ],

    //--------------TABLA ACTIVIDAD ----------------------
    '/actividad/index' => [
        "controller" => 'App\Controllers\ActividadController',
        "action" => 'index'
    ],
    '/actividad/view' => [
        "controller" => 'App\Controllers\ActividadController',
        "action" => 'view'
    ],
    '/actividad/new' => [
        "controller" => 'App\Controllers\ActividadController',
        "action" => 'newActividad'
    ],
    '/actividad/create' => [
        "controller" => 'App\Controllers\ActividadController',
        "action" => 'createActividad'
    ],

    //----------------TABLA CENTRO FORMACION ---------------------
    '/centro/index' => [
        "controller" => 'App\Controllers\CentroController',
        "action" => 'index'
    ],
    '/centro/view' => [
        "controller" => 'App\Controllers\CentroController',
        "action" => 'view'
    ],
    '/centro/new' => [
        "controller" => 'App\Controllers\CentroController',
        "action" => 'newCentro'
    ],
    '/centro/create' => [
        "controller" => 'App\Controllers\CentroController',
        "action" => 'createCentro'
    ],

    //------------------- TABLA PROGRAMA FORMACION --------------------
    '/programa/index' => [
        "controller" => 'App\Controllers\ProgramaController',
        "action" => 'index'
    ],
    '/programa/view' => [
        "controller" => 'App\Controllers\ProgramaController',
        "action" => 'view'
    ],
    '/programa/new' => [
        "controller" => 'App\Controllers\ProgramaController',
        "action" => 'newPrograma'
    ],
    '/programa/createPrograma' => [
        "controller" => 'App\Controllers\ProgramaController',
        "action" => 'createPrograma'
    ]
];