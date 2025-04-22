<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    $projects = [
        [
            'title' => 'Sistema de Gestão de Gastos',
            'description' => 'Um sistema monolítico para gerenciamento de finanças pessoais.',
            'tags' => ['Laravel', 'Bootstrap', 'Mysql'],
            'github' => 'https://github.com/sergiopel/controle-de-gastos',
            'image' => 'images/controle-de-gastos.png',
            'link' => 'https://controle-gastos.projetosdev.com'
        ],
        [
            'title' => 'Consultório Dentário',
            'description' => 'Um sistema monolítico para consultório dentário.',
            'tags' => ['Laravel', 'Vue', 'Vuetify', 'Inertia', 'Mysql'],
            'github' => null,
            'image' => 'images/dental_manager_em_construcao.png',
            'link' => null
        ],
    ];
    return view('portfolio', compact('projects'));
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
