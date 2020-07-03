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
                                    Création d'une licorne
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('unicorns.store') }}" method="POST">
                            @csrf

                            <legend class="text-success">Votre nouvelle licorne</legend>
                            <br>

                            <div class="form-group">
                                <div class="row">
                                    <label for="age" class="col-4">Age</label>
                                    <input id="age" type="number" min="0" class="form-control col" name="age" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="name" class="col-4">Nom</label>
                                    <input id="name" type="text" class="form-control col" name="name" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="mating_season" class="col-4">Période d'accouplement'</label>
                                    <input id="mating_season" type="number" min="0" class="form-control col" name="mating_season" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="date_start_mating_season" class="col-4">Début de la période</label>
                                    <input id="date_start_mating_season" type="date" class="form-control col" name="date_start_mating_season" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="nb_mating" class="col-4">Nombre de partenaires</label>
                                    <input id="nb_mating" type="number" min="0" max="2" class="form-control col" name="nb_mating" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label for="unit_cost_HT" class="col-4">Prix de la bête</label>
                                    <input id="unit_cost_HT" type="number" min="0" class="form-control col" name="unit_cost_HT" >
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Envoyer</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
