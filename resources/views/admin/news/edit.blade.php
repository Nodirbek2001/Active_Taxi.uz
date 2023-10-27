@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Edit news</h2>
                <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name (RU)</label>
                        <input type="text" name="name_ru" value="{{ $news->name_ru }}" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Name (UZ)</label>
                        <input type="text" name="name_uz" value="{{ $news->name_uz }}" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Description (RU)</label>
                        <textarea id="description_ru" name="description_ru" required class="form-control">{{ $news->description_ru }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Description (UZ)</label>
                        <textarea id="description_uz" name="description_uz" required class="form-control">{{ $news->description_uz }}</textarea>
                    </div>

                    @if ($news->image_path)
                    <div class="mb-3">
                        <label>Текущее изображение</label>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset($news->image_path) }}" alt="{{ $news->name_ru }}" class="img-thumbnail" style="width: 250px;">
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
