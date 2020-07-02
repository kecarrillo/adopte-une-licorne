@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout d'une saillie</div>

                    <div class="card-body">

                        <a href="{{ route('breds.index') }}" class="btn btn-danger" title="Retour vers breeds">
                            saillies
                        </a>

                        <form action="{{ route('breds.store') }}" method="POST">
                            @csrf

                            <legend>Nouvelle saillie</legend>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" name="date"  >
                            </div>
                            <div class="form-group">
                                <label for="nb_unicorn">La bête en question</label>
                                <input type="text" class="form-control" name="nb_unicorn" >
                            </div>
                            <div class="form-group">
                                <label for="company_id">Proprio</label>
                                <input type="text" class="form-control" name="company_id" >
                            </div>

                            <button type="submit" class="btn btn-primary">Envoyer</button>
                                                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
