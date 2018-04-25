@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить статью
                <small>приятные слова..</small>
            </h1>
        </section>
        <section class="content">
            {{Form::open([
                            'route'	=>	['booknews.update', $aBookNews->id],
                            'files'	=>	true,
                            'method'	=>	'put'
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
                                       placeholder="" value="{{$aBookNews->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Опис новини</label>
                                <textarea class="form-control" name="description" rows="4" cols="45"
                                          style="resize: none">{{$aBookNews->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <img src="{{$aBookNews->getImage()}}" alt="" class="img-responsive" width="200">
                                <label for="exampleInputFile">Лицьова картинка</label>
                                <input type="file" id="exampleInputFile" name="image">

                                <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Назва книги</label>
                                <input type="text" name="name_book" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{$aBookNews->name_book}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Автор книги</label>
                                <input type="text" name="author_book" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{$aBookNews->author_book}}">
                            </div>

                            <div class="form-group">

                                <label>Рік видання книги:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker" name="year_publish"
                                           value="{{$aBookNews->year_publish}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Кількість сторінок</label>
                                <input type="text" name="number_pages" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{$aBookNews->number_pages}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Жанр книги</label>
                                <input type="text" name="genre_book" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{$aBookNews->genre_book}}">
                            </div>


                            <div class="form-group">
                                <label>Теги</label>
                                {{Form::select('tags[]',
                                    $tags,
                                    $selectedTags,
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
                                           value="{{$aBookNews->date}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    {{Form::checkbox('status', '1', $aBookNews->status, ['class'=>'minimal'])}}
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
                                          style="resize: none">{{$aBookNews->annotation}}</textarea>
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
@endsection