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
            width: 300px;
            padding: 30px;
            border: 1px solid #999999;
            box-shadow: 3px 3px 3px 3px #999999;
            margin: 100px auto;
            text-align: center;
            background-color: pink;
        }
    </style>

</head>
<body>

<div class="box">
    <form action="{{ action('ArticleController@store') }}" method="post">
        {{ csrf_field() }}
        title: <input type="text" name="title">
        <br>
        <br>
        body : <textarea name="body"></textarea>
        <br>
        <br>
        source : <input type="text" name="source">
        <br>
        <br>
        <input type="submit" value="Send">
    </form>

</div>

</body>
</html>
