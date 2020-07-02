@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modification d'une licorne</div>

                    <div class="card-body">

                        <a href="{{ route('unicorns.index') }}" class="btn btn-danger" title="Retour aux licornes">
                            Retour aux licornes
                        </a>
                        <form action="{{ route('unicorns.update', $unicorn->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                                <legend>Licorne {{$unicorn->name}}</legend>

                                <div class="form-group">
                                    <label for="age">Son âge</label>
                                        @if(!is_null($unicorn->age))
                                        <input id="age" type="text" name="age"
                                            value="{{ $unicorn->age }}">
                                        @else
                                        <input id="age" type="text" name="age">
                                        @endif
                                </div>

                                <div class="form-group">
                                    <label for="name">Son nom</label>
                                        @if(!is_null($unicorn->name))
                                        <input id="name" type="text" name="name"
                                            value="{{ $unicorn->name }}">
                                        @else
                                        <input id="name" type="text" name="name">
                                        @endif
                                </div>

                                <div class="form-group">
                                    <label for="mating_season">Sa période d'accouplement</label>
                                        @if(!is_null($unicorn->mating_season))
                                        <input id="mating_season" type="text" name="mating_season"
                                            value="{{ $unicorn->mating_season }}">
                                        @else
                                        <input id="mating_season" type="text" name="mating_season">
                                        @endif
                                </div>

                                <div class="form-group">
                                    <label for="date_start_mating_season">Début de la période</label>
                                        @if(!is_null($unicorn->date_start_mating_season))
                                        <input id="date_start_mating_season" type="date" name="date_start_mating_season"
                                            value="{{ $unicorn->date_start_mating_season }}">
                                        @else
                                        <input id="date_start_mating_season" type="date" name="date_start_mating_season">
                                        @endif
                                </div>

                                <div class="form-group">
                                    <label for="nb_mating"> Son nombre de partenaires</label>
                                        @if(!is_null($unicorn->nb_mating))
                                        <input id="nb_mating" type="text" name="nb_mating"
                                            value="{{ $unicorn->nb_mating }}">
                                        @else
                                        <input id="nb_mating" type="text" name="nb_mating">
                                        @endif
                                </div>

                                <div class="form-group">
                                    <label for="unit_cost_HT"> Son prix</label>
                                        @if(!is_null($unicorn->unit_cost_HT))
                                        <input id="unit_cost_HT" type="text" name="unit_cost_HT"
                                            value="{{ $unicorn->unit_cost_HT }}">
                                        @else
                                        <input id="unit_cost_HT" type="text" name="unit_cost_HT">
                                        @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
