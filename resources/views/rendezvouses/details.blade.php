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

  <section class="section profile">
    <div class="row">
      
     <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Details</button>
              </li>

              <li class="nav-item">
                {{-- <a href="{{ etudiant.liste }}"  class="nav-link">Voir la liste</a> --}}
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Nom</div>
                  <div class="col-lg-9 col-md-8">{{ $rendezvous->nom }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Prénom</div>
                  <div class="col-lg-9 col-md-8">{{ $rendezvous->prenom }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Age</div>
                  <div class="col-lg-9 col-md-8">{{ $rendezvous->age }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Adresse</div>
                  <div class="col-lg-9 col-md-8">{{ $rendezvous->adresse }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Sexe</div>
                  <div class="col-lg-9 col-md-8">{{ $rendezvous->sexe }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Téléphone</div>
                  <div class="col-lg-9 col-md-8">{{ $rendezvous->telephone }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Date</div>
                    <div class="col-lg-9 col-md-8">{{ $rendezvous->date }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Heure</div>
                    <div class="col-lg-9 col-md-8">{{ $rendezvous->heure }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Statut</div>
                    <div class="col-lg-9 col-md-8">{{ $rendezvous->statut }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Docteur</div>
                    <div class="col-lg-9 col-md-8">{{$rendezvous->docteur }}</div>
                  </div>

                 
  
  
  
  

                

              </div>

          </div>
        </div>

      </div>
    </div>
  </section>
  

@endsection
