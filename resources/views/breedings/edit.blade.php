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
                                    Modification d'un élevage
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('breedings.update', $breeding->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            fieldset>

                            <legend class="text-primary">{{$breeding->name}}</legend>
                            <br>

                                <div class="form-group">
                                    <label for="name" class="col-4">Son nom</label>
                                        @if(!is_null($breeding->name))
                                        <input id="name" type="text" name="name" class="form-control col"
                                            value="{{ $breeding->name }}">
                                        @else
                                        <input id="name" type="text" name="name" class="form-control col">
                                        @endif
                                </div>

                                <div class="form-group">
                                    <label for="nb_unicorn" class="col-4">Nombre de cornes</label>
                                        @if(!is_null($breeding->nb_unicorn))
                                        <input id="nb_unicorn" type="text" name="nb_unicorn" class="form-control col"
                                            value="{{ $breeding->nb_unicorn }}">
                                        @else
                                        <input id="nb_unicorn" type="text" name="nb_unicorn" class="form-control col">
                                        @endif
                                </div>

                                <div class="form-group">
                                    <label for="unit_cost_HT" class="col-4">Coût par tête</label>
                                        @if(!is_null($breeding->unit_cost_HT))
                                        <input id="unit_cost_HT" type="text" name="unit_cost_HT" class="form-control col"
                                            value="{{ $breeding->unit_cost_HT }}">
                                        @else
                                        <input id="unit_cost_HT" type="text" name="unit_cost_HT" class="form-control col">
                                        @endif
                                </div>

                                <div class="form-group">
                                    <label for="gender" class="col-4">Sexe</label>
                                        @if(!is_null($breeding->gender))
                                            <select class="form-control" id="gender" name="gender">
                                                <option value="{{ $breeding->gender }}" selected>{{ $breeding->gender }}</option>
                                                <option value="Femelle">Femelle</option>
                                                <option value="Mâle">Mâle</option>
                                                <option value="Alien">Alien</option>
                                                <option value="Mixte">Mixte</option>
                                            </select>
                                        @else
                                            <select class="form-control" id="gender" name="gender">
                                                <option value="Femelle" selected>Femelle</option>
                                                <option value="Mâle">Mâle</option>
                                                <option value="Alien">Alien</option>
                                                <option value="Mixte">Mixte</option>
                                            </select>
                                        @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
