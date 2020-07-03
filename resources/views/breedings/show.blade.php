@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-1">
                                <a href="{{ route('breedings.index') }}">
                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.354 10.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-9">
                                <h1 class="text-primary">
                                    {{ $breeding->name }}
                                </h1>
                            </div>
                            <div class="col-1">
                                <a href="{{ route('breedings.edit', $breeding->id) }}">
                                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-pencil-square text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-1">
                                <form action="{{ route('breedings.destroy') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $breeding->id }}">
                                    <button type="submit" class="no-background no-border">
                                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x-circle-fill text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.146-3.146a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <h2 class="text-success">Détails</h2>

                        <br>

                        <div class="row">
                            <p class="col-4"><strong>Nombre de licornes:</strong></p>
                            <p class="col">{{ $breeding->nb_unicorn }}</p>
                        </div>

                        <div class="row">
                            <p class="col-4"><strong>Sexe:</strong></p>
                            <p class="col">{{ $breeding->gender }}</p>
                        </div>

                        <div class="row">
                            <p class="col-4"><strong>Prix de vente unitaire:</strong></p>
                            <p class="col">{{ $breeding->unit_cost_HT }}</p>
                        </div>

                        <div class="row">
                            <p class="col-4"><strong>Prix unitaire:</strong></p>
                            <p class="col">{{ $breeding->companies->legal_status }} {{ $breeding->companies->company_name }}</p>
                        </div>

                        <br>
                        <p>Si cela vous intéresse</p>
                        <a href="{{ route('commands.create') }}">
                            <button  type="submit" class="btn btn-success">COMMANDEZ EN</button>
                        </a>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
@endsection
