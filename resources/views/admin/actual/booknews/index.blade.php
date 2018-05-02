@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Книжкові новини
            </h1>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header">

                </div>
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('booknews.create')}}" class="btn btn-success">Додати</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Назва новини</th>
                            <th>Теги</th>
                            <th>Обкладинка</th>
                            <th>Автор</th>
                            <th>Дія</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bookNews as $aBookNews)
                            <tr>
                                <td>{{$aBookNews->id}}</td>
                                <td>{{$aBookNews->title}}</td>
                            <td>{{$aBookNews->getTagsTitles()}}</td>
                                <td>
                                    <img src="{{$aBookNews->getImage()}}" alt="" width="100">
                                </td>
                                <td>{{$aBookNews->author_book}}</td>
                                <td>
                                    <a href="{{route('booknews.edit', $aBookNews->id)}}" class="fa fa-pencil"></a>
                                    {{Form::open(['route'=>['booknews.destroy', $aBookNews->id], 'method'=>'delete'])}}
                                    <button onclick="return confirm('Ви дійсно хочете видалити цю книжкову новину?')" type="submit" class="delete">
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