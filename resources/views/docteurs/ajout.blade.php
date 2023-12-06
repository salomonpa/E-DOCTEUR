@extends('layouts.mainlayout')

@section('content')




<div class="pagetitle">

  <div>

    @if (session('status'))
  <div class="alert alert-success">
  {{session('status')}}
  </div>

  @endif
<ul>
@foreach ($errors->all() as $error)
  <li class="alert alert-danger"> {{ $error }}</li>
@endforeach
</ul>
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
                <h5 class="card-title">Ajout d'un docteur </h5>

              <form method="POST" action="{{route('docteurs.store')}}" class="row g-3" enctype="multipart/form-data">
                @csrf
              <div class="col-md-6">
                <label for="inputName5" class="form-label">Nom </label>
                <input type="text" class="form-control" name="nom">
              </div>
              @csrf
              <div class="col-md-6">
                <label for="inputPrenom5" class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenom">
              </div>



              <div class="col-md-6">
                <label for="inputDatenaissance5" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" name="date_naissance">
              </div>

              <div class="col-6">
                <label for="inputAdresse5" class="form-label">Adresse</label>
                <input type="text" class="form-control" name="adresse">
              </div>


              <div class="col-6">
                <label for="inputSexe5" class="form-label">Sexe</label>
                <input type="text" class="form-control" name="sexe">
              </div>

              

              <div class="col-6">
                <label for="inputSpecialite5" class="form-label">Spécialité</label>
                <input type="text" class="form-control" name="specialite">
              </div>



              <div class="col-6">
                <label for="inputTelephone5" class="form-label">Teléphone </label>
                <input type="number" class="form-control" name="telephone">
              </div>

            

              
                <div class="col-6 mt-5">
                    <input type="file" name="photo" class="form-control" placeholder="photo">
               </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
              </div>
            </form>

              </div>

            </div>
          </div>
          <!-- End Formulaire inscription docteur -->

        </div>
      </div>
      <!-- End Left side columns -->

    </div>
  </section>
  @include('require.footer')

@endsection