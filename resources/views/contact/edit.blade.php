@extends('layouts.app')


@section('content')


    <h1>Modifier contact</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form method="post" action="{{ url('contact/'. $contact->id) }}" >
        @method('PATCH')
        @csrf


        <div class="form-group mb-3">

            <label for="nomComplet">Nom:</label>
            <input type="text" class="form-control" id="nomComplet" placeholder="Entrer Nom" name="nomComplet" value="{{ $contact->nomComplet }}">

        </div>

        <div class="form-group mb-3">

            <label for="telephone">Telephone:</label>
            <input type="text" class="form-control" id="telephone" placeholder="Entrer Telephone" name="telephone" value="{{ $contact->telephone }}">

        </div>

        <div class="form-group mb-3">

            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" placeholder="Entrer Email" name="email" value="{{ $contact->email }}">

        </div>

        <div class="form-group mb-3">

            <label for="salaire">Salaire ($):</label>
            <input type="number" class="form-control" id="salaire" placeholder="Salaire" name="salaire" value="{{ $contact->salaire }}">

        </div>



        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </form>

@endsection
