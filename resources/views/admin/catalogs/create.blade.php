@extends('admin.layout')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Додати каталог
                <small></small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            {{Form::open([
                    'route'	=> 'catalogs.store',
                    'files'	=>	true
                ])}}
            <div class="box">
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Назва</label>
                            <input value="" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Назва каталогу" value="{{old('name')}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Фото</label>
                            <input value="" name="image" type="file" id="exampleInputFile">
                            <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Файл</label>
                            <input value="" name="file" type="file" id="exampleInputFile">
                            <p class="help-block">Формат завантаження файла має бути .pdf</p>
                        </div>
                        <div class="form-group">
                            <label>Рік:</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input name="year" type="number" class="form-control" id="" placeholder="1999" value="{{old('year')}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Посилання</label>
                            <input value="" name="link" type="text" id="exampleInputFile">
                            <p class="help-block">посилання для перегляну каталогу онлайн на сайті issuu.com</p>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal" checked value="" name="status">
                            </label>
                            <label>
                                Чернетка
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Опис</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Опис">{{old('description')}}</textarea>

                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('catalogs.index')}}" class="btn btn-default">Назад</a>
                    <button class="btn btn-success pull-right">Додати</button>
                </div>
            </div>
            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection