@extends('layouts.app')
@section('meta')
<title>Eleksan - {{ __('app.projects_title') }}</title>
@endsection
@section('content')
<!-- <div class="container">
    <h2>{{ __('Projects List') }}</h2>
    <a href="{{ route('projects.create') }}" class="btn btn-primary">{{ __('Add New Project') }}</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Name RU') }}</th>
                <th>{{ __('Name UZ') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name_ru }}</td>
                <td>{{ $project->name_uz }}</td>
                <td>
                    <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-info">{{ __('View') }}</a>
                    <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-warning">{{ __('Edit') }}</a>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> -->
<!-- <h1 class="service_title   service_tit_page">{{ __('app.projects_title') }}</h1> -->


<div class="services   project" id="projects">
    <div class="container">
    <h1 class="service_title   service_tit_page">{{ __('app.projects_title') }}</h1>
            <div class="services_block">
       


            
                @foreach($projects as $project)
                
                <div class="services_block_product  project_block_product">
                <a href="{{ route('project.show', ['locale' => app()->getLocale(), 'project_name' => $project->slug]) }}" class="project_link">
                    <div class="services_block_img   projects_block_img">
                        <img src="{{ asset($project->image_path) }}" alt="">
                    </div>
                    <div class="services_block_content  project_block_content">
                        <h2>{{ $project->{'name_' . app()->getLocale()} }}</h2>
                        <div class="services_block_content_text proejct_block_content_text">
                            <p class="project_link_text">{{ Illuminate\Support\Str::limit(strip_tags($project->{'description_' . app()->getLocale()}), 50) }}</p>
                        </div>
                    </div>
                </a>
                </div>

                @endforeach


        </div>
  
    </div>
</div>

@endsection