@extends('layouts.mainlayout')
@section('content')

@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

<section class="section">
  <div>

   

    <div class="row mt-3">
      <div class="col-lg-12">
        <div class="card-body">
           
          <div class="text-center text-primary">
            <h3>LISTE DES DOCTEURS</h3>
        </div>
        <div class="card">
          
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Date de naissance</th>
                  <th scope="col">Adresse</th>
                  <th scope="col">Sexe</th>
                  <th scope="col">Spécialité</th>
                  <th scope="col">Téléphone</th>
                  <th scope="col">Photo</th>
                  <th scope="col">Actions</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach (  $docteurs as $doc )
                <tr>
                  <td>{{ $doc->id }}</td>
                  <td>{{ $doc->nom }}</td>
                  <td>{{ $doc->prenom }}</td>
                  <td>{{ $doc->date_naissance }}</td>
                  <td>{{ $doc->adresse }}</td>
                  <td>{{ $doc->sexe }}</td>
                  <td>{{ $doc->specialite }}</td>
                  <td>{{ $doc->telephone }}</td>
                  
                 
              <td> <img src="{{asset('storage') . '/' . $doc->photo}}" class="h-25 w-25" alt="..."></td>
  
          <td>          
            <a href="{{ route('docteurs.show', $doc->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
            <a href="{{ route('docteurs.edit', $doc->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
            <a href="{{ url('supprimer-docteur/' .$doc->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>

            
        </td>
         </tr>
                @endforeach
              </tbody>

            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection