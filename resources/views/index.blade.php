@extends('layouts.app')

@section('title', 'トップページ')

@section('content')

<section class="fade-up bg-white shadow-md rounded-lg p-6 mb-10">
    <h2 class="text-2xl font-semibold text-gray-800 mb-2">Hello, {{ $name }}</h2>
    <p class="text-gray-600">シンプルでおしゃれなWebアプリをPHPで構築しています。</p>


</section>

<section id="about" class="fade-up bg-white shadow-md rounded-lg p-6 mb-10">
    <h3 class="text-xl font-bold text-indigo-600 border-l-4 border-indigo-500 pl-3 mb-4">About Me</h3>
    <div class="bg-indigo-50 border-l-4 border-indigo-400 p-4 rounded-md mb-4">
        <p class="text-gray-700">
            私は現在、フルスタックWebエンジニアを目指して学習中です。特にPHP、JavaScript、CSSを中心に、現代的で見た目も美しいWebアプリケーションを開発しています。
        </p>
    </div>
</section>

<section id="projects" class="fade-up bg-white shadow-md rounded-lg p-6 mb-10">
    <h3 class="text-xl font-bold text-indigo-600 border-l-4 border-indigo-500 pl-3 mb-4">Projects</h3>

    <div class="bg-indigo-50 border-l-4 border-indigo-400 p-4 rounded-md mb-4">
        <h4 class="text-lg font-semibold text-gray-800 mb-1">Portfolio Site</h4>
        <p class="text-gray-700">このWebサイトも含め、自己紹介・スキル紹介をまとめたモダンなポートフォリオです。</p>
    </div>

    <div class="bg-indigo-50 border-l-4 border-indigo-400 p-4 rounded-md mb-4">
        <h4 class="text-lg font-semibold text-gray-800 mb-1">Task Manager</h4>
        <p class="text-gray-700">PHPとMySQLを使って開発した、日々のタスクを管理するツール。</p>
    </div>
</section>

<section id="contact" class="fade-up bg-white shadow-md rounded-lg p-6 mb-10">
    <h3 class="text-xl font-bold text-indigo-600 border-l-4 border-indigo-500 pl-3 mb-4">Contact</h3>

    <form class="flex flex-col gap-4">
        <input type="text" placeholder="Your Name" required
            class="border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
        <input type="email" placeholder="Your Email" required
            class="border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-indigo-400" />
        <textarea placeholder="Your Message" rows="4" required
            class="border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
        <button type="submit"
            class="bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition-colors">
            Send
        </button>
    </form>
</section>

@endsection