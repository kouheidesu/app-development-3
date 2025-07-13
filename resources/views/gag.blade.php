<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>一発ギャグマシン</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes rocketLaunch {
            0% {
                bottom: -200px;
                opacity: 1;
            }

            100% {
                bottom: 100%;
                opacity: 0;
            }
        }

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

        .launch {
            animation: rocketLaunch 1.2s ease-out forwards;
        }

        .shake {
            animation: shake 0.5s infinite;
        }

        .fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

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

        #rocket {
            position: fixed;
            bottom: -200px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 10rem;
            z-index: 50;
            opacity: 0;
            pointer-events: none;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-pink-100 via-yellow-100 to-green-100 min-h-screen flex items-center justify-center px-4 relative">

    {{-- 巨大ロケット --}}
    <div id="rocket">🚀</div>

    {{-- カード本体 --}}
    <div id="card" class="bg-white shadow-xl rounded-2xl p-4 sm:p-8 w-full max-w-md text-center transition-all duration-300">

        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6">🎉 一発ギャグマシン 🎉</h1>

        {{-- ギャグ表示エリア --}}
        <div id="gagContent" class="hidden opacity-0">

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

        </div>

        {{-- ギャグ発射ボタン --}}
        <form id="gagForm" method="POST" action="/gag">
            @csrf
            <button type="submit"
                onclick="launchRocket(event)"
                class="w-full sm:w-auto bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-6 rounded-xl transition-all duration-300">
                ギャグ発射！🚀
            </button>
        </form>

    </div>

    <script>
        function launchRocket(e) {
            e.preventDefault();

            const rocket = document.getElementById('rocket');
            const card = document.getElementById('card');

            // ロケット表示・発射
            rocket.classList.add('launch');
            rocket.style.opacity = 1;

            // カードを振動させる
            setTimeout(() => {
                card.classList.add('shake');
            }, 300);

            // 振動を止めて送信
            setTimeout(() => {
                card.classList.remove('shake');
                document.getElementById('gagForm').submit();
            }, 1500);
        }

        // 読み込み時にギャグをフェードイン表示
        window.addEventListener('DOMContentLoaded', () => {
            const gagContent = document.getElementById('gagContent');
            if (gagContent) {
                gagContent.classList.remove('hidden');
                gagContent.classList.add('fade-in');
            }
        });
    </script>
</body>

</html>