<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio | Dev</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <!-- Navbar -->
    <nav class="fixed w-full bg-white/80 dark:bg-gray-800/80 backdrop-blur-md shadow-md z-50">
        <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-indigo-600 dark:text-indigo-400">Meu Portfólio</a>
            <div class="flex items-center space-x-6">
                <a href="#sobre" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">Sobre</a>
                <a href="#projetos" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">Projetos</a>
                <a href="#contato" class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">Contato</a>
                <button id="darkModeToggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700">
                    <span class="dark:hidden">🌙</span>
                    <span class="hidden dark:inline">☀️</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center pt-20 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-gray-800 dark:text-white mb-6">
                Olá, eu sou <span class="text-indigo-600 dark:text-indigo-400">[Sergio]</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
                Desenvolvedor Full-Stack | Laravel | Bootstrap | Tailwind CSS
            </p>
            <a href="#projetos" class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                Ver Projetos
            </a>
        </div>
    </section>

    <!-- Seção Sobre -->
    <section id="sobre" class="py-16 px-4 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-2/5 mb-10 md:mb-0">
                    <div class="relative">
                        <img src="{{ $aboutImage ?? 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' }}" alt="Developer at work" class="rounded-lg shadow-lg">
                        <div class="absolute -bottom-6 -right-6 bg-white p-3 rounded-lg shadow-lg">
                            <div class="text-blue-600 font-bold text-lg">
                                <span>{{ $experience ?? '5+' }}</span> Anos de
                                <br>
                                Experiência
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-3/5 md:pl-16">
                    <h2 class="text-3xl font-bold mb-6">Sobre Mim</h2>
                    <p class="text-gray-600 mb-6">{{ $summary ?? 'Desenvolvedor full stack apaixonado por criar aplicações web elegantes e funcionais. Com mais de 5 anos de experiência em desenvolvimento web, especializo-me em Laravel, PHP, Vue.js e React. Tenho um histórico comprovado de entrega de projetos complexos dentro do prazo e orçamento.' }}</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                    <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold">Formação</h3>
                                <p class="text-gray-600">{{ $education ?? 'Bacharel em Ciência da Computação' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold">Experiência</h3>
                                <p class="text-gray-600">{{ $jobTitle ?? 'Desenvolvedor Web Senior' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold">Localização</h3>
                                <p class="text-gray-600">{{ $location ?? 'São Paulo, Brasil' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 8h14M5 12h14M5 16h6"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold">Idiomas</h3>
                                <p class="text-gray-600">{{ $languages ?? 'Português, Inglês' }}</p>
                            </div>
                        </div>
                    </div>
                    <a href="#contato" class="inline-flex items-center text-blue-600 font-medium hover:underline">
                        Vamos conversar
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        {{-- <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-12">Sobre Mim</h2>
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Sou um desenvolvedor apaixonado por criar soluções web elegantes e funcionais.
                    </p>
                    <p class="text-gray-600 dark:text-gray-300">
                        Tenho experiência em Laravel, React, Tailwind CSS e muito mais.
                    </p>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full">Laravel</span>
                    <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full">React</span>
                    <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full">Tailwind CSS</span>
                    <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 rounded-full">JavaScript</span>
                </div>
            </div>
        </div> --}}
    </section>

    <!-- Seção Projetos -->
    <section id="projetos" class="py-16 px-4 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-12">Meus Projetos</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($projects as $project)
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">{{ $project['title'] }}</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $project['description'] }}</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach ($project['tags'] as $tag)
                            <span class="px-2 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs rounded-full">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <a href="{{ $project['link'] }}" target="_blank" class="text-indigo-600 dark:text-indigo-400 hover:underline">Ver Projeto →</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Seção Contato -->
    <section id="contato" class="py-16 px-4 bg-white dark:bg-gray-800">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-12">Entre em Contato</h2>
            <form class="max-w-lg mx-auto">
                <div class="mb-4">
                    <input type="text" placeholder="Seu Nome" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div class="mb-4">
                    <input type="email" placeholder="Seu E-mail" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div class="mb-4">
                    <textarea placeholder="Sua Mensagem" rows="4" class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                </div>
                <button type="submit" class="w-full px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Enviar Mensagem</button>
            </form>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="py-8 bg-gray-100 dark:bg-gray-900 text-center">
        <p class="text-gray-600 dark:text-gray-300">© {{ date('Y') }} Meu Portfólio. Todos os direitos reservados.</p>
    </footer>

    <!-- Scripts -->
    <script>
        const darkModeToggle = document.getElementById('darkModeToggle');
        const html = document.documentElement;

        darkModeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('darkMode', html.classList.contains('dark'));
        });

        // Verifica preferência salva
        if (localStorage.getItem('darkMode') === 'true') {
            html.classList.add('dark');
        }
    </script>
</body>
</html>