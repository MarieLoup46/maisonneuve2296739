@extends('layouts.app')

@section('title', 'Liste des étudiants')

@section('content')
    <hr>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Liste des étudiants</h2>
                    <div class="col-md-12">
                        <a href="{{ route('etudiant.create') }}" class="btn btn-primary">Ajouter</a>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($etudiants as $etudiant)
                            <li class="list-group-item"><a href="{{route('etudiant.show', $etudiant->id)}}">{{ $etudiant->nom }}</a></li>
                        @empty
                            <li class='text-danger'>Aucun étudiant.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection