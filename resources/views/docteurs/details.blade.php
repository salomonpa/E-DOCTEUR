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
      <div class="col-xl-4">

        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="{{ asset('storage').'/'.$docteur->photo_docteur}}" alt="Profile" class="rounded-circle">
            <h2>{{ $docteur->nom }} {{ $docteur->prenom }}</h2>
            <h3>{{ $docteur->filiere }}</h3>
           
          </div>
        </div>

      </div>

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
                  <div class="col-lg-9 col-md-8">{{ $docteur->nom }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Prénom</div>
                  <div class="col-lg-9 col-md-8">{{ $docteur->prenom }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Date de naissance</div>
                  <div class="col-lg-9 col-md-8">{{ $docteur->date_naiss }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">{{ $docteur->email }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Niveau d'étude</div>
                  <div class="col-lg-9 col-md-8">{{ $docteur->niveau_etude }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Filière</div>
                  <div class="col-lg-9 col-md-8">{{ $docteur->filiere }}</div>
                </div>

                

              </div>

          </div>
        </div>

      </div>
    </div>
  </section>
  

@endsection
