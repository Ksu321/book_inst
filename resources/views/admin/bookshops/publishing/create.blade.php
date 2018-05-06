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
                        <div class="form-group">
                            <label>Книги виданні видавництвом </label>
                            {{Form::select('bookNews[]',
                                $bookNews,
                                null,
                                ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть книги'])
                            }}
                        </div>
                        <div class="form-group">
                            <label>Автори які працювали з видавництвом</label>
                            {{Form::select('author[]',
                                $authors,
                                null,
                                ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть авторів'])
                            }}
                        </div>

                        <div class="form-group">
                            <label>Ілюстратори які працювали з видавництвом</label>
                            {{Form::select('illustrator[]',
                                $illustrators,
                                null,
                                ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть ілюстраторів'])
                            }}
                        </div>

                        <div class="form-group">
                            <label>Перекладачі які працювали з видавництвом</label>
                            {{Form::select('interpreter[]',
                                $interpreters,
                                null,
                                ['class' => 'form-control select2', 'multiple'=>'multiple','data-placeholder'=>'Виберіть перекладачів'])
                            }}
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
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                        <div class="form-group">
                            <label>Рік заснування:</label>

                            <div class="input-group date" style="width: 100%;">
                                <div class="input-group-addon" style="width: 50px;">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="number" name="year" class="form-control" id="" placeholder="1999" value="{{old('year')}}">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Премії</label>
                            <input type="text" name="reward" class="form-control" id="" placeholder="" value="{{old('reward')}}">
                            <label for="exampleInputEmail1">Відзнаки</label>
                            <input type="text" name="prize" class="form-control" id="" placeholder="" value="{{old('prize')}}">
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
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('publishing.index')}}" class="btn btn-default"> Назад</a>
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