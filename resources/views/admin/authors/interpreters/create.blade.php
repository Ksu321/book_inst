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

            <!-- Default box -->
            <div class="box">
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ім’я та прізвище</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ім’я та прізвище перекладача" value="">
                        </div>

                        <div class="form-group">
                            <img src="../assets/dist/img/boxed-bg.jpg" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Фото</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Формат завантаження картинки має бути .jpeg або .png</p>
                        </div>
                        <!-- Date -->

                        <!-- checkbox -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">З яких мов перекладаєте?</label>
                            <input type="text" class="form-control" id="" placeholder="Перелік мов" value="">
                            <label for="exampleInputEmail1">На які мови перекладаєте?</label>
                            <input type="text" class="form-control" id="" placeholder="Перелік мов" value="">
                            <label for="exampleInputEmail1">Видавництва</label>
                            <input type="text" class="form-control" id="" placeholder="Видавництва, з якими працює перекладач" value="">
                            <label for="exampleInputEmail1">Книжки у стадії перекладу</label>
                            <input type="text" class="form-control" id="" placeholder="Перелік книжок" value="">
                            <label for="exampleInputEmail1">Перекладені книжки</label>
                            <input type="text" class="form-control" id="" placeholder="Перелік книжок" value="">
                        </div>
                        <!-- contacts -->
                        <div class="form-group">
                            <label>Контакти:</label>

                            <div class="input-group" style="width: 100%;">
                                <div class="input-group-addon" style="width: 50px;">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="(___) ___-____">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Email" value="">
                            </div>
                            <div class="input-group" style="width: 100%;">
                                <span class="input-group-addon" style="width: 50px;"><i class="fa fa-desktop"></i></span>
                                <input type="text" class="form-control" placeholder="Website" value="">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- contacts -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal" checked>
                            </label>
                            <label>
                                Чернетка
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Біографія</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control" style="resize: none" placeholder="Опис біографії та навичок перекладача"></textarea>

                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-default">Назад</button>
                    <button class="btn btn-success pull-right">Додати</button>
                </div>
                <!-- /.box-footer-->
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection