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
        {{Form::open([
      'route'	=> 'booknews.store',
      'files'	=>	true
  ])}}
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
                                <label>Видавництва </label>
                                <input type="text" name="publishings" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{old('publishings')}}">
                            </div>

                            <div>
                                <a class="add js-add-select">Додати</a>
                                <div class="form-group js-select-block">
                                    {{Form::select('publishings[]',
                                        $publishings,
                                        null,
                                        ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть видавництва'])
                                    }}
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Автори книги</label>
                                {{Form::select('author[]',
                                    $authors,
                                    null,
                                    ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть авторів'])
                                }}
                            </div>

                            <div class="form-group">
                                <label>Ілюстратори </label>
                                {{Form::select('illustrator[]',
                                    $illustrators,
                                    null,
                                    ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть ілюстраторів'])
                                }}
                            </div>

                            <div class="form-group">
                                <label>Перекладачі </label>
                                {{Form::select('interpreter[]',
                                    $interpreters,
                                    null,
                                    ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть перекладачів'])
                                }}
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
                                    <input type="checkbox" class="minimal" checked  name="status">
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
                {{Form::close()}}
            </section>

    </div>
@endsection