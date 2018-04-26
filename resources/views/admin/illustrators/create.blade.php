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
            <form action="{{route('illustrators.store')}}" id="form" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Псевдонім/Ім’я</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Псевдонім/ПІБ перекладача" value="">
                        </div>

                        <div class="form-group">
                            <img src="" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Фото</label>
                            <input type="file" name="image" id="exampleInputFile">
                            <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                        </div>
                        <!-- Date -->

                        <!-- checkbox -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Жанр</label>
                            <input type="text" name="genre" class="form-control" id="" placeholder="Жанри ілюстрації" value="">
                            <label for="exampleInputEmail1">Видавництва</label>
                            <input type="text" name="" class="form-control" id="" placeholder="Видавництва, які видавали книги з роботами ілюстратора" value="">
                            <label for="exampleInputEmail1">Ілюстровані книжки</label>
                            <input type="text" name="" class="form-control" id="" placeholder="Перелік книжок" value="">

                        </div>
                        <!-- contacts -->
                        <div class="form-group">
                            <label>Контакти:</label>

                            <div class="input-group" style="width: 100%;">
                                <div class="input-group-addon" style="width: 50px;">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" name="phone" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="(___) ___-____">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="Email" value="">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i class="fa fa-desktop"></i></span>
                                <input type="text" name="url" class="form-control" placeholder="Website" value="">
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
                            <textarea name="biography" id="" cols="30" rows="10" class="form-control" style="resize: none" placeholder="Опис біографії та навичок ілюстратора"></textarea>

                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('illustrators.index')}}" class="btn btn-default"> Назад</a>
                    <button class="btn btn-success pull-right">Додати</button>
                </div>
                <!-- /.box-footer-->
            </div>

            <!-- /.box -->
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection