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
                <h5 class="card-title text-center">Ajouter un patient</h5>

                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif

              <form class="row g-3" action="{{ route('patients.store') }}" method="POST">
                @csrf
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom">
              </div>
              

              <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputPrenom" class="form-label">Prénom</label>
                  <input type="text" class="form-control" name="prenom">
                </div>

              

              <div class="col-md-6">
                <label for="inputAge" class="form-label">Age</label>
                <input type="int" class="form-control" name="age">
              </div>

            
              <div class="col-md-6">
                <label for="inputAdresse5" class="form-label">Adresse</label>
                <input type="text" class="form-control" name="adresse">
              </div>

              <div class="col-md-6">
                <label for="inputTelephone5" class="form-label">Téléphone</label>
                <input type="number" class="form-control" name="telephone">
              </div>

              <div class="col-md-6">
                <label for="inputvisite5" class="form-label">Dernière visite</label>
                <input type="date" class="form-control" name="derniere_visite">
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
