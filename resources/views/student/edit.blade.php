<div class="parent">
    <div class="box">
{{--        <form action="../{{$student->id}}" method="post">--}}
        <form action=" {{ action('StudentController@edit',['id'=>$student->id]) }}" method="post">
            {{ method_field('put') }}
            {{ csrf_field() }}
            Username : <input type="text" name="username" value="{{ $student->username }}">
            <br>
            <br>
            Password : <input type="text" name="password" value="{{ $student->password }}">
            <br>
            <br>
            <input type="submit" value="Send">
        </form>
    </div>


</div>


<style>
    .parent {
        margin: 100px auto;
        display: flex;
        justify-content: center;
    }

    .parent .box {
        border: 1px solid #000000;
        padding: 20px;
        width: 300px;
        border-radius: 10px;
    }
</style>
