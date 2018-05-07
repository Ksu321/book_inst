@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Категорії
            </h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('categories.create')}}" class="btn btn-success">Додати</a>
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
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <td><a href="{{route('categories.edit', $category->id)}}" class="fa fa-pencil"></a>
                                    {{Form::open(['route'=>['categories.destroy', $category->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('Ви дійсно хочете видалити цю категорію?')" type="submit" class="delete">
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
        </section>
    </div>

@endsection
