@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-1">
                                <a href="{{ route('companies.index') }}" title="Retour aux entreprises">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.354 10.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-11">
                                <h1>
                                    Création d'une entreprise
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('companies.store') }}" method="POST">
                            @csrf

                            <fieldset>
                                <legend class="text-success">Libellé entreprise</legend>
                                <br>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="legal_status"  class="col-4">Status légal de l'entreprise</label>
                                        <input id="legal_status" class="form-control col" type="text" name="legal_status">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="name" class="col-4">Nom de l'entreprise</label>
                                        <input id="name" type="text" class="form-control col" name="company_name">
                                    </div>
                                </div>

                            </fieldset>
                            <br>

                            <fieldset>
                                <legend class="text-success">Formulaire de contact</legend>

                                <br>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="phone"  class="col-4">Téléphone de l'entreprise</label>
                                        <input id="phone" type="tel" class="form-control col" name="phone">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="email"  class="col-4">Mail de l'entreprise</label>
                                        <input id="email" type="email" class="form-control col" name="email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="wording_address"  class="col-4">Libellé d'adresse</label>
                                        <input id="wording_address" type="text" class="form-control col" name="wording_address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="town"  class="col-4">Ville</label>
                                        <input id="town" type="text" class="form-control col" name="town">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="zip_code"  class="col-4">Code postale</label>
                                        <input id="zip_code" type="text" class="form-control col" name="zip_code">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="country"  class="col-4">Pays</label>
                                        <input id="country" type="text" class="form-control col" name="country">
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
