<?php
return [
    "/" => [
        "controller" => "App\Controllers\HomeController",
        "action" => "index",
    ],
    "/home" => [
        "controller" => "App\Controllers\HomeController",
        "action" => "index"
    ],
    "/hello" => [
        "controller" => "App\Controllers\HomeController",
        "action" => "greetings"
    ],
    "/paciente/index" => [
        "controller" => "App\Controllers\PacienteController",
        "action" => "index"
    ],
    "/paciente/indexTest" => [
        "controller" => "App\Controllers\PacienteController",
        "action" => "indexTest"
    ],
];