@extends('layouts.mainlayout')
@section('content')

<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Nouvelle inscription</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire inscription etudiant -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title text-center">Modifier un patient</h5>

                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif

              <form class="row g-3" action="{{ route('etudiants.update', $patients->id) }}" method="POST"  enctype="multipart/form-data">
                @method('PATCH')
                @csrf
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $patients->nom }}">
              </div>
              

              <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputPrenom" class="form-label">Prenom</label>
                  <input type="text" class="form-control" name="prenom" value="{{ $patients->prenom }}">
                </div>

              

              <div class="col-md-6">
                <label for="inputage" class="form-label">Age</label>
                <input type="text" class="form-control" name="age" value="{{ $patients->age }}">
              </div>

              <div class="col-md-6">
                <label for="inputAdresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" name="adresse" value="{{ $patients->adresse }}">
              </div>

              <div class="col-md-6">
                <label for="inputTelephone" class="form-label">Téléphone</label>
                <input type="integer" class="form-control" name="date_naiss" value="{{ $patients->telephone }}">
              </div>
              <div class="col-md-6">
                <label for="inputDatevisite" class="form-label">Dernière visite</label>
                <input type="date" class="form-control" name="derniere_visite" value="{{ $patients->derniere_visite }}">
              </div>


              <div class="col-md-6">
                <label for="inputState" class="form-control"></label>
                    <select name="niveau_etude" value="{{ $patients->niveau_etude }}" class="form-select" >
                        <option>Choisir le niveau ...</option>
                        <option>1ere année</option>
                        <option>2eme année</option>
                        <option>3eme année</option>
                        <option>4eme année</option>
                        <option>5eme année</option>
                        <option>6eme année</option>
                        <option>7eme année</option>
                    </select>
                </div>

              <div class="col-md-6">
                <label for="inputState" class="form-control">Filière étudiant</label>
                <select name="filiere"  value="{{ $etudiants->filiere }}" class="form-select">
                  <option>Choisir la filière ...</option>
                  <option>Informatique de Gestion</option>
                  <option>Reseaux Informatique</option>
                  <option>Comptabilité Générale</option>
                  <option>Communication Digitale</option>
                </select>
              </div>

              <div class="row mt-3">
                <div class="col-lg-12">
                  <label for="inputPhoto" class="form-label">Photo</label>
                    <input type="file" name="photo_etudiant" class="form-control"  value="{{ $etudiants->photo }}">
                </div>


              <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
              </div>
            </form>

              </div>

            </div>
          </div>
          <!-- End Formulaire inscription etudiant -->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>
  

@endsection
