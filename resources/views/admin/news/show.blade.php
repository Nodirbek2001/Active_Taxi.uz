@extends('admin.layouts.app')


@section('content')

<div class="container">
    <h2>Show News</h2>

    <form>
        <div class="form-group">
            <label for="name_uz">Name (UZBEK)</label>
            <input type="text" class="form-control" id="name_uz" name="name_uz" value="{{ $news->name_uz }}" disabled>
        </div>

        <div class="form-group">
            <label for="name_ru">Name (Russian)</label>
            <input type="text" class="form-control" id="name_ru" name="name_ru" value="{{ $news->name_ru }}" disabled>
        </div>

        <div class="form-group">
            <label for="description_uz">Description (UZBEK)</label>
            <div class="form-control" style="height: auto;">{!! $news->description_uz !!}</div>
        </div>

        <div class="form-group">
            <label for="description_ru">Description (Russian)</label>
            <div class="form-control" style="height: auto;">{!! $news->description_ru !!}</div>
        </div>

        <div class="form-group">
    <label for="image_path">News Image</label>
    <img src="{{ asset($news->image_path) }}" alt="news Image">
</div>

    </form>
</div>

@endsection