@extends('backstage.template')

@section('title')
主要消息-管理列表
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/backstage/main-news-list.css')}}">
@endsection

@section('main')
    <main class="news-list">
        <div class="title">
            主要消息 / 管理消息
        </div>

        <!-- 套版用start -->

        <section class="main-news-list">
            <div class="main-news-box">
                <img src="{{asset('img/backstage/banner.jpg')}}" alt="">
                <div class="info-box">
                    <div class="title">
                        <h5>測試用標題</h5><span>2022/10/31 Tue</span>
                    </div>
                    <div class="content">
                        <p class="content-title">首頁內文</p>
                        第18屆「屏東滿州佳樂水國際衝浪嘉年華」將於30日登場，地點就在佳樂水漁村公園。
                        本次特別於24、25日在車城海口港推出免費SUP體驗，
                        比賽期間，除賽事之外，還有市集、草地音樂會、親子DIY與Mini Ramp(公園迷你滑板)，
                        多元的活動，輕鬆熱鬧的氛圍，邀請全民共襄盛舉，融入南台灣最具代表性的衝浪勝地。
                    </div>
                    <div class="content">
                        <p class="content-title">內容頁內文</p>
                        第18屆「屏東滿州佳樂水國際衝浪嘉年華」將於30日登場，地點就在佳樂水漁村公園。
                        本次特別於24、25日在車城海口港推出免費SUP體驗，
                        比賽期間，除賽事之外，還有市集、草地音樂會、親子DIY與Mini Ramp(公園迷你滑板)，
                        多元的活動，輕鬆熱鬧的氛圍，邀請全民共襄盛舉，融入南台灣最具代表性的衝浪勝地。
                        第18屆「屏東滿州佳樂水國際衝浪嘉年華」將於30日登場，地點就在佳樂水漁村公園。
                        本次特別於24、25日在車城海口港推出免費SUP體驗，
                        比賽期間，除賽事之外，還有市集、草地音樂會、親子DIY與Mini Ramp(公園迷你滑板)，
                        多元的活動，輕鬆熱鬧的氛圍，邀請全民共襄盛舉，融入南台灣最具代表性的衝浪勝地。
                        第18屆「屏東滿州佳樂水國際衝浪嘉年華」將於30日登場，地點就在佳樂水漁村公園。
                        本次特別於24、25日在車城海口港推出免費SUP體驗，
                        比賽期間，除賽事之外，還有市集、草地音樂會、親子DIY與Mini Ramp(公園迷你滑板)，
                        多元的活動，輕鬆熱鬧的氛圍，邀請全民共襄盛舉，融入南台灣最具代表性的衝浪勝地。

                    </div>
                </div>
            </div>

            <div class="btnArea">
                <button>編輯</button>
                <button class="deleteBtn">刪除</button>
            </div>
        </section>

        <!-- 套版用end -->

    </main>
@endsection
