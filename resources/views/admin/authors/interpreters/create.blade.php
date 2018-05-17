@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Додати перекладача
                <small></small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            {{Form::open([
  'route'	=> 'interpreters.store',
  'files'	=>	true
])}}
            <div class="box">
                <div class="box-header with-border">
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ім’я та прізвище</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Ім’я та прізвище перекладача" value="{{old('name')}}">
                        </div>

                        <div class="form-group">
                            <img src="" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Фото</label>
                            <input type="file" name="image" id="exampleInputFile">
                            <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">З яких мов перекладаєте?</label>
                            <input type="text" class="form-control" id="" placeholder="Перелік мов" value="">
                            <label for="exampleInputEmail1">На які мови перекладаєте?</label>
                            <input type="text" class="form-control" id="" placeholder="Перелік мов" value="">

                            <div class="field-toggle"><a class="btn js-add-select">Вибір</a></div>
                            <div class="field-container js-child-block">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div class="row">
                                            <label class="col-md-3">Книжкові новини</label>
                                            <div class="col-md-9">
                                                <input type="text" class="" name="booksnews_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        {{Form::select('bookNews[]',
                                    $bookNews,
                                    null,
                                    ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть книжки'])
                                }}
                                    </div>
                                </div>
                            </div>

                            <div class="field-toggle"><a class="btn js-add-select">Вибір</a></div>
                            <div class="field-container js-child-block">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <div class="row">
                                            <label class="col-md-3">Видавництва</label>
                                            <div class="col-md-9">
                                                <input type="text" class="" name="publishings_name">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        {{Form::select('publishings[]',
                                            $publishings,
                                            null,
                                            ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть видавництва'])
                                        }}
                                    </div>
                                </div>

                            </div>
                        </div>
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
                        </div>

                        <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i
                                            class="fa fa-desktop"></i></span>
                            <input type="text" name="address_url" value="{{old('twitter')}}"
                                   class="form-control" placeholder="Ссилка на twitter">
                        </div>

                        <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i
                                            class="fa fa-desktop"></i></span>
                            <input type="text" name="address_url" value="{{old('google')}}"
                                   class="form-control" placeholder="Ссилка на google+">
                        </div>

                        <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i
                                            class="fa fa-desktop"></i></span>
                            <input type="text" name="address_url" value="{{old('youtube')}}"
                                   class="form-control" placeholder="Ссилка на youtube">
                        </div>

                        <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i
                                            class="fa fa-desktop"></i></span>
                            <input type="text" name="address_url" value="{{old('facebook')}}"
                                   class="form-control" placeholder="Ссилка на facebook">
                        </div>

                        <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i
                                            class="fa fa-desktop"></i></span>
                            <input type="text" name="address_url" value="{{old('instagram')}}"
                                   class="form-control" placeholder="Ссилка на instagram">
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="status" class="minimal" checked>
                            </label>
                            <label>
                                Чернетка
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Біографія</label>
                            <textarea name="biography" id="" cols="30" rows="10" class="form-control" style="resize: none" placeholder="Опис біографії та навичок перекладача">{{old('biography')}}</textarea>

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
    </div>
@endsection