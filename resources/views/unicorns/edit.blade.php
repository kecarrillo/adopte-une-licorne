@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <div class="row">
                            <div class="col-1">
                                <a href="{{ route('unicorns.index') }}" title="Retour aux licornes">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.354 10.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-11">
                                <h1>
                                    Modification d'une licorne
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('unicorns.update', $unicorn->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <fieldset>

                                <legend class="text-primary">{{$unicorn->name}}</legend>
                                <br>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="age" class="col-4">Son âge</label>
                                        @if(!is_null($unicorn->age))
                                        <input id="age" type="number" min="0" name="age"
                                            value="{{ $unicorn->age }}" class="form-control col">
                                        @else
                                        <input id="age" type="number" min="0" name="age" class="form-control col">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="name" class="col-4">Son nom</label>
                                        @if(!is_null($unicorn->name))
                                        <input id="name" type="text" name="name"
                                            value="{{ $unicorn->name }}" class="form-control col">
                                        @else
                                        <input id="name" type="text" name="name" class="form-control col">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="mating_season" class="col-4">Sa période d'accouplement</label>
                                        @if(!is_null($unicorn->mating_season))
                                        <input id="mating_season" type="number" min="0" name="mating_season"
                                            value="{{ $unicorn->mating_season }}" class="form-control col">
                                        @else
                                        <input id="mating_season" type="number" min="0" name="mating_season" class="form-control col">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="date_start_mating_season" class="col-4">Début de la période</label>
                                        @if(!is_null($unicorn->date_start_mating_season))
                                        <input id="date_start_mating_season" type="date" name="date_start_mating_season"
                                            value="{{ $unicorn->date_start_mating_season }}" class="form-control col">
                                        @else
                                        <input id="date_start_mating_season" type="date" name="date_start_mating_season"
                                               class="form-control col">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="nb_mating" class="col-4"> Son nombre de partenaires</label>
                                        @if(!is_null($unicorn->nb_mating))
                                        <input id="nb_mating" type="number" min="0" max="2" name="nb_mating"
                                            value="{{ $unicorn->nb_mating }}" class="form-control col">
                                        @else
                                        <input id="nb_mating" type="number" min="0" name="nb_mating" class="form-control col">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="unit_cost_HT" class="col-4">Son prix (en €)</label>
                                        @if(!is_null($unicorn->unit_cost_HT))
                                        <input id="unit_cost_HT" type="number" min="0" name="unit_cost_HT"
                                            value="{{ $unicorn->unit_cost_HT }}" class="form-control col">
                                        @else
                                        <input id="unit_cost_HT" type="number" min="0" name="unit_cost_HT" class="form-control col">
                                        @endif
                                    </div>
                                </div>

                            </fieldset>
                            <br>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
