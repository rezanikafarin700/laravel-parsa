<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="box">
    <form action="../{{ $article->id }}" method="post">
        {{ method_field('put') }}
        {{ csrf_field() }}
        title: <input type="text" name="title" value="{{ $article->title }}">
        <br>
        <br>
        body : <textarea name="body">value="{{ $article->body }}"</textarea>
        <br>
        <br>
        source : <input type="text" name="source" value="{{ $article->source }}">
        <br>
        <br>
        <input type="submit" value="Send" >
    </form>

</div>


</body>
</html>
