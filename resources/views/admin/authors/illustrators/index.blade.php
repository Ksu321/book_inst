@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Ілюстратори
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('illustrators.create')}}" class="btn btn-success">Додати</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Імʼя/псевдонім</th>
                            <th>Книжки</th>
                            <th>Видавництва</th>
                            <th>Фото</th>
                            <th>Дії</th>
                        </tr>
                        </thead>
                        @foreach($illustrators as $illustrator)
                        <tbody>
                        <tr>
                            <td>{{$illustrator->id}}</td>
                            <td>{{$illustrator->name}}</td>
                            <td>{{$illustrator->books}}</td>
                            <td>test</td>
                            <td><img src="{{$illustrator->getImage()}}" alt="" width="100"></td></td>
                            <td>
                                <a href="{{route('illustrators.edit', $illustrator->id)}}" class="fa fa-pencil"></a>
                                {{Form::open(['route'=>['illustrators.destroy', $illustrator->id], 'method'=>'delete'])}}
                                <button onclick="return confirm('Ви дійсно хочете видалити цього ілюстратора?')" type="submit" class="delete">
                                    <i class="fa fa-remove"></i>
                                </button>
                                {{Form::close()}}
                            </td>
                        </tr>
                        @endforeach
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </section>
    </div>
@endsection