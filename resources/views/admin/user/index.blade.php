@extends('layout')
<div id="index">


    @section('content')
        <a href="{{ action('UserController@add') }}" class="btn btn-success"> افزودن</a>
        <br><br>


        @if(session('delete'))
            <div class="alert alert-success rtl">
                عملیات حذف با موفقیت انجام شد
            </div>
        @endif


        <table border="1" class="rtl">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">نام</th>
                <th scope="col">نام خانوادگی</th>
                <th scope="col">مبایل</th>
                <th scope="col">پسورد</th>
                <th scope="col">آدرس</th>
                <th scope="col">ویرایش</th>
                <th scope="col">حذف</th>
            </tr>
            </thead>
            <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->family }}</td>
                    <td>{{ $record->mobile }}</td>
                    <td>{{ $record->password }}</td>
                    <td>{{ $record->address }}</td>
                    <td><a href="{{ action('UserController@edit',['id' => $record->id]) }}">ویرایش</a></td>
                    <td><a href=" {{ action('UserController@remove',['id' => $record->id]) }}">حذف</a></td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $records->links() }}
    @endsection
</div>
