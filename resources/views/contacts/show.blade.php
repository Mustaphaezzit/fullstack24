@extends('layouts.app')
@section('content')
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $contact->last_name}} {{ $contact->first_name  }}</h5>
                    <p class="card-text">{{ $contact->phone_number }}</p>
                    <p class="card-text"><small class="text-body-secondary">{{$contact->age }}</small></p>
                    <p class="card-text"><small class="text-body-secondary">{{$contact->email }}</small></p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Retour</a>
@endsection
