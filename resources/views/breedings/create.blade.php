@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajout d'un élevage</div>

                    <div class="card-body">

                        <a href="{{ route('breedings.index') }}" class="btn btn-danger" title="Retour vers breedings">
                            élevages
                        </a>

                        <form action="{{ route('breedings.store') }}" method="POST">
                            @csrf

                            <legend>Votre nouvel élevage</legend>
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" name="name"  >
                            </div>
                            <div class="form-group">
                                <label for="nb_unicorn">Nombre de licornes dans cet élevage</label>
                                <input type="text" class="form-control" name="nb_unicorn" >
                            </div>
                            <div class="form-group">
                                <label for="unit_cost_HT">Prix d'une ces bêtes</label>
                                <input type="text" class="form-control" name="unit_cost_HT" >
                            </div>
                            <div class="form-group">
                                <label for="gender">Genre de l'élevage</label>
                                <select class="form-control" id="gender" name="gender">
                                    <option>Femelles</option>
                                    <option>Mâles</option>
                                    <option>Alien</option>
                                    <option>Mixed</option>
                                </select>
                            </div>
                            <!-- <div class="form-group">
                                <label for="gender">Genre de l'élevage</label>
                                <input type="date" class="form-control" name="gender" >
                            </div> -->

                            <button type="submit" class="btn btn-primary">Envoyer</button>
                            
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
