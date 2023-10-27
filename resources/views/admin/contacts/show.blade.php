@extends('admin.layouts.app')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
    <div class="col-md-8">

        <h2 class="mb-4">Contact Details</h2>
        <dl class="row">
            <dt class="col-sm-3">Phone Number 1</dt>
            <dd class="col-sm-9">{{ $contact->phone_number_1 }}</dd>

            <dt class="col-sm-3">Phone Number 2</dt>
            <dd class="col-sm-9">{{ $contact->phone_number_2 }}</dd>

            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $contact->email }}</dd>

            <dt class="col-sm-3">Geolocation</dt>
            <dd class="col-sm-9"><a href="{{ $contact->geolocation }}" target="_blank">View Location</a></dd>
        </dl>
    </div>
    </div>
</div>

@endsection
