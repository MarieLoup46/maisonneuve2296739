@extends('layouts.app')

@section('title', 'Mettre à jour')

@section('content')
<div class="row">
        <div class="col-12 text-center pt-2">
            <h1 class="display-one">
                Mettre à jour
            </h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <form method="post">
                @method('put')
                @csrf
                    <div class="card-header text-primary">
                        Formulaire
                    </div>
                    <div class="card-body">   
                        <div class="control-grup col-12 mb-3">
                            <label class="fw-bold" for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control" value="{{ $etudiant->nom }}">
                        </div>
                        <div class="control-grup col-12 mb-3">
                            <label class="fw-bold" for="adresse">Adresse</label>
                            <input type="text" id="adresse" name="adresse" class="form-control" value="{{ $etudiant->adresse }}">
                        </div>
                        <div class="control-grup col-12 mb-4">
                            <label class="fw-bold" for="ville_id">Ville</label>
                            <select name="ville_id" id="ville_id">
                                @foreach($villes as $ville)
                                    @if($etudiant->ville_id === $ville->id)
                                        <option value="{{ $ville->id }}" selected>{{ $ville->nom }}</option>
                                    @else
                                    <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="control-grup col-12 mb-3">
                            <label class="fw-bold" for="phone">Téléphone</label>
                            <input type="text" id="phone" name="phone" class="form-control" value="{{ $etudiant->phone }}">
                        </div>
                        <div class="control-grup col-12 mb-3">
                            <label class="fw-bold" for="email">Courriel</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{ $etudiant->email }}">
                        </div>
                        <div class="control-grup col-12 mb-3">
                            <label class="fw-bold" for="date_naissance">Date de naissance</label>
                            <input type="text" id="date_naissance" name="date_naissance" class="form-control" value="{{ $etudiant->date_naissance }}">
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
