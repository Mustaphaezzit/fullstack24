@extends('layouts.app')
@section('content')
<table class="table table-hover table-bordered caption-top">
    <caption>List of contacs</caption>
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Numero de téléphone</th>
        <th scope="col">Email</th>
        <th scope="col">Age</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>

        @forelse ($contacts as $contact)
        <tr>
            <th scope="row">{{ $contact->id }}</th>
            <td>{{ $contact->last_name }}</td>
            <td>{{ $contact->first_name }}</td>
            <td>{{ $contact->phone_number }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->age }}</td>
            <td class="d-flex justify-content-around">
                <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-success">
                    <i class="fa-solid fa-eye"></i>
                </a>
                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <form action="{{ route("contacts.destroy",$contact->id) }}" method="post" class="d-inline">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </td>

          </tr>
        @empty
        <tr class="text-center">
            <td colspan="7">aucun contact</td>
        </tr>

        @endforelse


    </tbody>
  </table>

  <a href="{{ route("contacts.create") }}" class="btn btn-success">Créer</a>

@endsection
