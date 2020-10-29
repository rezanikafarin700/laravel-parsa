@extends('layout')

@section('content')

    @if(session()->has('insert'))
        <div class="alert alert-success rtl">
            اطلاعات کاربر جدید با موفقیت درج شد
        </div>
    @endif

    <div class="box-white rtl">
        <div class="title">افزودن کاربر</div>
        <form action="{{ action('UserController@store')}}" method="post">
            @csrf
            <div class="form-group my-form">
                <label for="name">نام</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name') }}" name="name"  id="name" placeholder="نام">
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            </div>
            <div class="form-group my-form">
                <label for="family">نام خانوادگی</label>
                <input class="form-control {{ $errors->has('family') ? 'is-invalid' : '' }}" value="{{ old('family') }}" name="family" id="family" placeholder="نام خانوادگی">

            </div>
            <div class="form-group my-form">
                <label for="mobile">مبایل</label>
                <input  value="{{ old('mobile') }}" class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" name="mobile" id="mobile" placeholder="مبایل">
                <div class="invalid-feedback">
                    {{ $errors->first('family') }}
                </div>
            </div>
            <div class="form-group my-form">
                <label for="password">پسورد</label>
                <input value="{{ old('password') }}" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" id="password" placeholder="پسورد">
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
            </div>
            <div class="form-group my-form">
                <label for="address">آدرس</label>
                <input value="{{ old('address') }}" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address" placeholder="آدرس">
                <div class="invalid-feedback">
                    {{ $errors->first('address') }}
                </div>
            </div>

            <div class="btns">
            <button class="btn btn-success my-btn">ذخیره</button>
            <a href="{{ action('UserController@index') }}" class="btn btn-light my-btn">بازگشت</a>
            </div>
        </form>
    </div>


@endsection
