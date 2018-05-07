@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>

            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Каталоги</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('catalogs.create')}}" class="btn btn-success">Додати</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Назва</th>
                            <th>Рік</th>
                            <th>Фото</th>
                            <th>Дії</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($catalogs as $catalog)
                        <tr>
                            <td>{{$catalog->id}}</td>
                            <td>{{$catalog->name}}</td>
                            <td>{{$catalog->year}}</td>
                            <td><img src="{{$catalog->getImage()}}" alt="" width="100"></td></td>
                            <td>
                                <a href="{{route('catalogs.edit', $catalog->id)}}" class="fa fa-pencil"></a>

                                {{Form::open(['route'=>['catalogs.destroy', $catalog->id], 'method'=>'delete'])}}
                                <button onclick="return confirm('Ви дійсно хочете видалити цєй каталог?')" type="submit" class="delete">
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
    <!-- /.content-wrapper -->>

@endsection