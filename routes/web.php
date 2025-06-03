<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    $projects = [
        [
            'title' => 'Sistema de Gestão de Gastos',
            'description' => 'Um sistema monolítico para gerenciamento de finanças pessoais.',
            'tags' => ['Laravel', 'Bootstrap', 'Mysql', 'Docker'],
            'github' => 'https://github.com/sergiopel/controle-de-gastos',
            'image' => 'images/controle-de-gastos.png',
            'link' => 'https://controle-gastos.projetosdev.com',
            'acesso' => null
        ],
        [
            'title' => 'Consultório Dentário - Dental Manager',
            'description' => 'Um sistema monolítico para consultório dentário.',
            'tags' => ['Laravel', 'TailWindCss', 'Mysql', 'Docker'],
            'github' => null,
            'image' => 'images/dental_manager.png',
            'link' => 'https://dental-manager.projetosdev.com',
            'acesso' => 'usuário: ricardo@odontoexcellence.com.br, senha: password'
        ],
    ];
    return view('portfolio', compact('projects'));
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
