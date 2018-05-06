@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Змінити спеціалізацію
            </h1>
        </section>
        <section class="content">
            <div class="box">
                {{Form::open(['route'=> ['specializations.update', $specialization->id], 'method' => 'put'])}}
                <div class="box-header with-border">
                </div>
                @include('admin.errors')
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Назва</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name ="title" placeholder="" value="{{$specialization->title}}">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{route('specializations.index')}}" class="btn btn-default" > Назад</a>
                    <button class="btn btn-warning pull-right">Змінить</button>
                </div>
                {!! Form::close() !!}
            </div>
        </section>
    </div>
    @endsection

