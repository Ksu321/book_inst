@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Перекладачі
            </h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header">

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('interpreters.create')}}" class="btn btn-success">Додати</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ім'я</th>
                            <th>Мови</th>
                            <th>Книжки</th>
                            <th>Видавництва</th>
                            <th>Фото</th>
                            <th>Дії</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($interpreters as $interpreter)
                        <tr>
                            <td>{{$interpreter->id}}</td>
                            <td>{{$interpreter->name}}</td>
                            <td>Demo, demo</td>
                            <td>Demo, demo</td>
                            <td>Demo, demo</td>
                            <td><img src="{{$interpreter->getImage()}}" alt="" width="100"></td></td>
                            <td>
                                <a href="{{route('interpreters.edit', $interpreter->id)}}" class="fa fa-pencil"></a>
                                {{Form::open(['route'=>['interpreters.destroy', $interpreter->id], 'method'=>'delete'])}}
                                <button onclick="return confirm('Ви дійсно хочете видалити цього перекладача?')" type="submit" class="delete">
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
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
@endsection