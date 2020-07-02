@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $unicorn->name }}</div>

                    <div class="card-body">

                        <a class="btn btn-success" href="{{ route('unicorns.index') }}">Retour à la liste</a>

                        <a class="btn btn-warning" href="{{ route('unicorns.edit', $company->id) }}">Modifier</a>

                        <form action="{{ route('unicorns.destroy') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $unicorn->id }}">
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>

                        <h2>Détails</h2>

                        <br>

                        <p>Age:  {{ $unicorn->age }}</p>
                        <p>Propriétaire: {{ $unicorn->companies->name }}</p>

                        <br>

                        <h2>Location pour reproduction</h2>

                        <p>Début de chaleur: {{ $unicorn->start_date_mating_season }}</p>
                        <p>Période de chaleur: {{ $unicorn->mating_season }}</p>
                        <p>Nombre de reproductions: {{ $unicorn->nb_mating }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
