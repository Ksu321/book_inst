@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Змінити новину
                <small>приятные слова..</small>
            </h1>
        </section>
        <section class="content">
            {{Form::open([
                            'route'	=>	['news.update', $new->id],
                            'files'	=>	true,
                            'method'	=>	'put'
	                ])}}
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Обновляем статью</h3>
                        @include('admin.errors')
                    </div>

                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{$new->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание</label>
                                <textarea class="form-control" name="description" rows="4" cols="45"
                                          style="resize: none">{{$new->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <img src="{{$new->getImage()}}" alt="" class="img-responsive" width="200">
                                <label for="exampleInputFile">Лицевая картинка</label>
                                <input type="file" id="exampleInputFile" name="image">

                                <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Город</label>
                                <input type="text" name="city" class="form-control" id="exampleInputEmail1"
                                       placeholder="" value="{{$new->city}}">
                            </div>

                            <div class="form-group">
                                <label>Дата:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker" name="date"
                                           value="{{$new->date}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    {{Form::checkbox('status', '1', $new->status, ['class'=>'minimal'])}}
                                </label>
                                <label>
                                    Черновик
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Текст анонсов</label>
                                <textarea name="content" id="" cols="30" rows="10" class="form-control"
                                          style="resize: none">{{$new->content}}</textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{route('news.index')}}" class="btn btn-default"> Назад</a>
                        <button class="btn btn-success pull-right">Добавить</button>
                    </div>
                </div>
            {{Form::close()}}
        </section>
@endsection