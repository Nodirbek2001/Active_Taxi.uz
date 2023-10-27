@extends('admin.layouts.app')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
    <div class="col-md-8">

        <h2 class="mb-4">Edit Contact</h2>
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="phone_number_1">Phone Number 1</label>
                <input type="text" id="phone_number_1" name="phone_number_1" value="{{ $contact->phone_number_1 }}" required class="form-control">
            </div>

            <div class="form-group">
                <label for="phone_number_2">Phone Number 2</label>
                <input type="text" id="phone_number_2" name="phone_number_2" value="{{ $contact->phone_number_2 }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ $contact->email }}" required class="form-control">
            </div>

            <div class="form-group">
                <label for="geolocation">Geolocation (Embed Link)</label>
                <input type="text" id="geolocation" name="geolocation" value="{{ $contact->geolocation }}" required class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    </div>
</div>

@endsection
