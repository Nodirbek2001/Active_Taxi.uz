@extends('admin.layouts.app')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
    <div class="col-md-8">

        <h2 class="mb-4">Contacts List</h2>
        @if(!\App\Models\Contact::first())
    <a href="{{ route('contacts.create') }}" class="btn btn-primary" style="float: right; margin-bottom:20px;">Create Contact</a>
@endif

        <table class="table">
            <thead>
                <tr>
                    <th>Phone Number 1</th>
                    <th>Phone Number 2</th>
                    <th>Email</th>
                    <th>Geolocation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->phone_number_1 }}</td>
                    <td>{{ $contact->phone_number_2 }}</td>
                    <td>{{ $contact->email }}</td>
                    <td><a href="{{ $contact->geolocation }}" target="_blank">View Location</a></td>
                    <td>
                        <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>

@endsection
