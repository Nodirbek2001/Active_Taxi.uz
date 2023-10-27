@extends('layouts.app')

@section('meta')
<title>Eleksan - </title>
@endsection

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Categories') }}
                    <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary float-right">{{ __('Create Category') }}</a>
                </div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name_uz }}</td>

                                <td>
                                    @if($category->image_path)
                                    <img src="{{ asset($category->image_path) }}" alt="{{ $category->name_uz }}" width="50">
                                    @endif
                                </td>
                                <td>
                                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-primary">Show</a>
         
   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="products" id="products">


    
    <div class="products_black product_page">
      <h2 class="lang" key="products_category">{{ __('app.products_category') }}</h2>

      <div class="products_container">
      @foreach($categories as $category)

        <a href="{{ route('category.show', ['locale' => app()->getLocale(), 'category' => $category->id]) }}" class="product_card">

          <div class="product_img_wrapper">
            <img class="product_inner-img" src="{{ asset($category->image_path) }}" />
            <div class="product_middle">
              <div class="product_text lang" key="products1">{{ $category->{'name_' . app()->getLocale()} }}</div>
            </div>
          </div>
        </a>
        @endforeach
       

      </div>
    </div>

  </div>
@endsection
