@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Edit service</h2>
                <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name (RU)</label>
                        <input type="text" name="name_ru" value="{{ $service->name_ru }}" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Name (EN)</label>
                        <input type="text" name="name_en" value="{{ $service->name_en }}" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Description (RU)</label>
                        <textarea id="description_ru" name="description_ru" required class="form-control">{{ $service->description_ru }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Description (EN)</label>
                        <textarea id="description_en" name="description_en" required class="form-control">{{ $service->description_en }}</textarea>
                    </div>

                    @if ($service->image_path)
                    <div class="mb-3">
                        <label>Текущее изображение</label>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset($service->image_path) }}" alt="{{ $service->name_ru }}" class="img-thumbnail" style="width: 250px;">
                        </div>
                    </div>
                    @endif

                    <div class="form-group">
                        <!-- <label for="image_path">{{ __('Изображение') }}</label> -->
                        <div class="input-group">
                            <div class="custom-file">
                                <label class="btn btn-primary" for="image_path">Изменить изображение</label>
                                <input style="display: none;" type="file" class="custom-file-input" id="image_path" name="image_path" accept="image/*">
                            </div>
                        </div>
                        @error('image_path')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
