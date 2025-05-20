<!-- ファイル使用可能 -->
@extends('layouts.app')

@section('title', 'トップページ')

@section('content')
<section class="hero fade-up">
    <h2>Hello, {{ $name }}</h2>
    <p>シンプルでおしゃれなWebアプリをPHPで構築しています。</p>
</section>

<section id="about" class="fade-up">
    <h3 class="section-title">About Me</h3>
    <div class="card">
        <p>私は現在、フルスタックWebエンジニアを目指して学習中です。特にPHP、JavaScript、CSSを中心に、現代的で見た目も美しいWebアプリケーションを開発しています。</p>
    </div>
</section>

<section id="projects" class="fade-up">
    <h3 class="section-title">Projects</h3>
    <div class="card">
        <h4>Portfolio Site</h4>
        <p>このWebサイトも含め、自己紹介・スキル紹介をまとめたモダンなポートフォリオです。</p>
    </div>
    <div class="card">
        <h4>Task Manager</h4>
        <p>PHPとMySQLを使って開発した、日々のタスクを管理するツール。</p>
    </div>
</section>

<section id="contact" class="fade-up">
    <h3 class="section-title">Contact</h3>
    <form>
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea placeholder="Your Message" rows="4" required></textarea>
        <button type="submit">Send</button>
    </form>
</section>
@endsection
