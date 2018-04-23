@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Користувачі
            </h1>

        </section>
        <section class="content">
            <div class="box">
                <div class="box-header">
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('users.create')}}" class="btn btn-success">Додати</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ім'я</th>
                            <th>E-mail</th>
                            <th>Аватар</th>
                            <th>Дія</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <img src="{{$user->getImage()}}" alt="" class="img-responsive" width="150">
                            </td>
                            <td><a href="{{route('users.edit', $user->id)}}" class="fa fa-pencil"></a>
                                {{Form::open(['route'=>['users.destroy', $user->id], 'method'=>'delete'])}}
                                <button onclick="return confirm('Ви дійсно хочете видалити цього юзера?')" type="submit" class="delete">
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