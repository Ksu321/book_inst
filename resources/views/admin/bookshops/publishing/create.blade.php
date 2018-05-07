@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Додати видавництво
                <small></small>
            </h1>
        </section>
        <section class="content">
        {{Form::open([
          'route'	=> 'publishing.store',
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
                            <label for="exampleInputEmail1">Назва</label>
                            <input type="text" name="name" class="form-control" id="" placeholder="Назва видавництва" value="{{old('name')}}">
                        </div>

                        <div class="form-group">
                            <img src="" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Логотип</label>
                            <input type="file" name="image" id="exampleInputFile">
                        </div>
                        <div class="form-group">
                            <label>Місто</label>
                            <input type="text" name="city" class="form-control" id="" placeholder="Місто видавництва" value="{{old('city')}}">
                        </div>
                        <div class="form-group">
                            <label>Спеціалізація</label>
                            {{Form::select('specialization_id',
                                $specializations,
                                null,
                                ['class' => 'form-control select2'])
                            }}
                        </div>
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
                                        <label class="col-md-3">Автори</label>
                                        <div class="col-md-9">
                                            <input type="text" class="" name="authors_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    {{Form::select('author[]',
                                $authors,
                                null,
                                ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть авторів'])
                            }}
                                </div>
                            </div>
                        </div>



                        <div class="field-toggle"><a class="btn js-add-select">Вибір</a></div>
                        <div class="field-container js-child-block">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div class="row">
                                        <label class="col-md-3">Ілюстратори</label>
                                        <div class="col-md-9">
                                            <input type="text" class="" name="illustrators_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    {{Form::select('illustrator[]',
                                $illustrators,
                                null,
                                ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть ілюстраторів'])
                            }}
                                </div>
                            </div>
                        </div>

                        <div class="field-toggle"><a class="btn js-add-select">Вибір</a></div>
                        <div class="field-container js-child-block">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div class="row">
                                        <label class="col-md-3">Перекладачі</label>
                                        <div class="col-md-9">
                                            <input type="text" class="" name="interpreters_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    {{Form::select('interpreter[]',
                                $interpreters,
                                null,
                                ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть перекладачів'])
                            }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Адреса видавництва</label>
                            <input type="text" name="address" class="form-control" id="" placeholder="Адреса видавництва" value="{{old('address')}}">
                        </div>
                        <div class="form-group">
                            <label>Контакти видавництва:</label>

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
                        </div>
                        <div class="form-group">
                            <label>Рік заснування:</label>

                            <div class="input-group date" style="width: 100%;">
                                <div class="input-group-addon" style="width: 50px;">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="number" name="year" class="form-control" id="" placeholder="1999" value="{{old('year')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Українські премії, нагороди, відзнаки </label>
                            <input type="text" name="ukrainian_prizes" class="form-control" id="" placeholder="" value="{{old('ukrainian_prizes')}}">
                            <label for="exampleInputEmail1">Міжнародні премії, нагороди, відзнаки</label>
                            <input type="text" name="international_prizes" class="form-control" id="" placeholder="" value="{{old('international_prizes')}}">
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
                            <label for="exampleInputEmail1">Опис</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" style="resize: none" placeholder="Текстовий опис видавництва">{{old('description')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{route('publishing.index')}}" class="btn btn-default"> Назад</a>
                    <button class="btn btn-success pull-right">Додати</button>
                </div>
            </div>
        {{Form::close()}}
        </section>
    </div>
    @endsection