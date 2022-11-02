@extends('backstage.template')

@section('title')
一般消息-管理列表
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('css/backstage/news-list.css')}}">
@endsection

@section('main')
    <main class="news-list">
        <div class="title">
            一般消息 / 管理列表
        </div>
        <!-- 套版用start -->
        @foreach ($newslist as $item)

        <section class="main-news-list">
            <div class="main-news-box">
                <img src="{{$item->img_path}}" alt="">
                <div class="info-box">
                    <div class="title">
                        <h5>{{$item->title}}</h5><span>{{$item->date}}</span>
                    </div>
                    <div class="content">
                        {{$item->content}}
                    </div>
                </div>
            </div>

            <div class="btnArea">
                <a href="/main-news-edit/{{$item->id}}" class="editBtn">編輯</a>
                <a href="/main-news-del/{{$item->id}}" class="deleteBtn">刪除</a>
                {{-- route帶變數{id} --}}
            </div>
        </section>

        @endforeach
        <!-- 套版用end -->


    </main>
@endsection
