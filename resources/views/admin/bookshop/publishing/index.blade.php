@extends('admin.layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Видавництва
            </h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Видавництва</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('publishing.create')}}" class="btn btn-success">Додати</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Назва</th>
                            <th>Місто</th>
                            <th>Спеціалізація</th>
                            <th>Дія</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($publishings as $publishing)
                        <tr>
                            <td>{{$publishing->id}}</td>
                            <td>{{$publishing->name}}</td>
                            <td>{{$publishing->city}}</td>
                            <td>{{$publishing->getSpecializationTitle()}}</td>
                            <td>
                                <a href="{{route('publishing.edit', $publishing->id)}}" class="fa fa-pencil"></a>
                                {{Form::open(['route'=>['publishing.destroy', $publishing->id], 'method'=>'delete'])}}
                                <button onclick="return confirm('Ви дійсно хочете видалити цє видавництво?')" type="submit" class="delete">
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
    <!-- /.content-wrapper -->
@endsection