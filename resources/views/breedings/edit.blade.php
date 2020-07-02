@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modification d'un élevage</div>

                    <div class="card-body">

                        <a href="{{ route('breedings.index') }}" class="btn btn-danger" title="Retour aux élevages">
                            Retour aux élevages
                        </a>
                        <form action="{{ route('breedings.update', $breeding->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                                <legend>Elevage {{$breeding->name}}</legend>

                                <div class="form-group">
                                    <label for="name">Son nom</label>
                                        @if(!is_null($breeding->name))
                                        <input id="name" type="text" name="name"
                                            value="{{ $breeding->name }}">
                                        @else
                                        <input id="name" type="text" name="name">
                                        @endif
                                </div>

                                <div class="form-group">
                                    <label for="nb_unicorn">Son nom</label>
                                        @if(!is_null($breeding->nb_unicorn))
                                        <input id="nb_unicorn" type="text" name="nb_unicorn"
                                            value="{{ $breeding->nb_unicorn }}">
                                        @else
                                        <input id="nb_unicorn" type="text" name="nb_unicorn">
                                        @endif
                                </div>

                                <div class="form-group">
                                    <label for="unit_cost_HT">Sa période d'accouplement</label>
                                        @if(!is_null($breeding->unit_cost_HT))
                                        <input id="unit_cost_HT" type="text" name="unit_cost_HT"
                                            value="{{ $breeding->unit_cost_HT }}">
                                        @else
                                        <input id="unit_cost_HT" type="text" name="unit_cost_HT">
                                        @endif
                                </div>

                                <div class="form-group">
                                    <label for="gender">Début de la période</label>
                                        @if(!is_null($breeding->gender))
                                        <input id="gender" type="date" name="gender"
                                            value="{{ $breeding->gender }}">
                                        @else
                                        <input id="gender" type="date" name="gender">
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
