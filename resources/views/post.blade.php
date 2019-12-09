<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >

    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >

    <title>Test Page</title>
</head>
<body>
    <div>
        @foreach($posts as $post)
            <h1>{{$post->title}}</h1>
            <p>{{$post->slug}}</p>
            <p>{{$post->body}}</p>
            <form method="POST" action="/delete">
                @csrf
                <input type="hidden" name="id" value="{{$post->id}}">
                <input type="submit" value="삭제">
            </form>
            <hr>
        @endforeach
    </div>
    <div>
        <h1>입력창</h1>
        <form method="POST" action="/store">
            @csrf
            title: <input type="text" name="title"><br>
            slug: <input type="text" name="slug"><br>
            body: <input type="textbox" name="body"><br>
            <input type="submit" value="입력">
        </form>
    </div>

</body>
</html>
