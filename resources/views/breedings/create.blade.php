@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-1">
                                <a href="{{ route('breedings.index') }}" title="Retour aux élevages">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.354 10.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-11">
                                <h1>
                                    Ajout d'un élevage
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('breedings.store') }}" method="POST">
                            @csrf

                            <legend class="text-success">Votre nouvel élevage</legend>
                            <br>

                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input id="name" type="text" class="form-control" name="name"  >
                            </div>

                            <div class="form-group">
                                <label for="nb_unicorn">Nombre de licornes dans cet élevage</label>
                                <input id="nb_unicorn" type="number" min="0" class="form-control" name="nb_unicorn" >
                            </div>

                            <div class="form-group">
                                <label for="unit_cost_HT">Prix d'une ces bêtes</label>
                                <input id="unit_cost_HT" type="number" min="0" class="form-control" name="unit_cost_HT" >
                            </div>

                            <div class="form-group">
                                <label for="gender">Genre de l'élevage</label>
                                <select class="form-control" id="gender" name="gender">
                                    <option value="Femelle" selected>Femelle</option>
                                    <option value="Mâle">Mâle</option>
                                    <option value="Alien">Alien</option>
                                    <option value="Mixte">Mixte</option>
                                </select>
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
