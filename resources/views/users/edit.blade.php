@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">
                        <div class="row">
                            <div class="col-1">
                                <a href="{{ route('users.index') }}" title="Retour aux utilisateurs">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.354 10.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-11">
                                <h1>
                                    Modification d'un utilisateur
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <fieldset>

                                <legend class="text-primary">{{$user->name}}</legend>
                                <br>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="role_id" class="col-4">Rôle</label>
                                        @if(!is_null($user->role_id))
                                            <select id="role_id" type="text" name="role_id" class="form-control col" multiple>
                                                <option value="{{ $user->role_id }}" >{{ $user->role_id }}</option>
                                                <option value="1" >Admin</option>
                                                <option value="2" >Acheteur</option>
                                                <option value="3" >Eleveur</option>
                                                <option value="4" >Reproducteur</option>
                                            </select>
                                        @else
                                            <select id="role_id" type="text" name="role_id" class="form-control col" multiple>
                                                <option value="1" >Admin</option>
                                                <option value="2" >Acheteur</option>
                                                <option value="3" >Eleveur</option>
                                                <option value="4" >Reproducteur</option>
                                            </select>
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
