@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Анонси
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
                        <a href="{{route('announcements.create')}}" class="btn btn-success">Додати</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Назва</th>
                            <th>Категорія</th>
                            <th>Теги</th>
                            <th>Картинка</th>
                            <th>Місто</th>
                            <th>Дія</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($announcements as $announcement)
                        <tr>
                            <td>{{$announcement->id}}</td>
                            <td>{{$announcement->title}}</td>
                            <td>{{$announcement->getCategoryTitle()}}</td>
                            <td>{{$announcement->getTagsTitles()}}</td>
                            <td>
                                <img src="{{$announcement->getImage()}}" alt="" width="100">
                            </td>
                            <td>
                                <a href="{{route('announcements.edit', $announcement->id)}}" class="fa fa-pencil"></a>

                                {{Form::open(['route'=>['announcements.destroy', $announcement->id], 'method'=>'delete'])}}
                                <button onclick="return confirm('Ви дійсно хочете видалити цей анонс?')" type="submit" class="delete">
                                    <i class="fa fa-remove"></i>
                                </button>
                                {{Form::close()}}
                            </td>
                            <td>{{$announcement->city}}</td>
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