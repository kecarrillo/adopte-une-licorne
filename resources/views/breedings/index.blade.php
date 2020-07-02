@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-3">
                                <h1>Elevages</h1>
                            </div>
                            <div class="col-8">
                                <a href="{{ route('breedings.create') }}" title="Ajouter une entreprise">
                                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill text-success" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4a.5.5 0 0 0-1 0v3.5H4a.5.5 0 0 0 0 1h3.5V12a.5.5 0 0 0 1 0V8.5H12a.5.5 0 0 0 0-1H8.5V4z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-1">
                                <a href="{{ route('home') }}" title="Retour sur la page d'accueil">
                                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-house-door-fill text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"/>
                                        <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-10">
                                <h3>Elevages</h3>
                            </div>
                            <div class="col-2">
                                <h3>Actions</h3>
                            </div>
                        </div>
                        <hr>
                        @foreach($breedings as $breeding)
                            <div class="row">
                                <span class="col-10">
                                    <a href="{{ route('breedings.show', $breeding->id) }}">
                                        {{ $breeding->name }} {{ $breeding->nb_unicorn }}
                                    </a>
                                </span>
                                <span class="col-2">
                                    <span class="row">
                                        <span class="col">
                                            <a href="{{ route('breedings.edit', $breeding->id) }}">
                                                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-pencil-square text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </a>
                                        </span>
                                        <span class="col">
                                            <form action="{{ route('breedings.destroy') }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $breeding->id }}">
                                                <button class="no-border no-background" type="submit">
                                                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x-circle-fill text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.146-3.146a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </span>
                                    </span>
                                </span>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
