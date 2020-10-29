@extends('layout')

@section('content')

    <div class="box-white rtl">
        <form action="{{ action('UserController@delete') }}" method="post">
            @csrf
            @method('delete')
            <input type="hidden" name="id" value="{{ $record->id }}">
            <div class="alert alert-warning">
                آیا از حذف این رکورد اطمینان دارید ؟
            </div>
            <button class="btn btn-danger">حذف</button>
            <a class="btn btn-light" href="{{ action('UserController@index') }}">بازگشت</a>
        </form>
    </div>

@endsection
