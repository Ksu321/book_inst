@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Статистики
            </h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header">

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('statistics.create')}}" class="btn btn-success">Додати</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Назва</th>
                            <th>Теги</th>
                            <th>Картинка</th>
                            <th>Дія</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($statistics as $statistic)
                        <tr>
                            <td>{{$statistic->id}}</td>
                            <td>{{$statistic->title}}</td>
                            <td>{{$statistic->getTagsTitles()}}</td>
                            <td>
                                <img src="{{$statistic->getImage()}}" alt="" width="100">
                            </td>
                            <td>
                                <a href="{{route('statistics.edit', $statistic->id)}}" class="fa fa-pencil"></a>

                                {{Form::open(['route'=>['statistics.destroy', $statistic->id], 'method'=>'delete'])}}
                                <button onclick="return confirm('Ви дійсно хочете видалити цю статистику?')" type="submit" class="delete">
                                    <i class="fa fa-remove"></i>
                                </button>
                                {{Form::close()}}
                            </td>
                        </tr>
                        @endforeach
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection