@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Редагувати письменника
                <small></small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

        {{Form::open([
                        'route'	=>	['authors.update', $author->id],
                        'files'	=>	true,
                        'method'	=>	'put'
                ])}}
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Псевдонім/Ім’я письменника</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$author->name}}">
                        </div>

                        <div class="form-group">
                            <img src="{{$author->getImage()}}" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Фото</label>
                            <input type="file" name="image" id="exampleInputFile">
                            <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                        </div>
                        <!-- Date -->

                        <!-- checkbox -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Видавництва</label>
                            <input type="text"  class="form-control" id="" placeholder="" value="Demo, demo, demo">
                            <label for="exampleInputEmail1">Усі книжки</label>
                            <input type="text" class="form-control" id="" placeholder="" value="Demo, demo">
                        </div>

                        <!-- contacts -->
                        <div class="form-group">
                            <label>Контакти:</label>

                            <div class="input-group" style="width: 100%;">
                                <div class="input-group-addon" style="width: 50px;">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" name="phone"  class="form-control" value="{{$author->phone}}" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="(___) ___-____">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{$author->email}}">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i class="fa fa-desktop"></i></span>
                                <input type="text" class="form-control" placeholder="Website" value="{{$author->address_url}}">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- contacts -->
                        <div class="form-group">
                            <label>
                                {{Form::checkbox('status', '1', $author->status, ['class'=>'minimal'])}}
                            </label>
                            <label>
                                Чернетка
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Біографія</label>
                            <textarea name="biography" id="" cols="30" rows="10" class="form-control" style="resize: none">{{$author->biography}}</textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('authors.index')}}" class="btn btn-default"> Назад</a>
                    <button class="btn btn-success pull-right">Додати</button>
                </div>
                <!-- /.box-footer-->
            </div>
{{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection