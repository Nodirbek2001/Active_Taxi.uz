@extends('layouts.app')
@section('meta')
<title>Eleksan - {{ __('app.services_title') }}</title>
@endsection
@section('content')



<div class="services  service_more" id="services">
    <div class="container">
        <h1 class="service_title   service_tit_page">{{ __('app.services_title') }}</h1>
        <div class="services_block">

            @foreach($services as $service)
  
            <div class="services_block_product">
                <div class="services_block_img">
                    <img src="{{ asset($service->image_path) }}" alt="">
                </div>
                <div class="services_block_content">
                    <h2>{{ Illuminate\Support\Str::limit(strip_tags ($service->{'name_' . app()->getLocale()}), 50) }}</h2>
                    <div class="services_block_content_text">
                        <p>
                        {{ Illuminate\Support\Str::limit(strip_tags($service->{'description_' . app()->getLocale()}), 50) }}
                        </p>
                    </div>
          
                    <div class="more_container">




<a href="{{ route('service.show', ['locale' => app()->getLocale(), 'service_name' => $service->slug]) }}" class="more_btn">{{ __('app.more') }}...</a>

                                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>






@endsection