@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Спеціалізації
            </h1>

        </section>
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('specializations.create')}}" class="btn btn-success">Додати</a>
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
                        @foreach($specializations as $specialization)
                            <tr>
                                <td>{{$specialization->id}}</td>
                                <td>{{$specialization->title}}</td>
                                <td><a href="{{route('specializations.edit', $specialization->id)}}" class="fa fa-pencil"></a>
                                    {{Form::open(['route'=>['specializations.destroy', $specialization->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('Ви дійсно хочете видалити цю спеціалізацію?')" type="submit" class="delete">
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
