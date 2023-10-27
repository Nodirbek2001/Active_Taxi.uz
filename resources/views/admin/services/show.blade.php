@extends('admin.layouts.app')


@section('content')

<div class="container">
    <h2>Show service</h2>

    <form>
        <div class="form-group">
            <label for="name_en">Name (English)</label>
            <input type="text" class="form-control" id="name_en" name="name_en" value="{{ $service->name_en }}" disabled>
        </div>

        <div class="form-group">
            <label for="name_ru">Name (Russian)</label>
            <input type="text" class="form-control" id="name_ru" name="name_ru" value="{{ $service->name_ru }}" disabled>
        </div>

        <div class="form-group">
            <label for="description_en">Description (English)</label>
            <div class="form-control" style="height: auto;">{!! $service->description_en !!}</div>
        </div>

        <div class="form-group">
            <label for="description_ru">Description (Russian)</label>
            <div class="form-control" style="height: auto;">{!! $service->description_ru !!}</div>
        </div>

        <div class="form-group">
    <label for="image_path">service Image</label>
    <img src="{{ asset($service->image_path) }}" alt="service Image">
</div>

    </form>
</div>

@endsection