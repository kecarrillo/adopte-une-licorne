@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-1">
                                <a href="{{ route('commands.index') }}" title="Retour aux commandes">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.354 10.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-11">
                                <h1>
                                    Modification d'une commande
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('commands.update', $command->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <legend class="text-primary">{{ $command->unicorn_id }}</legend>
                                <br>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="unicorn_id"  class="col-4">Elevage commandé</label>
                                        @if(!is_null($command->unicorn_id))
                                            <input id="unicorn_id" type="text" class="form-control col" name="unicorn_id"
                                                   value="{{ $command->unicorn_id }}">
                                        @else
                                            <input id="unicorn_id" type="text" class="form-control col" name="unicorn_id">
                                        @endif
                                    </div>
                                </div>
                                <input id="contact_id" type="hidden" name='contact_id' value="{{ $command->contact_id }}">

                            </fieldset>
                            <br>

                            @method('PUT')
                            <fieldset>
                                <legend class="text-primary">Quantité</legend>
                                <br>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="quantity"  class="col-4">Quantité</label>
                                        @if(!is_null($command->contacts->quantity))
                                            <input id="quantity" type="tel" class="form-control col" name="quantity"
                                                   value="{{ $command->contacts->quantity }}">
                                        @else
                                            <input id="quantity" type="tel" class="form-control col" name="quantity">
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
