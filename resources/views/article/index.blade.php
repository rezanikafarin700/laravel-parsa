<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table border="1">
    <thead>
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>

    @forelse($articles as $article)
        <tr>
            <td>
                {{ $article->id }}
            </td>
            <td>
                {{ $article->title }}
            </td>
            <td>
                <a href="article/{{ $article->id }}"><button>Show</button></a>
            </td>
            <td>
                <a href="article/edit/{{ $article->id }}"><button>Edit</button></a>
            </td>
            <td>
                <form action="article/{{ $article->id }}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <input type="submit" value="Delete">

                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
    <tfoot></tfoot>
</table>

</body>
</html>
