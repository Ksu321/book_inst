@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Змінити партнера
            </h1>
        </section>
        <section class="content">
        {{Form::open([
                            'route'	=>	['partners.update', $partner->id],
                            'files'	=>	true,
                            'method'	=>	'put'
	                ])}}
            <div class="box">
                <div class="box-header with-border">
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Назва</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="name" value="{{$partner->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Посилання</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="link" value="{{$partner->link}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Картинка</label>
                            <img src="{{$partner->getImage()}}" alt="" class="img-responsive" width="200">
                            <input type="file" name="image"  id="exampleInputFile">

                            <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                        </div>
                        <div class="form-group">
                            <label>
                                {{Form::checkbox('status', '1', $partner->status, ['class'=>'minimal'])}}
                            </label>
                            <label>
                                Чернетка
                            </label>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{route('partners.index')}}" class="btn btn-default" > Назад</a>
                    <button class="btn btn-success pull-right">Додати</button>
                </div>
            </div>
            {!! Form::close() !!}
        </section>
    </div>
@endsection