@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Письменники
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('authors.create')}}" class="btn btn-success">Додати</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Імʼя/псевдонім</th>
                            <th>Видані книжки</th>
                            <th>Видавництва</th>
                            <th>Фото</th>
                            <th>Дії</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($authors as $author)
                        <tr>
                            <td>{{$author->id}}</td>
                            <td>{{$author->name}}</td>
                            <td>{{$author->getBookNewsTitles()}}</td>
                            <td>{{$author->getPublishingsTitles()}}</td>
                            <td><img src="{{$author->getImage()}}" alt="" width="100"></td></td>
                            <td>
                                <a href="{{route('authors.edit', $author->id)}}" class="fa fa-pencil"></a>
                                {{Form::open(['route'=>['authors.destroy', $author->id], 'method'=>'delete'])}}
                                <button onclick="return confirm('Ви дійсно хочете видалити цього автора?')" type="submit" class="delete">
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