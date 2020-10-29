<div class="parent">
    <div class="box">
        <form action="{{ action('StudentController@store') }}" method="post">
            @csrf
            Username : <input type="text" name="username">
            <br>
            <br>
            Password : <input type="text" name="password">
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
