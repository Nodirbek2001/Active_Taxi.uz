@extends('layouts.app')

@section('content')
<!-- <div id="home" style="position: absolute; top: -200px;"></div>
<div class="img-slider">
    <div class="navigation">
        <div class="slider-btn active"></div>
        <div class="slider-btn"></div>
        <div class="slider-btn"></div>
    </div>

    <div class="slide active">
        <img src="{{ asset('images/static_img/1.jpg') }}" alt="">
    </div>
    <div class="slide">
        <img src="{{ asset('images/static_img/4.jpg') }}" alt="">
    </div>
    <div class="slide">
        <img src="{{ asset('images/static_img/3.jpg') }}" alt="">
    </div>


</div> -->

<!-- <script src="assets/js/scripts.js" type="text/javascript"></script>


<div class="about" id="about">
    <h2 class="title_class lang" key="about">{{ __('app.about') }}</h2>
    <div class="container">
        <img src="{{ asset('images/static_img/about.jpg') }}" alt="">
        <h5 class="lang" key="about_text">{{ __('app.about_text') }}</h5>
    </div>
</div>










<div class="products" id="products">
    <h2 class="title_class lang" key="products_category">{{ __('app.products_category') }}</h2>



    <div class="category_container">

        @foreach($categories as $category)

        <a href="{{ route('category.show', ['locale' => app()->getLocale(), 'category' => $category->id]) }}" class="product_card">

            <div class="product_img_wrapper">
                <img class="product_inner-img" src="{{ asset($category->image_path) }}" />
                <div class="product_middle">
                    <div class="product_text lang" key="products1">{{ $category->{'name_' . app()->getLocale()} }}</div>
                </div>
            </div>
        </a>
        @endforeach

    </div>

    <div class="products_black">


        <div class="product_home_container">
            <h2 class="title_class product_page_title lang" key="products">{{ __('app.products') }}</h2>
            <div class="cards_container">
                @foreach($products as $product)

                <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'product' => $product->id]) }}">
                    <div class="product_page_card">
                        <img src="{{ asset($product->image_path) }}" alt="">

                        <h4 class="product_card_text">{{ $product->{'name_' . app()->getLocale()} }}</h4>
                    </div>
                </a>
                @endforeach

            </div>
        </div>
        <a href="{{ route('product',[app()->getLocale()]) }}" class="product_more">{{ __('app.more') }} ...</a>

    </div>
</div> -->

<div class="main-carousel" id="home">
    <div class="carousel">
        <div class="items">
            <div class="img_card carousel-image current">
                <div class="img_text_container">
                    <div class="img_text">
                        <h1>EMC Technology
                        </h1>
                        <h3 key="" class="lang">{{ __('app.slider_text') }}</h3>
                    </div>

                </div>
                <img src="{{ asset('images/static_img/1.png') }}" alt="" class=" " />
            </div>

            <div class="img_card carousel-image ">
                <div class="img_text_container">
                    <div class="img_text">
                        <h1>EMC Technonology
                        </h1>
                        <h3 key="" class="lang">{{ __('app.slider_text') }}</h3>
                    </div>

                </div>
                <img src="{{ asset('images/static_img/2.jpg') }}" alt="" class=" " />
            </div>

            <div class="img_card carousel-image ">
                <div class="img_text_container">
                    <div class="img_text">
                        <h1>EMC Technonology
                        </h1>
                        <h3 key="" class="lang">{{ __('app.slider_text') }}</h3>
                    </div>

                </div>
                <img src="{{ asset('images/static_img/3.png') }}" alt="" class=" " />
            </div>
        </div>
    </div>
    <!-- <div class="buttons">
          <i class="fa fa-chevron-left fa-3x" id="prevBtn"></i>
          <i class="fa fa-chevron-right fa-3x" id="nextBtn"></i>
        </div> -->
</div>

<div class="service" id="about">
    <h2 class="services_title lang" key=""> {{ __('app.services_title') }}</h2>

    <div class="services_container">
        <div class="services_slider">
            <img src="{{ asset('images/static_img/1.png') }}" alt="">
        </div>
        <div class="services_text">
            <div>
                <p class="lang" key="">{{ __('app.about_text') }}</p>
            </div>
            <a href="{{ route('services',[app()->getLocale()]) }}" class="more lang" key="">{{ __('app.more') }}</a>
        </div>
    </div>
</div>

<div class="projects" id="projects">
    <h2 class="projects_title lang" key=""> {{ __('app.projects') }}</h2>
    <div class="projects_container">
        @foreach($projects as $project)
        <a href="{{ route('project.show', ['locale' => app()->getLocale(), 'project' => $project->id]) }}" class="project_card">
            <img src="{{ asset($project->image_path) }}" alt="">
            <h2 class="lang" key=""> {{ $project->{'name_' . app()->getLocale()} }}</h2>
            <p class="lang" key=""> {{ Illuminate\Support\Str::limit(strip_tags($project->{'description_' . app()->getLocale()}), 50) }}
            </p>
        </a>
        @endforeach

       
    </div>
</div>
<div class="partners">
    <h2 class="projects_title lang" key="">{{ __('app.partners_title') }}</h2>
    <div class="logo-slider">
        <div class="brand-carousel section-padding owl-carousel">
            <div class="single-logo"><img alt="" src="{{ asset('images/static_img/partner1.jpg') }}"></div>
            <div class="single-logo"><img alt="" src="{{ asset('images/static_img/gold_step.jpg') }}"></div>
            <div class="single-logo"><img alt="" src="{{ asset('images/static_img/IIB.jpg') }}"></div>
            <div class="single-logo"><img alt="" src="{{ asset('images/static_img/gold_step.jpg') }}"></div>
            <div class="single-logo"><img alt="" src="{{ asset('images/static_img/partner1.jpg') }}"></div>
            <div class="single-logo"><img alt="" src="{{ asset('images/static_img/gold_step.jpg') }}"></div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
        </script>
        <script>
            $('.brand-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        </script>
        <!-- Add more logo slides as needed -->
    </div>


</div>

@endsection