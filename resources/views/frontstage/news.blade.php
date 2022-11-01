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
                    <h5>​最新消息 · 活動訊息 · 優惠專案</h5>
                </div>
            </div>

            <div class="news-info-container">
                <!-- 主打最新消息 -->
                <div class="main-news-area">
                    <div class="main-news-img"
                        style="background-image: url({{ asset('img/news/index-news-cover.jpg') }});"></div>
                    <div class="main-news-infobox">
                        <div class="titlebox">
                            <p class="title-date">2022.10.12 Tue</p>
                            <h2 class="title-words">2023農曆春節訂房專案</h2>
                        </div>
                        <div class="info-content">
                            <p>
                                這個時候相信大家已經在安排春節去哪玩了!<br>
                                <br>
                                2022/11/1 上午09:00開放官網線上訂房<br>
                                2022年11月1號官網開放預定2023農曆春節訂房，請依人數選擇房型，<br>
                                <br>
                                因春節旅客較多，現場無法加人。敬請配合!!!<br>
                                <br>
                                過年訂房注意事項:
                                <br>
                            <ol>
                                <li>2022年11月1號 上午九點,官網線上訂房開放! 不接受電話預訂!</li>
                                <li>為維護住宿品質，民宿不提供加床或是加人。</li>
                                <li>如不符訂房人數入住，民宿將拒絕入住，並不退還費用。</li>
                                <li>過年期間訂房,如非因天災不可抗力之原因取消訂房，恕不辦理退費，敬請見諒。</li>
                                <li>春節期間住客如有延遲退房需求，得預先告知民宿並徵求櫃檯同意後始得延退；每超過 1小時，每房加收NT$1,500元。</li>
                                <li>過年期間訂房需於三日內全額付款，收到匯款為完成訂房程序。</li>
                                <li>請勿攜帶任何寵物入住及本館全面禁菸，園區全面禁止開火烹煮食物。</li>
                                <li>訂房前請先詳閱以免造成雙方不必要的困擾喔。</li>
                                <li>上述內容民宿保有最後更改之權利。</li>
                                <li>詳細情形，歡迎撥打民宿專線03-8870203如有任何疑問，也歡迎來電洽詢。</li>
                                <li>覺得不合理請勿勉強訂房，謝謝配合。</li>
                            </ol>
                            <br>
                            洽詢專線 03-8870203
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 一般最新消息 -->
                <div class="sub-news-area">
                    <div class="sub-news-img"
                        style="background-image: url({{ asset('img/news/index-news-cover.jpg') }});"></div>
                    <div class="sub-news-infobox">
                        <div class="titlebox">
                            <p class="title-date">2022.10.12 Tue</p>
                            <h2 class="title-words">一泊二食</h2>
                        </div>
                        <div class="info-content">
                            <p>
                                一泊二食專案<br>
                                即日起至 線上訂房系統 線上訂房，即可預定晚餐(客房依規定人數預定)<br>
                                <br>
                                專案內容：<br>
                            <ol>
                                <li>客房住宿一晚。</li>
                                <li>早餐一客。</li>
                                <li>晚餐一客(需自行前往老家後山菜)。</li>
                                <li>菜色以餐廳安排為主，無法更換菜色,冷盤會依季節調整。</li>
                                <li>素食者需另外加點菜色，或者用餐人需全部素食，無法提供一人素食一人葷食套餐。</li>
                            </ol>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="sub-news-area">
                    <div class="sub-news-img"
                        style="background-image: url({{ asset('img/news/index-news-cover.jpg') }});"></div>
                    <div class="sub-news-infobox">
                        <div class="titlebox">
                            <p class="title-date">2022.10.12 Tue</p>
                            <h2 class="title-words">一泊二食</h2>
                        </div>
                        <div class="info-content">
                            <p>
                                一泊二食專案<br>
                                即日起至 線上訂房系統 線上訂房，即可預定晚餐(客房依規定人數預定)<br>
                                <br>
                                專案內容：<br>
                            <ol>
                                <li>客房住宿一晚。</li>
                                <li>早餐一客。</li>
                                <li>晚餐一客(需自行前往老家後山菜)。</li>
                                <li>菜色以餐廳安排為主，無法更換菜色,冷盤會依季節調整。</li>
                                <li>素食者需另外加點菜色，或者用餐人需全部素食，無法提供一人素食一人葷食套餐。</li>
                            </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
