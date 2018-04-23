@extends('layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-heading">
                <h3 class="section-heading__heading">Анонси</h3>
            </div>
        </div>
        @foreach($announcements as $announcement)
                        <div class="col-md-4 horizontal-scroll__item_archive">
                            <div class="horizontal-scroll_border">
                                <div class="horizontal-scroll__image">
                                    <img src="{{$announcement->getImage()}}" alt="">
                                </div>
                                <div class="horizontal-scroll__heading">
                                    <h4>{{$announcement->title}}</h4>
                                </div>
                                <div class="horizontal-scroll__date-and-place">
                                    <span class="horizontal-scroll__date">{{$announcement->getDate()}}</span>
                                    <span class="horizontal-scroll__separator">/</span>
                                    <span class="horizontal-scroll__place">{{$announcement->city}}</span>
                                </div>
                                <div class="horizontal-scroll__description">
                                    <p>{{$announcement->description}}</p>
                                </div>
                                <div class="horizontal-scroll__button_archive clearfix">
                                    <a href="#" class="horizontal-scroll__button-more"><span class="glyphicon glyphicon-menu-right"></span></a>
                                </div>

                            </div>
                        </div>

        @endforeach

    </div>

    {{$announcements->links()}}

@endsection