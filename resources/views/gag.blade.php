<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>一発ギャグマシン</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-pink-100 via-yellow-100 to-green-100 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">🎉 一発ギャグマシン 🎉</h1>

        @if (isset($gag))
        <div class="mb-6 p-4 bg-yellow-100 rounded-lg shadow text-xl font-medium text-gray-800 animate-bounce">
            {{ $gag }}
        </div>
        @endif

        <form method="POST" action="/gag">
            @csrf
            <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-6 rounded-xl transition-all duration-300">
                ギャグ発射！🚀
            </button>
        </form>
    </div>
</body>

</html>