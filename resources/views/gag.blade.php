<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一発ギャグマシン</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .rocket-animation {
            animation: rocketUp 1s ease-out forwards;
        }

        @keyframes rocketUp {
            0% {
                transform: translateY(0);
                opacity: 1;
            }

            100% {
                transform: translateY(-300px);
                opacity: 0;
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="bg-gradient-to-r from-pink-100 via-yellow-100 to-green-100 min-h-screen flex items-center justify-center px-4">
    <div class="bg-white shadow-xl rounded-2xl p-4 sm:p-8 w-full max-w-md text-center">

        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-6">🎉 一発ギャグマシン 🎉</h1>

        {{-- ロケットのアニメーション用 --}}
        <div id="rocket" class="text-4xl mb-4 transition-all">🚀</div>

        {{-- ギャグ表示ブロック --}}
        <div id="gagContent" class="hidden opacity-0 transition-all">

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
                onclick="handleRocket(event)"
                class="w-full sm:w-auto bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-6 rounded-xl transition-all duration-300">
                ギャグ発射！🚀
            </button>
        </form>

    </div>

    <script>
        function handleRocket(e) {
            e.preventDefault(); // フォーム送信を一旦止める

            const rocket = document.getElementById('rocket');
            const form = document.getElementById('gagForm');

            rocket.classList.add('rocket-animation');

            setTimeout(() => {
                form.submit(); // アニメーション後に送信
            }, 1000); // 1秒後に送信
        }

        // ギャグ読み込み後に fade-in
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