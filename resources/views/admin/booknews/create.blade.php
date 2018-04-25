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
        <form action="{{route('booknews.store')}}" id="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        @include('admin.errors')
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Назва новини</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{old('title')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Опис новини</label>
                                <textarea class="form-control" name="description" rows="4" cols="45"
                                          style="resize: none">{{old('description')}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Лицьова картинка</label>
                                <input type="file" name="image" value="{{old('image')}}" id="exampleInputFile">

                                <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Назва книги</label>
                                <input type="text" name="name_book" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{old('name_book')}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Автор книги</label>
                                <input type="text" name="author_book" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{old('author_book')}}">
                            </div>

                            <div class="form-group">

                                <label>Рік видання книги:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="" name="year_publish"
                                           value="{{old('year_publish')}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Кількість сторінок</label>
                                <input type="text" name="number_pages" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{old('number_pages')}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Жанр книги</label>
                                <input type="text" name="genre_book" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{old('genre_book')}}">
                            </div>


                            <div class="form-group">
                                <label>Теги</label>
                                {{Form::select('tags[]',
                                    $tags,
                                    null,
                                    ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть теги'])
                                }}
                            </div>
                            <div class="form-group">

                                <label>Дата:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker" name="date"
                                           value="{{old('data')}}">
                                </div>
                            </div>

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
                                <label for="exampleInputEmail1">Анотація до книги</label>
                                <textarea name="annotation" id="" cols="30" rows="10" class="form-control"
                                          style="resize: none">{{old('annotation')}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{route('booknews.index')}}" class="btn btn-default"> Назад</a>
                        <button class="btn btn-success pull-right">Додати</button>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection