<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>My Stylish Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css') <!-- ViteでTailwindをビルドしている場合 -->
</head>

<body class="bg-gradient-to-br from-blue-100 to-white text-gray-800">

    <!-- Header -->
    <header class="p-6 bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">My Portfolio</h1>
            <nav class="space-x-4">
                <a href="#about" class="hover:text-blue-500">About</a>
                <a href="#projects" class="hover:text-blue-500">Projects</a>
                <a href="#contact" class="hover:text-blue-500">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="text-center py-24 bg-blue-50">
        <h2 class="text-4xl font-extrabold mb-4">Welcome to My World</h2>
        <p class="text-lg text-gray-600">Web Developer / Designer / Creator</p>
    </section>

    <!-- About -->
    <section id="about" class="py-20 px-4 max-w-4xl mx-auto">
        <h3 class="text-3xl font-semibold mb-4">About Me</h3>
        <p class="text-gray-700 leading-relaxed">
            {{ "Laravelを使ってWeb開発を学習中です。" }}
        </p>
    </section>

    <!-- Projects -->
    <section id="projects" class="py-20 px-4 bg-gray-100">
        <h3 class="text-3xl font-semibold mb-8 text-center">Projects</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach(['Weather App', 'Blog System'] as $project)
            <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                <h4 class="text-xl font-bold mb-2">{{ $project }}</h4>
                <p class="text-gray-600">A sample project made using Laravel and Tailwind CSS.</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 px-4">
        <h3 class="text-3xl font-semibold mb-4">Contact</h3>
        <form class="space-y-4 max-w-xl mx-auto">
            <input type="text" placeholder="Your Name" class="w-full p-3 border rounded" required>
            <input type="email" placeholder="Your Email" class="w-full p-3 border rounded" required>
            <textarea placeholder="Your Message" class="w-full p-3 border rounded" rows="4" required></textarea>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded">
                Send Message
            </button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="text-center py-6 text-sm text-gray-500">
        &copy; {{ date('Y') }} My Stylish Website
    </footer>

    <!-- JSアニメーション -->
    <script>
        window.addEventListener('scroll', () => {
            document.querySelectorAll('section').forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight) {
                    el.classList.add('animate-fadeIn');
                }
            });
        });
    </script>

    <!-- Tailwindのカスタムアニメーション（別途追加が必要） -->
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.8s ease-out forwards;
        }
    </style>
</body>

</html>
