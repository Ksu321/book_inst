@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Додати письменника
                <small></small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{route('authors.store')}}" id="form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="box">
                <div class="box-header with-border">
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Псевдонім/Ім’я письменника</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Ім’я та прізвище письменника або псведонім" value="">
                        </div>

                        <div class="form-group">
                            <img src="" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Фото</label>
                            <input type="file" name="image" id="exampleInputFile">
                            <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                        </div>
                        <!-- Date -->

                        <!-- checkbox -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Видавництва</label>
                            <input type="text" class="form-control" id="" placeholder="Видавництва, які видавали книги письменника" value="">

                            <label for="exampleInputEmail1">Книжки</label>
                            <input type="text" class="form-control" id="" placeholder="Усі видані книжки цього письменника" value="">
                        </div>

                        


                        <button class="add">Додати</button>
                        <input type="text" name="" class="input">

                        <!-- contacts -->
                        <div class="form-group">
                            <label>Контакти:</label>

                            <div class="input-group" style="width: 100%;">
                                <div class="input-group-addon" style="width: 50px;">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" name="phone" value="{{old('phone')}}" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="(___) ___-____">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i class="fa fa-desktop"></i></span>
                                <input type="text" name="address_url" value="{{old('address_url')}}" class="form-control" placeholder="Ссилка на сайт або на соц мережу" >
                            </div>

                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal" name="status" value="{{old('status')}}" checked>
                            </label>
                            <label>
                                Чернетка
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Біографія</label>
                            <textarea name="biography"  id="" cols="30" rows="10" class="form-control" placeholder="Біографія письменника" style="resize: none">{{old('biography')}}</textarea>

                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{route('authors.index')}}" class="btn btn-default">Назад</a>
                    <button class="btn btn-success pull-right">Додати</button>
                </div>
                <!-- /.box-footer-->
            </div>
            </form>
        </section>
    </div>
@endsection