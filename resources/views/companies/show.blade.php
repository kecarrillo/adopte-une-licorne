@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Affichage de l'entreprise</div>

                    <div class="card-body">

                        <a class="btn btn-success" href="{{ route('companies.index') }}">Retour à la liste</a>

                        <a class="btn btn-warning" href="{{ route('companies.edit', $company->id) }}">Modifier</a>

                        <form action="{{ route('companies.destroy') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $company->id }}">
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>

                        <h2>{{ $company->legal_status }} {{ $company->company_name }}</h2>

                        <br>

                        <h3>Contact:</h3>

                        <p>Tel:  {{ $company->contacts->phone }}</p>
                        <p>Mail: {{ $company->contacts->email }}</p>

                        <br>

                        <h4>Adresse</h4>

                        <p>{{ $company->contacts->wording_address }}</p>
                        <p>{{ $company->contacts->zip_code }} {{ $company->contacts->town }}</p>
                        <p>{{ $company->contacts->country }}</p>

                        <h3>Licornes reproductrices</h3>

                        @if(!is_null($company->unicorns))
                            @foreach($company->unicorns as $unicorn)
                            <li>
                                <a href="{{ route('unicorns.show', $unicorn->id) }}">
                                    {{ $unicorn->name }}
                                </a>
                            </li>
                            @endforeach
                        @else
                            <p>Pas de licornes disponibles pour les saillies.</p>
                        @endif

                        <h3>Elevages</h3>

                        @if(!is_null($company->breeding_id))
                            @foreach($breedings as $breeding)
                                <li>
                                    <a href="{{ route('breeding.show', $company->breeding->id) }}">
                                        {{ $company->breeding->name }}
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <p>Pas d'élevage disponible pour la vente.</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
