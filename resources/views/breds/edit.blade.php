@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <div class="row">
                            <div class="col-1">
                                <a href="{{ route('breds.index') }}" title="Retour aux saillies">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.354 10.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-11">
                                <h1>
                                    Modification d'une saillie
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('breds.update', $bred->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <fieldset>

                                <legend class="text-primary">{{$bred->date}}</legend>
                                <br>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="date" class="col-4">Date de la saillie</label>
                                        @if(!is_null($bred->date))
                                        <input id="date" type="number" min="0" name="date"
                                            value="{{ $bred->date }}" class="col">
                                        @else
                                        <input id="date" type="number" min="0" name="date" class="col">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="unicorn_id" class="col-4">Pour cette bête</label>
                                        @if(!is_null($bred->unicorn_id))
                                        <input id="unicorn_id" type="text" name="unicorn_id"
                                            value="{{ $bred->unicorn_id }}" class="col">
                                        @else
                                        <input id="unicorn_id" type="text" name="unicorn_id" class="col">
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="company_id" class="col-4">Son new proprio</label>
                                        @if(!is_null($bred->company_id))
                                        <input id="company_id" type="number" min="0" name="company_id"
                                            value="{{ $bred->company_id }}" class="col">
                                        @else
                                        <input id="company_id" type="number" min="0" name="company_id" class="col">
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
