<!-- resources/views/categories/show.blade.php -->
@extends('admin.layouts.app')

@section('content')
    <!-- <div class="container">
        <h1>{{ $category->name_ru }}</h1>
        <h2>{{ $category->name_en }}</h2>

        @if($category->image_path)
            <img src="{{ $category->image_path }}" alt="{{ $category->name_ru }}" style="max-width: 300px;">
        @endif

    </div> -->
    <div class="product_show" style="margin-top: 0;">
    
    <h2 class="product_show_title"><p>{{ $category->name_en }}</p>  <br><p>{{ $category->name_ru }}</p></h2>
    <img src="{{ $category->image_path }}" alt="" class="product_show_img">
    <a href="{{ route('categories.index') }}" class="btn btn-secondary" style="margin-top:50px; margin-left:60px;">Вернуться к категориям</a>
  </div>   

@endsection