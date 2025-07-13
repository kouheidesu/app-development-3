<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>一発ギャグマシン</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes shake {
            0% {
                transform: translate(1px, 1px) rotate(0deg);
            }

            10% {
                transform: translate(-1px, -2px) rotate(-1deg);
            }

            20% {
                transform: translate(-3px, 0px) rotate(1deg);
            }

            30% {
                transform: translate(3px, 2px) rotate(0deg);
            }

            40% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            50% {
                transform: translate(-1px, 2px) rotate(-1deg);
            }

            60% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            70% {
                transform: translate(3px, 1px) rotate(-1deg);
            }

            80% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            90% {
                transform: translate(1px, 2px) rotate(0deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }
        }

        .shake {
            animation: shake 0.5s ease-in-out infinite;
        }

        @keyframes rocketLaunch {
            0% {
                bottom: -200px;
                opacity: 1;
                transform: translateX(-50%) scale(1);
            }

            50% {
                opacity: 1;
                transform: translateX(-50%) scale(1.2);
            }

            100% {
                bottom: 120%;
                opacity: 0;
                transform: translateX(-50%) scale(1.5);
            }
        }

        .rocket-launch {
            animation: rocketLaunch 1.5s ease-out forwards;
        }

        #rocket {
            position: fixed;
            bottom: -200px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 20rem;
            z-index: 50;
            opacity: 0;
            pointer-events: none;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-pink-100 via-yellow-100 to-green-100 min-h-screen flex items-center justify-center px-4 relative">

    <!-- ロケット絵文字（画面覆うサイズ） -->
    <div id="rocket">🚀</div>

    <!-- 白いギャグカード -->
    <div id="card" class="bg-white shadow-xl rounded-2xl p-4 sm:p-8 w-full max-w-md text-center transition-all duration-300">

        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6">🎉 一発ギャグマシン 🎉</h1>

        @if (isset($image) && $image)
        <img src="{{ $image }}" alt="ギャグ画像" class="mx-auto mb-4 w-full max-w-xs rounded-xl shadow" />
        @endif

        @if (!empty($reference))
        <div class="w-full max-w-xs mx-auto mb-7 text-right pr-2">
            <span class="inline-block text-sm text-gray-600 bg-white/80 px-2 py-1 rounded shadow">
                {{ $reference }}風
            </span>
        </div>
        @endif

        @if (isset($text))
        <div class="mx-auto mb-3 p-4 bg-yellow-100 rounded-lg text-lg font-medium text-gray-800">
            {{ $text }}
        </div>
        @endif

        <!-- ギャグボタン -->
        <form id="gagForm" method="POST" action="/gag">
            @csrf
            <button type="submit"
                onclick="startAnimation(event)"
                class="w-full sm:w-auto bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-6 rounded-xl transition-all duration-300">
                ギャグ発射！🚀
            </button>
        </form>

    </div>

    <script>
        function startAnimation(e) {
            e.preventDefault();

            const rocket = document.getElementById('rocket');
            const card = document.getElementById('card');

            // 1. 白いカードを揺らす
            card.classList.add('shake');

            // 2. 約2秒後にロケット発射
            setTimeout(() => {
                rocket.style.opacity = 1;
                rocket.classList.add('rocket-launch');
            }, 2000);

            // 3. ロケット発射後にフォーム送信（合計2.8秒後）
            setTimeout(() => {
                card.classList.remove('shake');
                document.getElementById('gagForm').submit();
            }, 2800);
        }
    </script>
</body>

</html>