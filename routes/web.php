<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = [
        [
            'title' => 'Sistema de Gestão',
            'description' => 'Um sistema completo para gerenciamento de tarefas e projetos.',
            'tags' => ['Laravel', 'Vue.js', 'Tailwind CSS'],
            'image' => 'https://via.placeholder.com/400x225',
            'link' => '#'
        ],
        [
            'title' => 'E-commerce',
            'description' => 'Loja online com carrinho de compras e pagamento integrado.',
            'tags' => ['React', 'Node.js', 'MongoDB'],
            'image' => 'https://via.placeholder.com/400x225',
            'link' => '#'
        ],
        [
            'title' => 'App de Tarefas',
            'description' => 'Aplicativo para gerenciamento de tarefas diárias.',
            'tags' => ['Flutter', 'Firebase'],
            'image' => 'https://via.placeholder.com/400x225',
            'link' => '#'
        ]
    ];
    return view('portfolio', compact('projects'));
});
