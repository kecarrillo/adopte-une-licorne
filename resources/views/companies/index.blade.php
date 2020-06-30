@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Entreprises</div>

                    <div class="card-body">

                        <a href="{{ route('home') }}" class="btn btn-secondary" title="Retour sur la page d'accueil">Retour sur la page d'accueil</a>

                        <br>

                        <a href="{{ route('companies.create') }}" class="btn btn-success" title="Ajouter une entreprise">Ajouter une entreprise</a>

                        <br>

                        <ul>
                            @foreach($companies as $company)
                                <li>
                                    <a href="{{ route('companies.show', $company->id) }}">
                                        {{ $company->legal_status }} {{ $company->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
