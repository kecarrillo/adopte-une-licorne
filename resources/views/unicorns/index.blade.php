@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Licornes</div>

                    <div class="card-body">

                        <a href="{{ route('home') }}" class="btn btn-secondary" title="Retour sur la page d'accueil">Retour sur la page d'accueil</a>

                        <br>

                        <a href="{{ route('unicorns.create') }}" class="btn btn-success" title="Ajouter une licorne">Ajouter une licorne</a>

                        <br>

                        <ul>
                            @foreach($unicorns as $unicorn)
                                <li>
                                    <a href="{{ route('unicorns.show', $unicorn->id) }}">
                                        {{ $unicorn->legal_status }} {{ $unicorn->unicorn_name }}
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
