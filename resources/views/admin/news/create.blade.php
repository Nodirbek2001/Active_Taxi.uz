@extends('admin.layouts.app')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">Create News</h2>
            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name_ru">Name (RU)</label>
                    <input type="text" id="name_ru" name="name_ru" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="name_uz">Name (UZ)</label>
                    <input type="text" id="name_uz" name="name_uz" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="description_ru">Description (RU)</label>
                    <textarea id="description_ru" name="description_ru" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="description_uz">Description (UZ)</label>
                    <textarea id="description_uz" name="description_uz" class="form-control my-textarea"></textarea>
                </div>

                <div class="form-group">
                    <label for="image_path">{{ __('Image') }}</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image_path" name="image_path" accept="image/*">
                            <label class="custom-file-label" for="image_path">Choose file</label>
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

<!-- <script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script> -->