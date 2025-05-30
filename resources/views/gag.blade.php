<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>一発ギャグマシン</title>
</head>

<body style="text-align:center; padding-top:100px;">
    <h1>一発ギャグマシン</h1>

    @if (isset($gag))
    <h2>{{ $gag }}</h2>
    @endif

    <form method="POST" action="/gag">
        @csrf
        <button type="submit" style="font-size:24px;">ギャグ発射！</button>
    </form>
</body>

</html>