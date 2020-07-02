@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Détails de la licorne</div>

                    <div class="card-body">

{{--                        <a class="btn btn-success" href="{{ route('unicorns.index') }}">Retour aux licornes</a>--}}

{{--                        <a class="btn btn-warning" href="{{ route('unicorns.edit', $unicorn->id) }}">Modifier</a>--}}

{{--                        <form action="{{ route('unicorns.destroy') }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <input type="hidden" name="id" value="{{ $unicorn->id }}">--}}
{{--                            <button class="btn btn-danger" type="submit">Supprimer</button>--}}
{{--                        </form>--}}

                        <h2>{{ $unicorn->name }}</h2>

{{--                        <br>--}}

{{--                        <h3>Descriptif:</h3>--}}

{{--                        <p>Age:  {{ $unicorn->age }}</p>--}}
{{--                        <p>Nombre de reproduction: {{ $unicorn->nb_mating }}</p>--}}

{{--                        @if(!$unicorn->companies->company_name)--}}
{{--                            <p>Pas de possesseur</p>--}}
{{--                        @else--}}
{{--                            <p>Possesseur: {{ $unicorn->companies->company_name }}</p>--}}
{{--                        @endif--}}

                        <br>

                        <h3>Saison de chaleur:</h3>
{{--                        <p>Début: {{ $unicorn->date_start_mating_season }}</p>--}}
{{--                        <p>Durée (en mois): {{ $unicorn->mating_season }}</p>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
