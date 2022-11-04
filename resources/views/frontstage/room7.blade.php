@extends('frontstage.template')

@section('title')
    森五七行館 - 和風館 room7
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/room7.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('/css/rooms-swiper.css') }}">
@endsection

@section('main')
    <main id="room7">
        <!-- 宿-幻燈片 -->
        <div class="swiper-Area">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <span>#1 _ 和風館 _ 二階大廳</span>
                        <img src="{{ asset('/img/rooms/room7/room7-1-pc@2x.jpg') }}" alt="屏東-恆春民宿-森七和風館-二階大廳">
                    </div>
                    <div class="swiper-slide">
                        <span>#2 _ 和風館 _ 一階大廳</span>
                        <img src="{{ asset('/img/rooms/room7/room7-2-pc@2x.jpg') }}" alt="屏東-恆春民宿-森七和風館-一階大廳">
                    </div>
                    <div class="swiper-slide">
                        <span>#3 _ 和風館 _ 一階和室</span>
                        <img src="{{ asset('/img/rooms/room7/room7-3-pc@2x.jpg') }}" alt="屏東-恆春民宿-森七和風館-一階和室">
                    </div>
                    <div class="swiper-slide">
                        <span>#4 _ 和風館 _ 二階和室</span>
                        <img src="{{ asset('/img/rooms/room7/room7-4-pc@2x.jpg') }}" alt="屏東-恆春民宿-森七和風館-二階和室">
                    </div>
                    <div class="swiper-slide">
                        <span>#5 _ 和風館 _ 二階大廳</span>
                        <img src="{{ asset('/img/rooms/room7/room7-5-pc@2x.jpg') }}" alt="屏東-恆春民宿-森七和風館-二階大廳">
                    </div>
                    <div class="swiper-slide">
                        <span>#6 _ 和風館 _ 一階大廳</span>
                        <img src="{{ asset('/img/rooms/room7/room7-6-pc@2x.jpg') }}" alt="屏東-恆春民宿-森七和風館-一階大廳">
                    </div>
                    <div class="swiper-slide">
                        <span>#7 _ 和風館 _ 浴室</span>
                        <img src="{{ asset('/img/rooms/room7/room7-7-pc@2x.jpg') }}" alt="屏東-恆春民宿-森七和風館-浴室">
                    </div>
                    <div class="swiper-slide">
                        <span>#8 _ 和風館 _ 浴室</span>
                        <img src="{{ asset('/img/rooms/room7/room7-8-pc@2x.jpg') }}" alt="屏東-恆春民宿-森七和風館-浴室">
                    </div>
                    <div class="swiper-slide">
                        <span>#9 _ 中式早餐</span>
                        <img src="{{ asset('/img/rooms/room7/room7-9-pc@2x.jpg') }}" alt="屏東-恆春民宿-森五七行館-中式早餐">
                    </div>
                    <div class="swiper-slide">
                        <span>#10 _ 西式早餐</span>
                        <img src="{{ asset('/img/rooms/room7/room7-10-pc@2x.jpg') }}" alt="屏東-恆春民宿-森五七行館-西式早餐">
                    </div>
                </div>
            </div>
        </div>
        <!-- 點點進度條 -->
        <div class="pagination-box">
            <div class="swiper-pagination"></div>
        </div>

        <!-- 宿-房間資訊 -->
        <div class="r-container">
            <h2>森 7 / 和風館</h2>
            <div class="r-content">
                <!-- 宿-上方平面圖 -->
                <div class="r-pattern">
                    <div class="r-first-floor">
                        <h4>一階</h4>
                        <img src="{{ asset('/img/rooms/room7-1f.svg') }}" alt="屏東-恆春民宿-森七和風館-一樓平面圖">
                    </div>
                    <div class="r-second-floor">
                        <h4>二階</h4>
                        <img src="{{ asset('/img/rooms/room7-2f.svg') }}" alt="屏東-恆春民宿-森七和風館-二樓平面圖">
                    </div>
                </div>
                <!-- 宿-上方資訊 -->
                <div class="r-info-top">
                    <div class="r-info-top-box">
                        <div class="r-info-top-title">價&emsp;&emsp;格</div>
                        <div class="r-info-link-box">
                            <div class="r-info-top-content">
                                <span>平日 12000 / 棟 ，</span>
                                <span>假日、春吶 16000 / 棟</span>
                            </div>
                            <a href="/booking" class="r-info-map-link"><span></span></a>
                        </div>
                    </div>
                    <div class="r-info-top-box">
                        <div class="r-info-top-title">樓&emsp;&emsp;層</div>
                        <div class="r-info-top-content">兩層樓建築</div>
                    </div>
                    <div class="r-info-top-box">
                        <div class="r-info-top-title">空間大小</div>
                        <div class="r-info-top-content">室內坪數約 50 坪、室外 150 坪</div>
                    </div>
                    <div class="r-info-top-box">
                        <div class="r-info-top-title">房間數量</div>
                        <div class="r-info-top-content">2 間 2 人房衛浴位於房內</div>
                    </div>
                    <div class="r-info-top-box">
                        <div class="r-info-top-title">床&emsp;&emsp;型</div>
                        <div class="r-info-top-content">
                            <span>2 張雙人床，可入住 4 人，</span>
                            <span>可加 4 人，最多可入住 8 人</span>
                        </div>
                    </div>
                    <div class="r-info-top-box">
                        <div class="r-info-top-title">衛&emsp;&emsp;浴</div>
                        <div class="r-info-top-content">衛浴 2 間</div>
                    </div>
                    <div class="r-info-top-box">
                        <div class="r-info-top-title">餐&emsp;&emsp;點</div>
                        <div class="r-info-top-content">附贈早餐</div>
                    </div>
                    <div class="r-info-top-box">
                        <div class="r-info-top-title">飲品茶點</div>
                        <div class="r-info-top-content">茶、咖啡、小點心</div>
                    </div>
                </div>
            </div>
            <!-- 宿-下方資訊 -->
            <div class="r-info-bottom">
                <div class="r-info-bottom-box">
                    <div class="r-info-bottom-title">設&emsp;&emsp;備</div>
                    <div class="r-info-bottom-content">
                        <div class="r-bottom-content-box">
                            <span>客廳：</span>
                            <span>景觀花園、B&W環繞音響、50吋液晶電視、雀巢膠囊咖啡機、電熱水壺、冰箱、無線WiFi、化妝室。</span>
                        </div>
                        <div class="r-bottom-content-box">
                            <span>一階：</span>
                            <span>和室榻榻米雙人房、獨立草地庭院、休憩戶外陽台、獨立冷氣、無線WiFi、 淋浴、免治馬桶、插座110V。</span>
                        </div>
                        <div class="r-bottom-content-box">
                            <span>二階：</span>
                            <span>和室榻榻米雙人房、客廳、觀景陽台、獨立冷氣、BOSE環繞音響、無線 WiFi、浴缸、淋浴、免治馬桶、插座110V。</span>
                        </div>
                    </div>
                </div>
                <div class="r-info-bottom-box">
                    <div class="r-info-bottom-title">客房備品</div>
                    <div class="r-info-bottom-content">Bath & Body Work
                        系列沐浴乳、洗髮精、潤髮乳、身體乳、洗手液。<br>牙刷組、刮鬍刀、棉花棒、牙線棒、毛巾、浴巾、吹風機、室內拖鞋。</div>
                </div>
            </div>
        </div>
        <!-- 宿-其他房型 -->
        <div class="r-rooms">
            <a href="/room5" class="r-rooms-shen5">
                <div class="r-rooms-shen-text">
                    <div class="r-rooms-shen-text-top">
                        <span>參考其他房型</span>
                        <span>森5 / 時尚館</span>
                    </div>
                    <div class="r-rooms-shen-text-bottom">
                        <span>本房型為 <b>獨棟別墅</b><br>室內坪數 <b>50</b> 坪，室外約 <b>150</b> 坪</span>
                        <img src="{{ asset('/img/rooms/room5-arrow-white.svg') }}" alt="森5 / 時尚館">
                        <img src="{{ asset('/img/rooms/room5-arrow-black.svg') }}" alt="森5 / 時尚館" class="bottom-img"
                            hidden>
                    </div>
                </div>
            </a>
            <a href="/booking" class="r-rooms-shen7">
                <div class="r-rooms-shen-text bookingArea">
                    <div class="r-rooms-shen-text-top">
                        <span>森 7&emsp;/&emsp;和風館</span>
                        <span>訂&ensp;房&ensp;流&ensp;程&ensp;說&ensp;明</span>
                    </div>
                </div>
            </a>
        </div>

    </main>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('/js/room.js') }}"></script>
@endsection
