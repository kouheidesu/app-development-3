<?php
$name = "耕平さん";
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Modern Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* 基本リセット */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', sans-serif;
            background: #f8f9fa;
            color: #333;
        }

        header {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        header h1 {
            font-size: 24px;
        }

        nav a {
            margin-left: 20px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: opacity 0.3s ease;
        }

        nav a:hover {
            opacity: 0.8;
        }

        section {
            padding: 80px 20px;
            max-width: 960px;
            margin: auto;
        }

        .hero {
            text-align: center;
            padding: 100px 20px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.05);
            margin-bottom: 60px;
        }

        .hero h2 {
            font-size: 40px;
            color: #4e54c8;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: 28px;
            margin-bottom: 30px;
            color: #4e54c8;
            border-left: 4px solid #4e54c8;
            padding-left: 10px;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        form {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        form input,
        form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }

        form button {
            background: #4e54c8;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }

        form button:hover {
            background: #6c70f5;
        }

        footer {
            text-align: center;
            padding: 40px;
            font-size: 14px;
            color: #999;
        }

        /* スクロールアニメーション */
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>

    <header>
        <h1>Modern Web</h1>
        <nav>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section class="hero fade-up">
        <h2>Hello, <?= htmlspecialchars($name) ?></h2>
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

    <footer>
        &copy; <?= $year ?> Modern Web by <?= htmlspecialchars($name) ?>
    </footer>

    <script>
        // フェードアップ表示処理
        const fadeElements = document.querySelectorAll('.fade-up');

        const scrollHandler = () => {
            fadeElements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) {
                    el.classList.add('visible');
                }
            });
        };

        window.addEventListener('scroll', scrollHandler);
        window.addEventListener('load', scrollHandler);
    </script>

</body>

</html>
