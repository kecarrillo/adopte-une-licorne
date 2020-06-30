@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Création d'une entreprise</div>

                    <div class="card-body">

                        <a href="{{ route('companies.index') }}" class="btn btn-danger" title="Retour vers companies">
                            Entreprises
                        </a>

                        <form action="{{ route('companies.store') }}" method="POST">
                            @csrf

                            <fieldset>
                                <legend>Libellé entreprise</legend>

                                <label for="legal_status">Status légal de l'entreprise</label>
                                <input id="legal_status" type="text" name="legal_status">

                                <label for="name">Nom de l'entreprise</label>
                                <input id="name" type="text" name="company_name">

                            </fieldset>

                            <fieldset>
                                <legend>Formulaire de contact</legend>

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

                            </fieldset>

                            <br>
                            <button type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
