@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>{{ __('Список Новости') }}</h2>
    <a href="{{ route('news.create') }}" class="btn btn-primary" style="float: right; margin-bottom:20px;">{{ __('Добавить новый проект') }}</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>{{ __('Название RU') }}</th>
                <th>{{ __('Название UZ') }}</th>
                <th>img</th>
                <th>{{ __('Действия') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $news)
            <tr>
                <td>{{ $news->name_ru }}</td>
                <td>{{ $news->name_uz }}</td>
                <td> <img src="{{ asset($news->image_path) }}" alt="{{ $news->image_name }}" class="img-fluid" width="50"></td>
                <td>
                    <a href="{{ route('news.show', $news) }}" class="btn btn-sm btn-info">{{ __('Показывать') }}</a>
                    <a href="{{ route('news.edit', $news) }}" class="btn btn-sm btn-warning">{{ __('Редактировать') }}</a>
                    <form action="{{ route('news.destroy', $news) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">{{ __('Удалить') }}</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
