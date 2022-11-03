@extends('frontstage.template')

@section('title')
森五七行館 - 訊 News
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/news.css') }}">
@endsection

@section('main')
    <!-- 訊 -->
    <main id="news">
        <section class="container">
            <!-- 訊-頁面標題 -->
            <div class="title-area">
                <img src="{{ asset('img/news/calligraphy-news.svg') }}" alt="">
                <div class="title-area-infobox">
                    <h5>最新消息 · 活動訊息 · 優惠專案</h5>
                </div>
            </div>

            <div class="news-info-container">
                <!-- 主打最新消息 -->
                <div class="main-news-area">
                    <div class="main-news-img"
                        style="background-image: url({{ $mainnews[0]->img_path }});"></div>
                    <div class="main-news-infobox">
                        <div class="titlebox">
                            <p class="title-date">{{$mainnews[0]->date}}</p>
                            <h2 class="title-words">{{$mainnews[0]->title}}</h2>
                        </div>
                        <div class="info-content">
                            {!!$mainnews[0]->content2!!}
                        </div>
                    </div>
                </div>
                <!-- 一般最新消息 -->
                @foreach ($news as $item)

                <div class="sub-news-area">
                    <div class="sub-news-img"
                        style="background-image: url({{ $item->img_path }});"></div>
                    <div class="sub-news-infobox">
                        <div class="titlebox">
                            <p class="title-date">{{ $item->date }}</p>
                            <h2 class="title-words">{{ $item->title }}</h2>
                        </div>
                        <div class="info-content">
                            {!! $item->content !!}
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </section>
    </main>
@endsection
