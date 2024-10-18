@extends('layouts.app')
@section('content')
    <form action="{{ route("contacts.store") }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="last_name" placeholder="">
        </div>

        <div class="mb-3">
            <label for="prénom" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="first_name" id="prénom"
                placeholder="">
        </div>

        <div class="mb-3">
            <label for="numéro_téléphone" class="form-label">Numéro de téléphone</label>
            <input type="text" class="form-control" name="phone_number" id="numéro_téléphone" placeholder="">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="">
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="text" class="form-control" name="age" id="age" placeholder="">
        </div>


        <div class="mb-3">
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Retour</a>
            <button type="submit" class="btn btn-success">Ajouter</button>

        </div>


    </form>
@endsection
