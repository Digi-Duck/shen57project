<!-- 頁首 -->
<header>
    <div id="header-nav">
        <!-- 頁首-logo -->
        <div class="header-logo">
            <a href="/home"><img src="{{ asset('/img/header/header-logo.svg') }}" alt="屏東-恆春民宿-森五七行館"></a>
        </div>
        <!-- 頁首-菜單 -->
        <div class="header-menu">
            <ul>
                <a href="/news">
                    <li @if (Route::is('news')) class="showline" @endif)>訊 News</li>
                </a>
                <button type="button" class="rooms-boxbtn" onclick="openrooms()">
                    <li @if (Route::is('room')) class="showline" @endif)>宿 Rooms</li>
                </button>
                <a href="/booking">
                    <li @if (Route::is('booking')) class="showline" @endif)>訂 Booking</li>
                </a>
                <a href="/story">
                    <li @if (Route::is('story')) class="showline" @endif)>源 Story</li>
                </a>
                <a href="/location">
                    <li @if (Route::is('location')) class="showline" @endif)>行 Location</li>
                </a>
            </ul>
        </div>

        <!-- 頁首-隱藏盒子 -->
        <div class="header-ham">
            <div class="header-dark-btn"></div>
            <div class="header-ham-btn">
                <!-- hambox -->
                <div id="header-hambox">
                    <div class="hambox-menu">
                        <!-- hambox-logo -->
                        <div class="hambox-logobox">
                            <a href="/home"><img src="{{ asset('/img/header/header-hamlogo.svg') }}"
                                    class="hambox-logo" alt="屏東-恆春民宿-森五七行館"></a>
                            <div class="hambox-btn"></div>
                        </div>
                        <div class="hambox-infobox">
                            <!-- hambox-shen57資訊 -->
                            <div class="hambox-info">
                                <!-- hambox-nav -->
                                <div class="hambox-info-left">
                                    <ul>
                                        <a href="/news">
                                            <li>訊 News<span>˙</span></li>
                                        </a>
                                        <a onclick="openrooms()">
                                            <li>宿 Rooms<span>˙</span></li>
                                        </a>
                                        <a href="/booking">
                                            <li>訂 Booking<span>˙</span></li>
                                        </a>
                                        <a href="/story">
                                            <li>源 Story<span>˙</span></li>
                                        </a>
                                        <a href="/location">
                                            <li>行 Location<span>˙</span></li>
                                        </a>
                                    </ul>
                                </div>
                                <!-- hambox-關於 -->
                                <div class="hambox-info-right">
                                    <div class="info-right-about">
                                        <div class="info-right-community">
                                            <p>關於&emsp;森˙五七行館</p>
                                            <div class="community-img">
                                                <!-- LINE-QRcode按鈕 -->
                                                <button type="button" class="community-line qrcode-open"
                                                    onclick="openwindow()"><img
                                                        src="{{ asset('/img/header/line.svg') }}"
                                                        alt="屏東-恆春民宿-森五七行館-line"></button>
                                                <a href="https://www.instagram.com/shen57hostel/" target="_blank"><img
                                                        src="{{ asset('/img/header/instagram.svg') }}"
                                                        alt="屏東-恆春民宿-森五七行館-instagram"></a>
                                                <a href="https://www.facebook.com/shen57hostel2016" target="_blank"><img
                                                        src="{{ asset('/img/header/facebook.svg') }}"
                                                        alt="屏東-恆春民宿-森五七行館-facebook"></a>
                                            </div>
                                        </div>
                                        <div class="info-right-box">
                                            <div class="info-right-title">行館地址</div>
                                            <div class="info-right-content">946 屏東縣恆春鎮大光里砂尾路68-2號</div>
                                        </div>
                                        <div class="info-right-box">
                                            <div class="info-right-title">聯絡電話</div>
                                            <div class="info-right-content">(08) 886-7658 / 0961-333-857</div>
                                        </div>
                                        <div class="info-right-box">
                                            <div class="info-right-title">電子信箱</div>
                                            <div class="info-right-content">shen57hostel@gmail.com</div>
                                        </div>
                                        <div class="info-right-box">
                                            <div class="info-right-title">訂房時段</div>
                                            <div class="info-right-content">每日 09 : 00 am ~ 09 : 00 pm</div>
                                        </div>
                                        <div class="info-right-box">
                                            <div class="info-right-title">服&emsp;&emsp;務</div>
                                            <div class="info-right-content">
                                                <span>提供優惠汽機車租賃、包車旅遊導覽服務資訊。</span>
                                                <span>提供旅遊資訊及諮詢服務。</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- hambox-shen57房型 -->
                            {{-- <div class="hambox-rooms">
                                <div class="hambox-bottom-rooms">
                                    <a href="room5" class="hambox-rooms-shen5">
                                        <div class="hambox-shen-text">
                                            <div class="hambox-shen-text-top">
                                                <span class="text-hidden">參考房型</span>
                                                <span class="text-move-left">森5 / 時尚館</span>
                                            </div>
                                            <div class="hambox-shen-text-bottom">
                                                <span class="text-hidden">本房型為 <b>獨棟別墅</b> <br>室內坪數 <b>50</b> 坪，室外約
                                                    <b>150</b> 坪</span>
                                                <div class="hambox-shen-left-arrow"></div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="room7" class="hambox-rooms-shen7">
                                        <div class="hambox-shen-text">
                                            <div class="hambox-shen-text-top">
                                                <span class="text-hidden">參考房型</span>
                                                <span class="text-move-right">森7 / 和風館</span>
                                            </div>
                                            <div class="hambox-shen-text-bottom">
                                                <span class="text-hidden">本房型為 <b>獨棟別墅</b> <br>室內坪數 <b>50</b> 坪，室外約
                                                    <b>150</b> 坪</span>
                                                <div class="hambox-shen-right-arrow"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 頁首-宿 -->
    <div id="rooms-box" class="show-roomsdialog">
        <div class="rooms-menu">
            <div class="rooms-info">
                <div class="rooms-info-box">
                    <img src="{{ asset('/img/header/rooms.svg') }}" alt="">
                    <div class="rooms-info-text">
                        <p>
                            <span>將手輕輕撫在耳邊，聆聽貝殼捎來的私密話語，溫暖的白砂，調皮地搔弄我的腳底，</span>
                            <span>而陣陣的海風 rooms，引領我前往那名為「無期而遇」的美好。</span>
                        </p>
                        <p>在這熱情的墾丁，所有的平行線開始交會，儼然成了故事的下一篇章。</p>
                    </div>
                </div>
                <div class="rooms-box-btn" onclick="closerooms()"></div>
            </div>

            <!-- 宿-shen57房型 -->
            <div class="roomsbox-rooms">
                <div class="roomsbox-bottom-rooms">
                    <a href="/room5" class="roomsbox-rooms-shen5">
                        <div class="roomsbox-shen-text">
                            <div class="roomsbox-shen-text-top">
                                <span class="text-hidden">參考房型</span>
                                <span class="text-move-left">森5 / 時尚館</span>
                            </div>
                            <div class="roomsbox-shen-text-bottom">
                                <span class="text-hidden">本房型為 <b>獨棟別墅</b> <br>室內坪數 <b>50</b> 坪，室外約 <b>150</b> 坪</span>
                                <div>
                                    <div class="roomsbox-shen-left-arrow"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/room7" class="roomsbox-rooms-shen7">
                        <div class="roomsbox-shen-text">
                            <div class="roomsbox-shen-text-top">
                                <span class="text-hidden">參考房型</span>
                                <span class="text-move-right">森7 / 和風館</span>
                            </div>
                            <div class="roomsbox-shen-text-bottom">
                                <span class="text-hidden">本房型為 <b>獨棟別墅</b> <br>室內坪數 <b>50</b> 坪，室外約 <b>150</b> 坪</span>
                                <div class="roomsbox-shen-right-arrow"></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
