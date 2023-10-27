@extends('layouts.app')

@section('content')
<!-- <div class="about" id="about" style="margin-top:50px;">
    <h2 class="lang" key="about">{{ __('app.about') }}</h2>
    <div class="container">
      <img src="{{ asset('images/static_img/about.jpg') }}" alt="">
      <h5 class="lang" key="about_text">{{ __('app.about_text') }}</h5>
    </div>
  </div> -->
  <div class="about">
    <img src="{{ asset('images/static_img/about.jpg') }}" alt="" class="about_img">
    <div class="container about_container">
        <h1 class="page_title lang about_title" key="about">{{ __('app.about') }}</h1>
        <h4 class="page_text lang about_text" key="about_page_text">{{ __('app.about_page_text') }}</h4>
    </div>
</div>
@endsection
