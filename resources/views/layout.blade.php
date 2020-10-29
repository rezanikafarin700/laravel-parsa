<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/font.css') }}">
    <title>Document</title>
</head>
<body>

<div id="layout">
    <div id="header">header1</div>

    <div id="parent">

        <div id="nav"></div>

        <div id="main">

            <div id="content">
                @yield('content')
            </div>
            <div class="footer">footer</div>
        </div>


    </div>
</div>


</body>
</html>
