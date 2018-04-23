@extends('layouts.default')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading">
                    <h3 class="section-heading__heading">новини</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row horizontal-scroll">
                        @foreach($news as $new)
                        <div class="col-md-4 horizontal-scroll__item">
                            <div class="horizontal-scroll_border">
                                <div class="horizontal-scroll__image">
                                    <img src="{{$new->getImage()}}" alt="">
                                </div>
                                <div class="horizontal-scroll__heading">
                                    <h4>{{$new->title}}</h4>
                                </div>
                                <div class="horizontal-scroll__date-and-place">
                                    <span class="horizontal-scroll__date">{{$new->getDate()}}</span>
                                    <span class="horizontal-scroll__separator">/</span>
                                    <span class="horizontal-scroll__place">{{$new->city}}</span>
                                </div>
                                <div class="horizontal-scroll__description">
                                    <p>{{$new->description}}</p>
                                </div>
                                <div class="horizontal-scroll__button clearfix">
                                    <a href="#" class="horizontal-scroll__button-more"><span class="glyphicon glyphicon-menu-right"></span></a>
                                </div>
                            </div>

                        </div>
                        @endforeach

                    </div>
                    <div class="row section-button">
                        <div class="col-md-3 col-md-offset-9">
                            <a href="{{route('announcement.archive')}}" class="section-button__all">всі новини</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading">
                    <h3 class="section-heading__heading">анонси</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row horizontal-scroll">
                        @foreach($announcements as $announcement)
                        <div class="col-md-4 horizontal-scroll__item">
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
                                <div class="horizontal-scroll__button clearfix">
                                    <a href="{{route('announcement.single', $announcement->slug)}}" class="horizontal-scroll__button-more"><span class="glyphicon glyphicon-menu-right"></span></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row section-button">
                        <div class="col-xs-12 col-xs-offset-0 col-md-3 col-md-offset-9">
                            <a href="{{route('announcement.archive')}}" class="section-button__all">всі анонси</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading">
                    <h3 class="section-heading__heading">книжкові новинки</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row vertical-scroll">
                        <div class="col-md-12 vertical-scroll__item">
                            <div class="row">
                                <div class="col-md-2 vertical-scroll__image-container">
                                    <div class="vertical-scroll__image">
                                        <img src="https://book-institute.org.ua/wp-content/themes/twentyseventeen/img/news/13189_l.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-10 vertical-scroll__text-container">
                                    <div class="vertical-scroll__heading">
                                        <h4>Маргарет Етвуд «Оповідь служниці»</h4>
                                    </div>
                                    <div class="vertical-scroll__description">
                                        <p>Недалеке майбутнє, на колишній території США знаходиться нова тоталітарна держава-Республіка Гілеад. Тут gравами наділені лише Командори та їхні Дружини. Останні мають право обирати для своїх чоловіків коханок, які після проходження спеціального курсу підготовки нарджують дітей...</p>
                                        <p>Ця страхітлива антиутопія - бестселлер New York Times.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 vertical-scroll__item">
                            <div class="row">
                                <div class="col-md-2 vertical-scroll__image-container">
                                    <div class="vertical-scroll__image">
                                        <img src="https://book-institute.org.ua/wp-content/themes/twentyseventeen/img/news/ruine.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-10 vertical-scroll__text-container">
                                    <div class="vertical-scroll__heading">
                                        <h4>Маргарет Етвуд «Оповідь служниці»</h4>
                                    </div>
                                    <div class="vertical-scroll__description">
                                        <p>Недалеке майбутнє, на колишній території США знаходиться нова тоталітарна держава-Республіка Гілеад. Тут gравами наділені лише Командори та їхні Дружини. Останні мають право обирати для своїх чоловіків коханок, які після проходження спеціального курсу підготовки нарджують дітей...</p>
                                        <p>Ця страхітлива антиутопія - бестселлер New York Times.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 vertical-scroll__item">
                            <div class="row">
                                <div class="col-md-2 vertical-scroll__image-container">
                                    <div class="vertical-scroll__image">
                                        <img src="https://book-institute.org.ua/wp-content/themes/twentyseventeen/img/news/13189_l.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-10 vertical-scroll__text-container">
                                    <div class="vertical-scroll__heading">
                                        <h4>Маргарет Етвуд «Оповідь служниці»</h4>
                                    </div>
                                    <div class="vertical-scroll__description">
                                        <p>Недалеке майбутнє, на колишній території США знаходиться нова тоталітарна держава-Республіка Гілеад. Тут gравами наділені лише Командори та їхні Дружини. Останні мають право обирати для своїх чоловіків коханок, які після проходження спеціального курсу підготовки нарджують дітей...</p>
                                        <p>Ця страхітлива антиутопія - бестселлер New York Times.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 vertical-scroll__item">
                            <div class="row">
                                <div class="col-md-2 vertical-scroll__image-container">
                                    <div class="vertical-scroll__image">
                                        <img src="https://book-institute.org.ua/wp-content/themes/twentyseventeen/img/news/ruine.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-10 vertical-scroll__text-container">
                                    <div class="vertical-scroll__heading">
                                        <h4>Маргарет Етвуд «Оповідь служниці»</h4>
                                    </div>
                                    <div class="vertical-scroll__description">
                                        <p>Недалеке майбутнє, на колишній території США знаходиться нова тоталітарна держава-Республіка Гілеад. Тут gравами наділені лише Командори та їхні Дружини. Останні мають право обирати для своїх чоловіків коханок, які після проходження спеціального курсу підготовки нарджують дітей...</p>
                                        <p>Ця страхітлива антиутопія - бестселлер New York Times.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row section-button_eight-column">
                        <div class="col-md-12">
                            <a href="#" class="section-button_eight-column__all">всі анонси</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 banner">
                    <div class="banner__item">
                        <h4>Цифрова бібліотека</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading">
                    <h3 class="section-heading__heading">партнери</h3>
                </div>
            </div>
            @foreach($partners as $partner)
            <div class="row">
                <div class="col-md-12 partners-slider">
                    <div class="partners-slider__item">
                        <a href="{{$partner->link}}" class="partners-slider__item-link">
                            <img src="{{$partner->getImage()}}" alt="Tyzhden" class="partners-slider__image">
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </main>
@endsection
