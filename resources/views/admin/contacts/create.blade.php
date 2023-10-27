@extends('admin.layouts.app')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="mb-4">Create Contact</h2>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="phone_number_1">Phone Number 1</label>
                <input type="text" id="phone_number_1" name="phone_number_1" required class="form-control">
            </div>

            <div class="form-group">
                <label for="phone_number_2">Phone Number 2 (Optional)</label>
                <input type="text" id="phone_number_2" name="phone_number_2" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required class="form-control">
            </div>

            <div class="form-group">
                <label for="geolocation">Geolocation Embed Link</label>
                <textarea id="geolocation" name="geolocation" class="form-control" rows="3" placeholder="<iframe src='...'></iframe>"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
</div>

@endsection
