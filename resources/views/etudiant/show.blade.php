@extends('layouts.app')

@section('title', 'Informations de l\'étudiant')

@section('content')
    <div class="row">
        <div class="col-12">
            <a href="{{ route('etudiant.index') }}" class="btn btn-outline-primary btn-sm">Retourner</a>
            <h4 class="display-4 mt-5">
                {{ $etudiant->nom }}
            </h4>
            <hr>
            <p>
            <span class="text-primary">Adresse : </span> {{ $etudiant->adresse }}
            </p>
            <p>
                <!-- la fonction 'etudiantVille' est déclaré dans le model Etudiant -->
                <span class="text-primary">Ville : </span> {{ $etudiant->etudiantVille->nom }}
            </p>
            <p>
            <span class="text-primary">Téléphone : </span> {{ $etudiant->phone }}
            </p>
            <p>
            <span class="text-primary">Courriel : </span> {{ $etudiant->email }}
            </p>
            <p>
            <span class="text-primary">Date de naissance : </span> {{ $etudiant->date_naissance }}
            </p>
        </div>
    </div>

    <hr>
    <div class="row mb-5">
        <div class="col-6">
            <a href="{{ route('etudiant.edit', $etudiant->id) }}" class="btn btn-primary">Mettre à jour</a>
        </div>
        <div class="col-6">
            <!-- Provient de https://getbootstrap.com/docs/5.3/components/modal/ -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Effacer</button>
        </div>
    </div>
    <!-- Provient de https://getbootstrap.com/docs/5.3/components/modal/ -->
    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Voulez-vous vraiment effacer cet étudiant? {{ $etudiant->nom }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{ route('etudiant.delete', $etudiant->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="effacer" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
@endsection
