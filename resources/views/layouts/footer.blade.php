
    <!-- /* Registration // Регистрация    */ -->
    
    <div class="invitation" id="registration">
        <!-- <div class="container"> -->
        <div class="invitation_block  invitation_block2">
            <div class="invitation_content1  invitation_content2">
                <div class="invitation_content  invitation_content2">
                    <div class="invitation_content_title">
                        <h1>{{ __('app.installer1') }}</h1>
                    </div>
                    <div class="invitation_content_text   invitation_content_text2">
                        <p>{{ __('app.registration_mony') }}</p>
                        <p>{{ __('app.and') }}<a href=""> Telegram bot </a>{{ __('app.expectations') }}</p>
                    </div>
                    <div class="invitation_content_number  invitation_content_number2">
                        <div class="invitation_content_number_text">
                            <p class="invitation_content_number_text1">{{ __('app.download') }}</p>
                        </div>
                        <div class="invitation_content_number_phone  invitation_content_number_phone1 ">
                            <a href="https://apps.apple.com/ru/app/%D1%8F%D0%BD%D0%B4%D0%B5%D0%BA%D1%81-%D0%BF%D1%80%D0%BE-%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D0%B8-%D0%B8-%D0%BA%D1%83%D1%80%D1%8C%D0%B5%D1%80%D1%8B/id1496904594">
                                <img src="{{ asset('images/static_img/appl-store.png') }}" alt="" class="phone">  </a>
                                
                            <a href="https://play.google.com/store/apps/details?id=ru.yandex.taximeter&hl=ru">
                            <img src="{{ asset('images/static_img/google-play.png') }}" alt="" class="phone">    </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="invitation_card_big_1  invitation_card_big_2">
                <div class="invitation_card_big  invitation_card_big3">
                    <div class="invitation_card  invitation_card2">
                        <div class="from">
                            <div class="from_block_big">
                                <div class="from_block">
                                    <div class="from_block_title">
                                        <h1>{{ __('app.registration_active') }}</h1>
                                    </div>
                                    <div class="from_block_input">
                                        <form id="myForm" class="consultation_send_form  send_from_block "
                                            method="POST">
                                            <input type="text" name="name" id="name"
                                                class="consultation_input  from_block_input_from" required value
                                                placeholder="Your name">
                                            <input type="number" id="tel" class="consultation_input"
                                                name="tildaspec-phone-part[]" value="" placeholder="99-999-9999"
                                                data-phonemask-iso="uz" data-phonemask-code="+998"
                                                data-phonemask-mask="+998-9-999-9999" maxlength="11"
                                                data-phonemask-without-code="99-999-9999"
                                                data-phonemask-current="4-444-44444">

                                            <button type="submit" class="consultation_send_button lang    send_from"
                                                key="consultation_send_button">{{ __('app.registration3') }}</button>
                                        </form>
                                    </div>
                                    <!-- <div class="from_block_btn">
                                        <h2>Подключиться</h2>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /* Registration // Регистрация     END  */ -->

    <!-- Telegram send -->

    <div class="instagram_news">
        <div class="instagram_news_block">
            <div class="instagram_news_content">
                <h3>{{ __('app.telegram_platform') }}</h3>
            </div>
            <div class="instagram_news_btn">
                <a href="https://t.me/active_taxi">
                    <i class="fab fa-telegram "></i>
                    <h4>{{ __('app.wotching') }}</h4>
                </a>
            </div>
        </div>
    </div>

    <!-- Telegram send   END-->

    <!-- MAP -->

    <footer>
        <div class="map_contact" id="contacts">
            <div class="contact">
                <div class="contact_container">
                    <h2 class="contact_title lang" key="contact">Contact</h2>
                    <p class="contact_phone lang" key="contact_phone1">+998 (71) 126-55-50</p>
                    <p class="contact_phone contact_phone_two lang" key="contact_phone2">+998 (99) 271-05-55</p>
                    <div class="card_text lang" style="margin-top: 20px;" key="job_time"></div>
                    <!-- <div class="card_text lang"style="margin-top:5px" key="card3_text2"></div> -->
                </div>
            </div>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11993.127372277515!2d69.2414714!3d41.2809701!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b3e88465031%3A0x4ddf080c5c96d4fd!2sDr%20Chiropractor!5e0!3m2!1sru!2s!4v1683441445624!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2996.131032505206!2d69.33968907605663!3d41.327763971307455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDE5JzQwLjAiTiA2OcKwMjAnMzIuMiJF!5e0!3m2!1sru!2sru!4v1695987382496!5m2!1sru!2sru"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.6212682740415!2d69.29550927581188!3d41.382312496310384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae894748adabdf%3A0xf21bdc3a96777d72!2sBRIGHT%20MEDIA!5e0!3m2!1sru!2s!4v1688750477145!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        </div>
    </footer>

    <!--   /* Footer social medi gmail */  -->

    <div class="foter_social">
        <div class="foter_social_block">
            <div class="foter_social_logo">
                <img src="/assets/img/Лого таксопарк.png" alt="" class="foter_social_logo_photo">
            </div>
            <div class="fone_number">
                <a href="">+998 71 268 55 50</a>
            </div>
            <div class="gmail">
                <div class="gmail_block">
                    <a href="Activetaxi@yandex.com"><i class="fa fa-envelope" aria-hidden="true"></i>
                        <h5>{{ __('app.gmail') }}</h5>
                    </a>
                </div>
            </div>
            <div class="social_icons">
                <a href="https://t.me/active_taxi"><i class="fab fa-telegram "></i></a>
                <a href=""><i class="fa fa-map" aria-hidden="true"></i></a>
                <a href="https://instagram.com/active_yandexgo?igshid=MWZjMTM2ODFkZg=="><i
                        class="fab fa-instagram "></i></a>
            </div>
        </div>
    </div>

    <!--   /* Footer social medi gmail     END -->

    <div class="powered_by">
        <div class="powered_by_text">
            <P>© 2023 Powered by</P>
            <a href="cmd-tech.uz"> CMD TECH</a>
        </div>
    </div>
    <div id="myModal_telegram_message" class="modal1 telegram_message_modal">
        <div class="modal-content telegram_modal_container">
            <!-- <span class="close">&times;</span> -->
            <h3 class="telegram_message_modal_text lang" key="telegram_message_modal_text" id="modal-text">Request sent
                successfully!</h3>
        </div>
    </div>


    <script src="{{ asset('js/send_telegram.js') }}" ></script>