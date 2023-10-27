@extends('layouts.app')
@section('meta')
<title>Eleksan - {{ $news->{'name_' . app()->getLocale()}  }}</title>
@endsection
@section('content')
<div class="service_dtl">
    <div class="service_drl_container">
        <div class="service_dtl_block">
            <h1 class="service_dtl_title">{{ $news->{'name_' . app()->getLocale()}  }}</h1>
            <img src="{{ asset($news->image_path) }}" alt="" class="service_dtl_block_img">
            <div class="service_dtl_title_text_block">
                <p class="service_dtl_title_text">
                    {!! $news->{'description_' . app()->getLocale()} !!}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
