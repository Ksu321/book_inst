@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Партнери
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
                        <a href="{{route('partners.create')}}" class="btn btn-success">Додати</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Назва</th>
                            <th>Дія</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($partners as $partner)
                            <tr>
                                <td>{{$partner->id}}</td>
                                <td>{{$partner->name}}</td>
                                <td><a href="{{route('partners.edit', $partner->id)}}" class="fa fa-pencil"></a>
                                    {{Form::open(['route'=>['partners.destroy', $partner->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('Ви дійсно хочете видалити цього партнєра?')" type="submit" class="delete">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                {{Form::close()}}
                            </tr>
                        @endforeach
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection