@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Додати ілюстратора
                <small></small>
            </h1>
        </section>

        <section class="content">
        {{Form::open([
  'route'	=> 'illustrators.store',
  'files'	=>	true
])}}
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Псевдонім/Ім’я</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Ім’я та прізвище письменника або псведонім" value="{{old('name')}}">
                        </div>

                        <div class="form-group">
                            <img src="" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Фото</label>
                            <input type="file" name="image" id="exampleInputFile">
                            <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                        </div>
                        <!-- Date -->

                        <div class="form-group">
                            <label for="exampleInputEmail1">Жанр</label>
                            <input type="text" name="genre" class="form-control" id="" placeholder="Жанри ілюстрації" value="">
                        </div>

                        <div class="form-group">
                                <label>Видавництва</label>
                                {{Form::select('publishings[]',
                                    $publishings,
                                    null,
                                    ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть видавництва'])
                                }}
                            </div>
                            <div class="form-group">
                                <label>Ілюстровані книжки</label>
                                {{Form::select('bookNews[]',
                                    $bookNews,
                                    null,
                                    ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть книжки'])
                                }}
                        </div>
                        <!-- contacts -->
                        <div class="form-group">
                            <label>Контакти:</label>

                            <div class="input-group" style="width: 100%;">
                                <div class="input-group-addon" style="width: 50px;">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" name="phone" value="{{old('phone')}}" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="(___) ___-____">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i class="fa fa-desktop"></i></span>
                                <input type="text" name="address_url" class="form-control" placeholder="Ссилка на сайт або на соц мережу" value="{{old('address_url')}}">
                            </div>
                            <!-- /.input group -->
                        </div>

                        <!-- contacts -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal" name="status" checked>
                            </label>
                            <label>
                                Чернетка
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Біографія</label>
                            <textarea name="biography" id="" cols="30" rows="10" class="form-control" style="resize: none" placeholder="Опис біографії та навичок ілюстратора">{{old('biography')}}</textarea>

                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('illustrators.index')}}" class="btn btn-default"> Назад</a>
                    <button class="btn btn-success pull-right">Додати</button>
                </div>
            </div>
            {{Form::close()}}
        </section>
    </div>
@endsection