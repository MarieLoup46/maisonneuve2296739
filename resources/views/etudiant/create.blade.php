@extends('layouts.app')
@section('title', 'Ajouter un étudiant')

@section('content')
<div class="row">
        <div class="col-12 text-center pt-2">
            <h1 class="display-one">
                Ajouter un étudiant
            </h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <form method="post">
                @csrf
                    <div class="card-header text-primary">
                        Formulaire
                    </div>
                    <div class="card-body">   
                        <div class="control-grup col-12 mb-3">
                            <label class="fw-bold" for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control">
                        </div>
                        <div class="control-grup col-12 mb-3">
                            <label class="fw-bold" for="adresse">Adresse</label>
                            <input type="text" id="adresse" name="adresse" class="form-control">
                        </div>
                        <div class="control-grup col-12 mb-4">
                            <label class="fw-bold" for="ville_id">Ville</label>
                            <select name="ville_id" id="ville_id">
                                @foreach($villes as $ville)
                                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="control-grup col-12 mb-3">
                            <label class="fw-bold" for="phone">Téléphone</label>
                            <input type="text" id="phone" name="phone" class="form-control">
                        </div>
                        <div class="control-grup col-12 mb-3">
                            <label class="fw-bold" for="email">Courriel</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                        <div class="control-grup col-12 mb-3">
                            <label class="fw-bold" for="date_naissance">Date de naissance</label>
                            <input type="date_naissance" id="date_naissance" name="date_naissance" placeholder="aaaa-mm-jj" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer mb-3 text-center">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
