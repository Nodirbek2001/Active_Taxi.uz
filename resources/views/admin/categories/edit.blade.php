@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Изменить категорию') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="name_ru" class="col-md-4 col-form-label text-md-right">{{ __('Имя (РУССКОЕ)') }}</label>

                            <div class="col-md-6">
                                <input id="name_ru" type="text" class="form-control @error('name_ru') is-invalid @enderror" name="name_ru" value="{{ old('name_ru', $category->name_ru) }}" required autocomplete="name_ru" autofocus>

                                @error('name_ru')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name_en" class="col-md-4 col-form-label text-md-right">{{ __('Имя (aнглийский)') }}</label>

                            <div class="col-md-6">
                                <input id="name_en" type="text" class="form-control @error('name_en') is-invalid @enderror" name="name_en" value="{{ old('name_en', $category->name_en) }}" required autocomplete="name_en" autofocus>

                                @error('name_en')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('Изображение') }}</label>
                            <div class="col-md-6">
                                @if ($category->image_path)
                                    <div class="mb-3">
                                        <img src="{{ asset($category->image_path) }}" alt="{{ $category->name_ru }}" class="img-thumbnail" style="width: 250px;">
                                    </div>
                                @endif

                                <div class="input-group">
                                    <label class="btn btn-primary" for="image_path">Изменить изображение</label>
                                    <input style="display: none;" type="file" class="custom-file-input" id="image_path" name="image_path" accept="image/*">
                                </div>
                                @error('image_path')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Обновлять') }}
                                </button>
                                <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                                    {{ __('Отмена') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection