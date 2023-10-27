@extends('layouts.app')


@section('meta')
<title>ActiveTaxi</title>
@endsection

@section('content')

<!-- connection_chapter Подключение -->

<div class="connection_chapter" id="home">
    <div class="container">
        <div class="connection_chapter_block">
            <div class="connection_chapter_block_content">
                <div class="connection_chapter_title1">
                    <h1 class="connection_chapter_title_text">{{ __('app.header_title1') }}</h1>
                    <h1 class="connection_chapter_title_text">{{ __('app.online_connection') }}</h1>
                </div>
                <div class="connection_chapter_title2">
                    <p>{{ __('app.instant_payments') }}</p>
                    <p>{{ __('app.instant_payments1') }}</p>
                    <p>{{ __('app.instant_payments2') }}</p>
                </div>
                <div class="connection_chapter_block_content_link">
                    <a href="https://play.google.com/store/apps/details?id=ru.yandex.taximeter&hl=ru"> <img src="{{ asset('images/static_img/google-play.png') }}" alt="" class="photo_gmail"></a>
                    <a href="https://apps.apple.com/ru/app/%D1%8F%D0%BD%D0%B4%D0%B5%D0%BA%D1%81-%D0%BF%D1%80%D0%BE-%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D0%B8-%D0%B8-%D0%BA%D1%83%D1%80%D1%8C%D0%B5%D1%80%D1%8B/id1496904594"> <img src="{{ asset('images/static_img/appl-store.png') }}" alt="" class="photo_gmail"></a>
                    <img src="{{ asset('images/static_img/yandex.png.png') }}" alt="" class="photo_go  photo_gmail">
                </div>
            </div>
            <div class="connection_chapter_big_photo  ">
                <img src="{{ asset('images/static_img/connection_chapter_big.png')}}" alt="" class="pone_chapter">

            </div>
        </div>
    </div>
</div>

<!-- connection_chapter Подключение END -->

<!-- Information about the company -->

<div class="information_about" id="about">
    <div class="container   container1">
        <div class="about_title">
            <h5>{{ __('app.about_title2') }}</h5>
        </div>
        <div class="about_block">
            <div class="about_content">
                <h3 class="about_content_text">
                   {{ __('app.welcome_to') }}<span> {{ __('app.active_taxi1') }}</span> 
                    {{ __('app.our_mission') }}<br><br>
                    • <span>{{ __('app.active_taxi2') }}</span>{{ __('app.is_official') }}<br> <br>
                </h3>
                <h3 class="about_content_text   about_content_text1">
                     {{ __('app.choosing_taxi') }}<span>{{ __('app.active_taxi3') }}</span> {{ __('app.enjoy') }}
                </h3>
                </h3>
            </div>
            <div class="about_photo">
                <img src="{{ asset('images/static_img/about_albom.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>


<!-- About END -->



<!--  nstant payments to cards  any bank -->

<div class="payments">
    <div class="payments_block">
        <div class="payments_left_photo">
            <img src="{{ asset('images/static_img/div.block.png') }}" alt="" class="payments_left_photo1">
        </div>
        <!-- <div class="payments_content_blok"></div> -->
        <div class="payments_content">
            <h1 class="payments_content_title">{{ __('app.instant') }}</h1>
            <h1 class="payments_content_title">{{ __('app.any_bank') }}</h1>
            <div class="payments_content_title_text  content_text">
                <h3 class="payments_content_title_text1">{{ __('app.simply') }}</h3>
                <p>{{ __('app.for_drivers') }}</p>
                <p>{{ __('app.wait_receipt') }}</p>
            </div>
            <div class="payments_content_title_text">
                <h3 class="payments_content_title_text1">{{ __('app.quickly') }}</h3>
                <p>{{ __('app.our_drivers') }}</p>
            </div>
            <div class="payments_content_title_text   content_text3">
                <h3 class="payments_content_title_text1">{{ __('app.available') }}</h3>
                <p>{{ __('app.working') }}</p>
            </div>
        </div>

        <div class="payments_right_photo">
            <img src="{{ asset('images/static_img/Vector.png') }}" alt="" class="time">
            <img src="{{ asset('images/static_img/bacround_radius.png') }}" alt="" class="raidus">
        </div>
    </div>
</div>

<!--  nstant payments to cards  any bank END -->


<!-- Tарифы Таксопарка -->

<div class="rates" id="tarif">
    <div class="ratest_block">
        <div class="rates_title">
            <h1>{{ __('app.rates3') }}</h1>
        </div>
        <div class="rates_container">
            <div class="rates_card">
                <div class="rates_card_content">
                    <h1 class="rates_card_content_title">{{ __('app.optimal') }}</h1>
                    <div class="rates_card_content_text">
                        <p>{{ __('app.comfortable') }}</p>
                        <p>{{ __('app.beginning_cooperation') }}</p>
                    </div>
                    <div class="rates_card_content_percent">
                        <h1 class="rates_card_content_percent_text">{{ __('app.percent') }}</h1>
                        <p>{{ __('app.from_order') }}</p>
                    </div>
                </div>
                <div class="bank_commissions">
                    <div class="btn">
                        <a href="#" class="bank_commissions_blug">{{ __('app.connect_tariff') }}</a>
                    </div>
                    <h3 class="bank_commissions_text">{{ __('app.bank_fees') }}</h3>
                    <div class="bank_commissions_text1">
                        <h1>{{ __('app.min_sum') }}</h1>
                        <p>{{ __('app.card_bank') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tariff_plans_block">
            <h1 class="tariff_plans_block_title">{{ __('app.tariff_plans') }}</h1>
            <div class="tariff_plans_block_title_icon">
                <img src="{{ asset('images/static_img/icon_kashelok.png') }}" alt="" class="icon_kashelok">
                <div class="tariff_plans_block_title_icon_text">
                    <h5>{{ __('app.payments_hours') }}</h5>
                    <h5>{{ __('app.card_bank2') }}</h5>
                </div>
            </div>
            <div class="tariff_plans_block_title_icon  tariff_plans_block_title_icon2 ">
                <img src="{{ asset('images/static_img/SVG.png') }}" alt="" class="icon_kashelok">
                <div class="tariff_plans_block_title_icon_text">
                    <h5>{{ __('app.technical') }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tарифы Таксопарка END-->


<!-- Invitation  frend Приглашение Друга  -->


<div class="invitation">
    <!-- <div class="container"> -->
    <div class="invitation_block">
        <div class="invitation_content1">
            <div class="invitation_content">
                <div class="invitation_content_title">
                    <h1>{{ __('app.connect_friend') }}</h1>
                    <h1 class="invitation_content_title_span">{{ __('app.for_him') }}<span>{{ __('app.number2') }}</span> </h1>
                </div>
                <div class="invitation_content_text">
                    <p>{{ __('app.invite_friend') }}</p>
                    <p>{{ __('app.reward') }}</p>
                </div>
                <div class="invitation_content_number">
                    <div class="invitation_content_number_text">
                        <p>{{ __('app.please_contact') }}</p>
                        <p class="phone1">{{ __('app.manager') }}</p>
                        <a href="#">{{ __('app.number3') }}</a>
                    </div>
                    <div class="invitation_content_number_phone">
                        <img src="{{ asset('images/static_img/block-4-icon.svg.png') }}" alt="" class="phone">
                    </div>
                </div>
            </div>
        </div>
        <div class="invitation_card_big_1">
            <div class="invitation_card_big">
                <div class="invitation_card">
                    <div class="invitation_card_icon  icon_card">
                        <div class="invitation_card_icon_photo">
                            <img src="{{ asset('images/static_img/priglasit3.png') }}" alt="" class="invitation_card_icon1">
                        </div>
                        <div class="invitation_card_content">
                            <div class="invitation_card_content_text">
                                <h4 class="invitation_card_content_title">{{ __('app.rustam') }}</h4>
                                <div class="invitation_card_content_text2">
                                    <h1>{{ __('app.number4') }}</h1>
                                    <p>{{ __('app.carta') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invitation_card_content_block icon_card1">
                        <div class="invitation_card_icon ">
                            <div class="invitation_card_icon_photo">
                                <img src="{{ asset('images/static_img/priglasit2.png') }}" alt="" class="invitation_card_icon1">
                            </div>
                            <div class="invitation_card_content">
                                <div class="invitation_card_content_text">
                                    <h4 class="invitation_card_content_title">{{ __('app.davron') }}</h4>
                                    <div class="invitation_card_content_text2">
                                        <h1>{{ __('app.number5') }}</h1>
                                        <p>{{ __('app.carta2') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invitation_card_content_block">
                        <div class="invitation_card_icon ">
                            <div class="invitation_card_icon_photo">
                                <img src="{{ asset('images/static_img/block-4-img-1.svg.png') }}" alt="" class="invitation_card_icon1 invitation_card_content_block3 ">
                            </div>
                            <div class="invitation_card_content">
                                <div class="invitation_card_content_text">
                                    <h4 class="invitation_card_content_title">{{ __('app.akmal') }}</h4>
                                    <div class="invitation_card_content_text2">
                                        <h1>{{ __('app.number6') }}</h1>
                                        <p>{{ __('app.carta3') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Invitation  frend Приглашение Друга  END -->

<!-- Яндекс заправка// Yandex zapavka //  Gas station-->

<div class="gas_station" id="referens">
    <div class="gas_station_block_big">
        <div class="gas_station_block">
            <div class="gas_station_block_content">
                <div class="gas_station_block_content_text">
                    <h1>{{ __('app.earn_money') }}</h1>
                </div>
                <div class="gas_station_block_content_text2">
                    <p>{{ __('app.largest_partner') }}</p>
                </div>
            </div>
            <div class="gas_station_block_photo">
                <img src="{{ asset('images/static_img/Big_photo_taxi.png') }}" alt="" class="gas_station_block_photo_big  photo_block1">
            </div>
        </div>
        <div class="gas_station_block">
            <div class="gas_station_block_content">
                <div class="gas_station_block_content_text">
                    <img src="{{ asset('images/static_img/Yandex_zapravka.png') }}" alt="" class="yandex_gas">
                </div>
                <div class="gas_station_block_content_text2">
                    <p>{{ __('app.pay_gasoline') }}</p>
                    <!-- <p>партнером Яндекс.Про, Вы никогда не останетесь без заказа!</p> -->
                </div>
                <div class="gas_station_block_content_comision  gas_station_block_content_comision1">
                    <img src="{{ asset('images/static_img/galochka.png') }}" alt="">
                    <p>{{ __('app.driver_refueling') }}</p>
                </div>
                <div class="gas_station_block_content_comision">
                    <img src="{{ asset('images/static_img/galochka.png') }}" alt="">
                    <p>{{ __('app.refuel_comfortably') }}</p>
                </div>
            </div>
            <div class="gas_station_block_photo  gas_station_block_photo2">
                <img src="{{ asset('images/static_img/Big_photo_taxi2.png') }}" alt="" class="gas_station_block_photo_big2">
            </div>
        </div>
    </div>
</div>


<!-- Интернет платформы -->

<div class="instagram_news">
    <div class="instagram_news_block">
        <div class="instagram_news_content">
            <h3>{{ __('app.news_instagram') }}</h3>
        </div>
        <div class="instagram_news_btn">
            <a href="https://instagram.com/active_yandexgo?igshid=MWZjMTM2ODFkZg==">
                <img src="{{ asset('images/static_img/istagram.png') }}" alt="" class="instagram_news_btn_instagram">
                <h4>{{ __('app.wanch') }}</h4>
            </a>
        </div>
    </div>
</div>


<!-- Интернет платформы   END -->

<!-- NEW -->

<!-- News -->
<div class="container" id="news">
    <h1 class="news_title">{{ __('app.news3') }}</h1>
</div>
<div class="hello">
    <div class="container  container2">
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="news_card-wrapper swiper-wrapper">
                    <a href="news_dtl.html" class="news_card swiper-slide">
                        <div class="image-content">
                            <!-- <span class="overlay_news"></span> -->

                            <div class="news_card-image">
                                <img src="{{ asset('images/static_img/news_card.jpg') }}" alt="" class="news_card-img" >
                            </div>
                        </div>

                        <div class="news_card-content">
                            <h5 class="name">{{ __('app.location') }}</h5>
                            <p class="description">
                           {{ __('app.news_card') }} </p>

                            <!-- <button class="button">View More</button> -->
                        </div>
                    </a>

                    @foreach($news as $news)

                <a href="{{ route('news_user.show', ['locale' => app()->getLocale(), 'news_name' => $news->slug]) }}" class="news_card swiper-slide">
                    <div class="image-content">
                        <!-- <span class="overlay_news"></span> -->

                        <div class="news_card-image">
                            <img src="{{ asset($news->image_path) }}" alt="" class="news_card-img">
                        </div>
                    </div>

                    <div class="news_card-content">
                        <h5 class="name">{{ $news->{'name_' . app()->getLocale()}  }}</h5>
                        <p class="position">{{ Illuminate\Support\Str::limit(strip_tags($news->{'description_' . app()->getLocale()}), 50) }}
                        </p>
                      
                        <!-- <button class="button">View {{ __('app.more') }}</button> -->
                    </div>
                </a>
                @endforeach
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"><img src="{{ asset('images/static_img/new_slider_icon2.png') }}" alt="" class="swiper-navBtn   new_img"></div>
            <div class="swiper-button-prev swiper-navBtn"><img src="{{ asset('images/static_img/new_slider_icon1.png') }}" alt="" class="swiper-navBtn   new_img"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js" type="text/javascript"></script>
<script src="{{ asset('js/slayder_news.js') }}" type="text/javascript"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('js/scripts.js') }}" ></script>
<script src="{{ asset('js/navbar.js') }}" ></script>
<!-- <script src="{{ asset('js/send_telegram.js') }}" ></script> -->
<!-- NEW END -->

@endsection