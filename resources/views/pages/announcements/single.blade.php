@extends('layouts.default')
@section('content')
    <main>
        <div class="container">






            <div class="single-page__heading container">
                <div>{{$announcement->title}}</div>
            </div>
            <div class="horizontal-scroll__date-and-place">
                <span class="horizontal-scroll__date">{{$announcement->getDate()}}</span>
                <span class="horizontal-scroll__separator">/</span>
                <span class="horizontal-scroll__place">{{$announcement->city}}</span>
            </div>
            <div class="single-page-image">
                <img src="{{$announcement->getImage()}}" alt="" class="container">
            </div>

            {{--<div>{{$announcement->getCategoryTitle()}}</div> Категория--}}

            {{--<div>{{$announcement->getTagsTitles()}}</div>     Тег--}}

            {{--<div>{{$announcement->date}}</div>--}}

            <div class="single-page-content container">
                <div>{!! $announcement->content!!}</div>
            </div>


        {{--</div>--}}
    </main>




@endsection