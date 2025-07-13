<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- ← レスポンシブに必要 -->
    <title>一発ギャグマシン</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-pink-100 via-yellow-100 to-green-100 min-h-screen flex items-center justify-center px-4">
    <div class="bg-white shadow-xl rounded-2xl p-4 sm:p-8 w-full max-w-md text-center">

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
        <div class="mx-auto mb-3 p-4 bg-yellow-100 rounded-lg text-lg font-medium text-gray-800 animate-bounce">
            {{ $text }}
        </div>
        @endif

        <form method="POST" action="/gag">
            @csrf
            <button type="submit" class="w-full sm:w-auto bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-6 rounded-xl transition-all duration-300">
                ギャグ発射！🚀
            </button>
        </form>
    </div>
</body>

</html>