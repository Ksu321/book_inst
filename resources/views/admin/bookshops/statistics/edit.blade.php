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
                            'route'	=>	['statistics.update', $statistic->id],
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
                                <label for="exampleInputEmail1">Назва</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{$statistic->title}}">
                            </div>
                            <div class="form-group">
                                <img src="{{$statistic->getImage()}}" alt="" class="img-responsive" width="200">
                                <label for="exampleInputFile">Лицьова картинка</label>
                                <input type="file" name="image" value="" id="exampleInputFile">

                                <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                            </div>

                            <div class="form-group">
                                <a download href="{{$statistic->getFile()}}">Download</a>
                                <label for="exampleInputFile">Файл </label>
                                <input type="file" name="file" value="" id="exampleInputFile">

                                <p class="help-block">Формат завантаження файла має бути .pdf</p>
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
                                           value="{{$statistic->date}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>
                                    {{Form::checkbox('status', '1', $publishing->status, ['class'=>'minimal'])}}
                                </label>
                                <label>
                                    Чернетка
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Текст статистики</label>
                                <textarea name="content" id="" cols="30" rows="10" class="form-control"
                                          style="resize: none">{{$statistic->content}}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{route('statistics.index')}}" class="btn btn-default">Назад</a>
                        <button class="btn btn-success pull-right">Додати</button>
                    </div>
                </div>
            </section>

    {{Form::close()}}
@endsection