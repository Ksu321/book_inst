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
                            'route'	=>	['interpreters.update', $interpreter->id],
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
                            <label for="exampleInputEmail1">Ім’я та прізвище</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Ім’я та прізвище перекладача" value="{{$interpreter->name}}">
                        </div>

                        <div class="form-group">
                            <img src="{{$interpreter->getImage()}}" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Фото</label>
                            <input type="file" name="image" id="exampleInputFile">
                            <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">З яких мов перекладаєте?</label>
                            <input type="text" class="form-control" id="" placeholder="Перелік мов" value="">
                            <label for="exampleInputEmail1">На які мови перекладаєте?</label>
                            <input type="text" class="form-control" id="" placeholder="Перелік мов" value="">


                            <div class="form-group">
                                <label>Видавництва</label>
                                {{Form::select('publishings[]',
                                    $publishings,
                                    $selectedPublishings,
                                    ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть видавництва'])
                                }}
                            </div>
                            <div class="form-group">
                                <label>Перекладені книжки</label>
                                {{Form::select('bookNews[]',
                                    $bookNews,
                                    $selectedBookNews,
                                    ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть книжки'])
                                }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Контакти:</label>

                            <div class="input-group" style="width: 100%;">
                                <div class="input-group-addon" style="width: 50px;">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" name="phone" value="{{$interpreter->phone}}" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="(___) ___-____">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{$interpreter->email}}">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i class="fa fa-desktop"></i></span>
                                <input type="text" name="address_url" class="form-control" placeholder="Ссилка на сайт або на соц мережу" value="{{$interpreter->address_url}}">
                            </div>
                        </div>
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
                            <textarea name="biography" id="" cols="30" rows="10" class="form-control" style="resize: none" placeholder="Опис біографії та навичок перекладача">{{$interpreter->biography}}</textarea>

                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{route('interpreters.index')}}" class="btn btn-default"> Назад</a>
                    <button class="btn btn-success pull-right">Додати</button>
                </div>
            </div>
            {{Form::close()}}
        </section>
@endsection