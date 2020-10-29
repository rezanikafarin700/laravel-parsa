<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .box
        {
            background-color: pink;
            border-radius: 10px;
            text-align: center;
            width: 500px;
            padding: 20px;
        }
    </style>

</head>
<body>

    <div class="box">
        <h1>Number : {{ $article->id }}</h1>
        <h1>{{ $article->title }}</h1>
        <h2>body : </h2>
        <p>
            {{ $article->body }}
        </p>

        <br>
        Source :
        <h2>{{ $article->source }}</h2>
        <a href="../article"><button>Main</button></a>
    </div>

</body>
</html>
