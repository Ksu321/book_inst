@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Додати користувача
            </h1>
        </section>
        <section class="content">
            {{Form::open([
 'route'	=> 'users.store',
 'files'	=>	true
])}}
                <div class="box">
                <div class="box-header with-border">
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ім'я</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{old('name')}}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1" value="{{old('email')}}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Пароль</label>
                            <input type="text" name="password" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Аватар</label>
                            <input type="file" name="avatar" id="exampleInputFile">

                            <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{route('users.index')}}" class="btn btn-default" > Назад</a>
                    <button class="btn btn-success pull-right">Додати</button>
                </div>

            </div>
            {{Form::close()}}
        </section>
    </div>
@endsection