<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
</head>
<body>
    <h1>掲示板</h1>

    <!--投稿フォーム-->
    <div>
        <h2>投稿フォーム</h2>
        <form action="{{route('tweet.create')}}" method="post">
            @csrf
            <input type="text" name="tweet">
            <input type="submit" value="投稿する">
            @error('tweet')
            <p>投稿を入力してください</p>
            @enderror
        </form>
    </div>

    <!--投稿一覧-->
    @foreach($tweets as $tweet)
    <p>{{$tweet->content}}{{$tweet->created_at}}</p>
    @endforeach



</body>
</html>
