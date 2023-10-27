@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>{{ __('Список Услуги') }}</h2>
    <a href="{{ route('services.create') }}" class="btn btn-primary" style="float: right; margin-bottom:20px;">{{ __('Добавить новый проект') }}</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>{{ __('Название RU') }}</th>
                <th>{{ __('Название АНГЛ') }}</th>
                <th>img</th>
                <th>{{ __('Действия') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $service->name_ru }}</td>
                <td>{{ $service->name_en }}</td>
                <td> <img src="{{ asset($service->image_path) }}" alt="{{ $service->image_name }}" class="img-fluid" width="50"></td>
                <td>
                    <a href="{{ route('services.show', $service) }}" class="btn btn-sm btn-info">{{ __('Показывать') }}</a>
                    <a href="{{ route('services.edit', $service) }}" class="btn btn-sm btn-warning">{{ __('Редактировать') }}</a>
                    <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline;">
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
