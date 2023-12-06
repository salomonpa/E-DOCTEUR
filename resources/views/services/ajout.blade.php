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


  <section class="section dashboard">
    <div class="row">
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Formulaire ajout salle -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title text-center">Ajout d'un Service</h5>

                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif

              <form class="row g-3" action="{{ route('services.store') }}" method="POST">
                @csrf
              <div class="col-md-12">
                <label for="inputTypeservice" class="form-label">Type de Service</label>
                <input type="text" class="form-control" name="type_service">
              </div>

              <div class="col-md-12">
                <label for="inputDescriptin" class="form-label">Description</label>
                <input type="text" class="form-control" name="description">
              </div>
              

             
            
              <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
              </div>
            </form>

              </div>

            </div>
          </div>
          <!-- End Formulaire salle -->
        </div>
    </div>
    <!-- End Left side columns -->

  </div>
</section>


@endsection