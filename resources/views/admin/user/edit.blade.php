@extends('layout')

@section('content')

    <div class="box-white rtl">

        @if(session()->has('update'))
            <div class="alert alert-success">
                اطلاعات این کاربر با موفقیت ویرایش شد
            </div>
        @endif

        <div class="title">ویرایش اطلاعات کاربر</div>
        <form action="{{ action('UserController@update') }}" method="post">
            @csrf
            @method('put');
            <input type="hidden" name="id" value="{{ $record->id }}">
            <div class="form-group my-form">
                <label for="name">نام</label>
                <input name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name',$record->name) }}" id="name" placeholder="نام">
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            </div>
            <div class="form-group my-form">
                <label for="family">نام خانوادگی</label>
                <input name="family" class="form-control  {{ $errors->has('family') ? 'is-invalid' : '' }}" value="{{ old('family',$record->family) }}" id="family" placeholder="نام خانوادگی">
                <div class="invalid-feedback">
                    {{ $errors->first('family') }}
                </div>
            </div>
            <div class="form-group my-form">
                <label for="mobile">مبایل</label>
                <input name="mobile" class="form-control  {{ $errors->has('mobile') ? 'is-invalid' : '' }}" value="{{ old('mobile',$record->mobile) }}" id="mobile" placeholder="مبایل">
                <div class="invalid-feedback">
                    {{ $errors->first('mobile') }}
                </div>
            </div>
            <div class="form-group my-form">
                <label for="password">پسورد</label>
                <input name="password" class="form-control  {{ $errors->has('password') ? 'is-invalid' : '' }}" value="{{ old('password',$record->password) }}" id="password" placeholder="پسورد">
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
            </div>
            <div class="form-group my-form">
                <label for="address">آدرس</label>
                <input name="address" class="form-control  {{ $errors->has('address') ? 'is-invalid' : '' }}" value="{{ old('address',$record->password) }}" id="address" placeholder="آدرس">
                <div class="invalid-feedback">
                    {{ $errors->first('address') }}
                </div>
            </div>

            <button class="btn btn-success">ذخیره</button>
            <a class="btn btn-light" href="{{ action('UserController@index') }}">بازگشت</a>
        </form>
    </div>

@endsection
