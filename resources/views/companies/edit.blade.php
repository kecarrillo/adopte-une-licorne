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
                                    Modification d'une entreprise
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('companies.update', $company->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <legend class="text-primary">{{ $company->legal_status }} {{ $company->company_name }}</legend>
                                <br>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="legal_status"  class="col-4">Status légal de l'entreprise</label>
                                        @if(!is_null($company->legal_status))
                                            <input id="legal_status" type="text" class="form-control col" name="legal_status"
                                                   value="{{ $company->legal_status }}">
                                        @else
                                            <input id="legal_status" type="text" class="form-control col" name="legal_status">
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <label for="company_name" class="col-4">Nom de l'entreprise</label>
                                        @if(!is_null($company->company_name))
                                            <input id="company_name" type="text" class="form-control col" name="company_name"
                                                   value="{{ $company->company_name }}">
                                        @else
                                            <input id="company_name" type="text" class="form-control col" name="company_name">
                                        @endif
                                    </div>
                                </div>


                                <input id="contact_id" type="hidden" name='contact_id' value="{{ $company->contact_id }}">

                            </fieldset>
                            <br>

                            @method('PUT')
                            <fieldset>
                                <legend class="text-primary">Formulaire de contact</legend>
                                <br>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="phone"  class="col-4">Téléphone de l'entreprise</label>
                                        @if(!is_null($company->contacts->phone))
                                            <input id="phone" type="tel" class="form-control col" name="phone"
                                                   value="{{ $company->contacts->phone }}">
                                        @else
                                            <input id="phone" type="tel" class="form-control col" name="phone">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="email"  class="col-4">Mail de l'entreprise</label>
                                        @if(!is_null($company->contacts->email))
                                            <input id="email" type="email" class="form-control col" name="email"
                                                   value="{{ $company->contacts->email }}">
                                        @else
                                            <input id="email" type="email" class="form-control col" name="email">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="wording_address"  class="col-4">Libellé d'adresse</label>
                                        @if(!is_null($company->contacts->wording_address))
                                            <input id="wording_address" type="text" class="form-control col" name="wording_address"
                                                   value="{{ $company->contacts->wording_address }}">
                                        @else
                                            <input id="wording_address" type="text" class="form-control col" name="wording_address">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="town"  class="col-4">Ville</label>
                                        @if(!is_null($company->contacts->town))
                                            <input id="town" type="text" class="form-control col" name="town"
                                                   value="{{ $company->contacts->town }}">
                                        @else
                                            <input id="town" type="text" class="form-control col" name="town">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="zip_code"  class="col-4">Code postale</label>
                                        @if(!is_null($company->contacts->zip_code))
                                            <input id="zip_code" type="text" class="form-control col" name="zip_code"
                                                   value="{{ $company->contacts->zip_code }}">
                                        @else
                                            <input id="zip_code" type="text" class="form-control col" name="zip_code">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="country"  class="col-4">Pays</label>
                                        @if(!is_null($company->contacts->country))
                                            <input id="country" type="text" class="form-control col" name="country"
                                                   value="{{ $company->contacts->country }}">
                                        @else
                                            <input id="country" type="text" class="form-control col" name="country">
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
