@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Додати книжкову новину
            </h1>
        </section>
        <form action="{{route('announcements.store')}}" id="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        @include('admin.errors')
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Назва</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{old('title')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Опис</label>
                                <textarea class="form-control" name="description" rows="4" cols="45"
                                          style="resize: none">{{old('description')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Лицевая картинка</label>
                                <input type="file" name="image" value="{{old('image')}}" id="exampleInputFile">

                                <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Місто</label>
                                <input type="text" name="city" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{old('city')}}">
                            </div>
                            <div class="form-group">
                                <label>Категорія</label>
                                {{Form::select('category_id',
                                    $categories,
                                    null,
                                    ['class' => 'form-control select2'])
                                }}
                            </div>
                            <div class="form-group">
                                <label>Теги</label>
                                {{Form::select('tags[]',
                                    $tags,
                                    null,
                                    ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Выберите теги'])
                                }}
                            </div>
                            <div class="form-group">
                                <label>Дата:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker" name="date"
                                           value="{{old('date')}}">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="minimal" value="{{old('status')}}" name="status">
                                </label>
                                <label>
                                    Чернетка
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Текст анонсов</label>
                                <textarea name="content" id="" cols="30" rows="10" class="form-control"
                                          style="resize: none">{{old('content')}}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{route('announcements.index')}}" class="btn btn-default"> Назад</a>
                        <button class="btn btn-success pull-right">Добавить</button>
                    </div>
                </div>
            </section>
        </form>

    </div>

@endsection