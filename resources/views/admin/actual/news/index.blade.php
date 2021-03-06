@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Новини

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
                        <a href="{{route('news.create')}}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Категорія</th>
                            <th>Теги</th>
                            <th>Картинка</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $aNews)
                        <tr>
                            <td>{{$aNews->id}}</td>
                            <td>{{$aNews->title}}</td>
                            <td>{{$aNews->getCategoryTitle()}}</td>
                            <td>{{$aNews->getTagsTitles()}}</td>
                            <td>
                                <img src="{{$aNews->getImage()}}" alt="" width="100">
                            </td>
                            <td>
                                <a href="{{route('news.edit', $aNews->id)}}" class="fa fa-pencil"></a>

                                {{Form::open(['route'=>['news.destroy', $aNews->id], 'method'=>'delete'])}}
                                <button onclick="return confirm('Ви дійсно хочете видалити цью новину?')" type="submit" class="delete">
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