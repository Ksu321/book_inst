
@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Додати спеціалізацію
        </h1>
    </section>
    <section class="content">
        <div class="box">
            {!! Form::open(['route' => 'specializations.store']) !!}
            <div class="box-header with-border">
                @include('admin.errors')
            </div>
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Назва</label>
                        <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="" name="title">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="{{route('specializations.index')}}" class="btn btn-default" > Назад</a>
                <button class="btn btn-success pull-right">Додати</button>
            </div>
        {!! Form::close() !!}
        </div>
    </section>
</div>

@endsection