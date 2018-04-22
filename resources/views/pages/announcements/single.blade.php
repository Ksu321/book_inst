@extends('layouts.default')
@section('content')
    <main>
        <div class="container">


        <div>{{$announcement->getImage()}}</div>


            <div>{{$announcement->title}}</div>


            <div>{{$announcement->getCategoryTitle()}}</div> Категория

            <div>{{$announcement->getTagsTitles()}}</div>     Тег

            <div>{{$announcement->city}}</div>

            <div>{{$announcement->getDate()}}</div>

            <div>{{$announcement->date}}</div>

            <div>{{$announcement->content}}</div>


        </div>
    </main>




@endsection