@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modification d'une entreprise</div>

                    <div class="card-body">

                        <a href="{{ route('companies.index') }}" class="btn btn-danger" title="Retour aux entreprises">
                            Retour aux entreprises
                        </a>
                        <form action="{{ route('companies.update', $company->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <legend>Libellé entreprise</legend>

                                <label for="legal_status">Status légal de l'entreprise</label>
                                @if(!is_null($company->legal_status))
                                    <input id="legal_status" type="text" name="legal_status"
                                           value="{{ $company->legal_status }}">
                                @else
                                    <input id="legal_status" type="text" name="legal_status">
                                @endif

                                <label for="company_name">Nom</label>
                                @if(!is_null($company->company_name))
                                    <input id="company_name" type="text" name="company_name" value="{{ $company->company_name }}">
                                @else
                                    <input id="company_name" type="text" name="company_name">
                                @endif

                                <input id="contact_id" type="hidden" name='contact_id' value="{{ $company->contact_id }}">

                            </fieldset>

                            @method('PUT')
                            <fieldset>
                                <legend>Formulaire de contact</legend>

                                <label for="phone">Téléphone de l'entreprise</label>
                                @if(!is_null($company->contacts->phone))
                                    <input id="phone" type="tel" name="phone"
                                           value="{{ $company->contacts->phone }}">
                                @else
                                    <input id="phone" type="tel" name="phone">
                                @endif

                                <label for="email">Mail de l'entreprise</label>
                                @if(!is_null($company->contacts->email))
                                    <input id="email" type="email" name="email"
                                           value="{{ $company->contacts->email }}">
                                @else
                                    <input id="email" type="email" name="email">
                                @endif

                                <label for="wording_address">Libellé d'adresse</label>
                                @if(!is_null($company->contacts->wording_address))
                                    <input id="wording_address" type="text" name="wording_address"
                                           value="{{ $company->contacts->wording_address }}">
                                @else
                                    <input id="wording_address" type="text" name="wording_address">
                                @endif

                                <label for="town">Ville</label>
                                @if(!is_null($company->contacts->town))
                                    <input id="town" type="text" name="town"
                                           value="{{ $company->contacts->town }}">
                                @else
                                    <input id="town" type="text" name="town">
                                @endif

                                <label for="zip_code">Code postale</label>
                                @if(!is_null($company->contacts->zip_code))
                                    <input id="zip_code" type="text" name="zip_code"
                                           value="{{ $company->contacts->zip_code }}">
                                @else
                                    <input id="zip_code" type="text" name="zip_code">
                                @endif

                                <label for="country">Pays</label>
                                @if(!is_null($company->contacts->country))
                                    <input id="country" type="text" name="country"
                                           value="{{ $company->contacts->country }}">
                                @else
                                    <input id="country" type="text" name="country">
                                @endif

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
