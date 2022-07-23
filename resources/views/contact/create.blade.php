@extends('layouts.app')


@section('content')

    <h1>Ajouter un contact</h1>


    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ url('contact') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nomComplet">Nom Complet:</label>
            <input type="text" class="form-control" id="nomComplet" placeholder="Entrez un nom" name="nomComplet">
        </div>

        <div class="form-group mb-3">

            <label for="telephone">Telephone:</label>
            <input type="text" class="form-control" id="telephone" placeholder="telephone" name="telephone">

        </div>


        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>

        <div class="form-group mb-3">
            <label for="salaire">Salaire ($):</label>
            <input type="number" class="form-control" id="salaire" placeholder="Salaire" name="salaire">
        </div>


        <button type="submit" class="btn btn-primary">Enregister</button>

    </form>

@endsection
