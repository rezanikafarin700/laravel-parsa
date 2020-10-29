<table border="1">

    <thead>
    <th>id</th>
    <th>username</th>
    <th>password</th>
    <th>Insert</th>
    <th>Show</th>
    <th>Edit</th>
    <th>Delete</th>
    </thead>

    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->username }}</td>
            <td>{{ $student->password }}</td>
            <td><a href="student/create">
                    <button>Insert</button>
                </a></td>
            <td><a href="student/{{ $student->id }}">
                    <button>Show</button>
                </a></td>
            <td><a href="student/{{$student->id}}/edit">
                    <button>Edit</button>
                </a></td>
            <td>
                <form action="student/{{$student->id}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <input type="submit" value="Delete">
                </form>

            </td>
        </tr>
    @endforeach
    </tbody>

    <tfoot></tfoot>


</table>
