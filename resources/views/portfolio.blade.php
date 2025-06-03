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
                <a href="#sobre"
                    class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">Sobre</a>
                <a href="#projetos"
                    class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">Projetos</a>
                <a href="#contato"
                    class="text-gray-700 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400">Contato</a>
                <button id="darkModeToggle" class="p-2 rounded-full bg-gray-200 dark:bg-gray-700">
                    <img src="{{ asset('images/minha_foto_maior.png') }}" alt="Light Mode" class="h-6 w-6 dark:hidden">
                    <span class="hidden dark:inline">☀️</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center pt-20 px-4"
        style="background: url('images/fundo_portfolio.png'); 
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    background-blend-mode: overlay;
                    background-color: rgba(255, 255, 255, 0.9);">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-bold text-gray-800 dark:text-white mb-6">
                Olá, eu sou <span class="text-indigo-600 dark:text-indigo-400">Sergio</span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 mb-8">
                Desenvolvedor Full-Stack | Laravel | Bootstrap | Tailwind CSS | MongoDB | MySQL
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
                        <img src="{{ $aboutImage ?? 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80' }}"
                            alt="Developer at work" class="rounded-lg shadow-lg">
                        <div class="absolute -bottom-6 -right-6 bg-white p-3 rounded-lg shadow-lg">
                            <div class="text-blue-600 font-bold text-lg">
                                <span>{{ $experience ?? '20+' }}</span> Anos de
                                <br>
                                Experiência
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-3/5 md:pl-16">
                    <h2 class="text-3xl font-bold mb-6">Sobre Mim</h2>
                    <p class="text-gray-600 mb-6">
                        {{ $summary ??
                            'Desenvolvedor web apaixonado pela criação de aplicações digitais que unem funcionalidade e design atraente. Com experiência sólida em Laravel e PHP, transformo conceitos em soluções web eficientes e intuitivas.
                        Meu foco está em entregar projetos de qualidade dentro dos prazos estabelecidos, sempre buscando aprimorar minhas habilidades técnicas e acompanhar as tendências do mercado. Dedico-me a criar código limpo e bem estruturado, garantindo aplicações de fácil manutenção e escaláveis para necessidades futuras.' }}
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                    <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold">Formação</h3>
                                <p class="text-gray-600">
                                    {{ $education ?? 'Bacharel em Matemática com Ênfase em Informática' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2">
                                    </rect>
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold">Experiência</h3>
                                <p class="text-gray-600">{{ $jobTitle ?? 'Desenvolvedor Senior' }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
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
            <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-6">
                @foreach ($projects as $project)
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-2">{{ $project['title'] }}
                            </h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $project['description'] }}</p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach ($project['tags'] as $tag)
                                    <span
                                        class="px-2 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs rounded-full">{{ $tag }}</span>
                                @endforeach
                            </div>   
                            <div class="flex flex-col space-y-4">
                                @if (isset($project['github']))
                                    <a href="{{ $project['github'] }}" target="_blank" class="inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                                        </svg>
                                        GitHub
                                    </a>
                                @endif
                                @if (isset($project['link']))
                                    <a href="{{ $project['link'] }}" target="_blank"
                                        class="text-indigo-600 dark:text-indigo-400 hover:underline">Ver Projeto →</a>
                                @endif
                                @if (isset($project['acesso']))
                                    <p class="text-gray-600 dark:text-gray-300">Acesso: {{ $project['acesso'] }}</p>
                                @endif
                            </div>
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
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <form action="{{ route('contact.send') }}#contato" method="POST" class="max-w-lg mx-auto">
                @csrf
                <div class="mb-4">
                    <input type="text" name="name" placeholder="Seu Nome" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div class="mb-4">
                    <input type="email" name="email" placeholder="Seu E-mail" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div class="mb-4">
                    <textarea name="message" placeholder="Sua Mensagem" rows="4" required
                        class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                </div>
                <button type="submit"
                    class="w-full px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Enviar
                    Mensagem</button>
            </form>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="py-8 bg-gray-100 dark:bg-gray-900 text-center">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col items-center space-y-4">
                <div class="flex space-x-6">
                    <a href="mailto:serpel@gmail.com" class="inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        serpel@gmail.com
                    </a>
                    <a href="#" onclick="window.open('https://wa.me/' + whatsappNumber, '_blank')" class="inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-green-600 dark:hover:text-green-400 transition-colors duration-200" style="text-decoration: none; cursor: pointer;">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        WhatsApp
                    </a>
                    <a href="https://www.linkedin.com/in/sergio-pelegrini-4788a436/" target="_blank" class="inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                        LinkedIn
                    </a>
                    <a href="https://github.com/sergiopel" target="_blank" class="inline-flex items-center text-gray-600 dark:text-gray-300 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.48 2.912 8.268 6.839 9.504.5.092.682-.216.682-.48v-1.664c-2.757.608-3.347-1.328-3.347-1.328-.452-1.167-1.105-1.472-1.105-1.472-.91-.624.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.57 2.341 1.111 2.917.851.092-.665.347-1.111.63-1.36-2.222-.255-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.255-.446-1.272.098-2.65 0 0 .84-.268 2.75 1.026A9.564 9.564 0 0 1 12 6.844c.85.075 1.705.113 2.566.075 1.91-1.294 2.75-1.026 2.75-1.026.544 1.378.202 2.395.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855v2.734c0 .267.181.577.687.479C19.088 20.268 22 16.48 22 12A10 10 0 0 0 12 2Z" clip-rule="evenodd"/>
                        </svg>
                        GitHub
                    </a>
                </div>
                <p class="text-gray-600 dark:text-gray-300">© {{ date('Y') }} Meu Portfólio. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/whatsapp.js') }}"></script>
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
