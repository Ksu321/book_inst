@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Змінити анонс
            </h1>
        </section>
        <section class="content">
            {{Form::open([
                            'route'	=>	['announcements.update', $announcement->id],
                            'files'	=>	true,
                            'method'	=>	'put'
	                ])}}
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Оновлюємо анонс</h3>
                        @include('admin.errors')
                    </div>

                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Назва</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{$announcement->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Опис</label>
                                <textarea class="form-control" name="description" rows="4" cols="45"
                                          style="resize: none">{{$announcement->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <img src="{{$announcement->getImage()}}" alt="" class="img-responsive" width="200">
                                <label for="exampleInputFile">Лицьова картинка</label>
                                <input type="file" id="exampleInputFile" name="image">

                                <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Місто</label>
                                <input type="text" name="city" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{$announcement->city}}">
                            </div>
                            <div class="form-group">
                                <label>Категорія</label>
                                {{Form::select('category_id',
                                    $categories,
                                    $announcement->getCategoryID(),
                                    ['class' => 'form-control select2'])
                                }}
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
                                           value="{{$announcement->date}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    {{Form::checkbox('status', '1', $announcement->status, ['class'=>'minimal'])}}
                                </label>
                                <label>
                                    Чернетка
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Текст анонсів</label>
                                <textarea name="content" id="" cols="30" rows="10" class="form-control"
                                          style="resize: none">{{$announcement->content}}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{route('announcements.index')}}" class="btn btn-default"> Назад</a>
                        <button class="btn btn-success pull-right">Додати</button>
                    </div>
                </div>
            {{Form::close()}}
        </section>
@endsection