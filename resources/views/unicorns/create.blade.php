@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Création d'une licorne</div>

                    <div class="card-body">

                        <a href="{{ route('unicorns.index') }}" class="btn btn-danger" title="Retour vers unicorns">
                            LICORNES
                        </a>

                        <form action="{{ route('unicorns.store') }}" method="POST">
                            @csrf

                            <legend>Votre nouvelle licorne</legend>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" class="form-control" name="age"  >
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" name="name" >
                            </div>
                            <div class="form-group">
                                <label for="mating_season">Période d'accouplement'</label>
                                <input type="text" class="form-control" name="mating_season" >
                            </div>
                            <div class="form-group">
                                <label for="date_start_mating_season">Début de la période</label>
                                <input type="date" class="form-control" name="date_start_mating_season" >
                            </div>
                            <div class="form-group">
                                <label for="nb_mating">Nombre de partenaires</label>
                                <input type="text" class="form-control" name="nb_mating" >
                            </div>
                            <div class="form-group">
                                <label for="unit_cost_HT">Prix de la bête</label>
                                <input type="text" class="form-control" name="unit_cost_HT" >
                            </div>
                            <!-- <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div> -->
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                            
                                <!-- <legend>Libellé entreprise</legend>

                                <label for="legal_status">Status légal de l'entreprise</label>
                                <input id="legal_status" type="text" name="legal_status">

                                <label for="name">Nom de l'entreprise</label>
                                <input id="name" type="text" name="company_name">

                                <label for="phone">Téléphone de l'entreprise</label>
                                <input id="phone" type="tel" name="phone">

                                <label for="email">Mail de l'entreprise</label>
                                <input id="email" type="email" name="email">

                                <label for="wording_address">Libellé d'adresse</label>
                                <input id="wording_address" type="text" name="wording_address">

                                <label for="town">Ville</label>
                                <input id="town" type="text" name="town">

                                <label for="zip_code">Code postale</label>
                                <input id="zip_code" type="text" name="zip_code">

                                <label for="country">Pays</label>
                                <input id="country" type="text" name="country">

                            

                            <br>
                            <button type="submit">Envoyer</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
