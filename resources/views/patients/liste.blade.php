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
            <h3>LISTE DES PATIENTS</h3>
        </div>
        <div class="card">
          
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Age</th>
                  <th scope="col">Adresse</th>
                  <th scope="col">Téléphone</th>
                  <th scope="col">Dernière visite</th>
                  <th scope="col">Actions</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach (  $patients as $pat )
                <tr>
                  <td>{{ $pat->id }}</td>
                  <td>{{ $pat->nom }}</td>
                  <td>{{ $pat->prenom }}</td>
                  <td>{{ $pat->age }}</td>
                  <td>{{ $pat->adresse }}</td>
                  <td>{{ $pat->telephone }}</td>
                  <td>{{ $pat->derniere_visite }}</td>
                       
            {{-- <img src="{{asset('storage') . '/' . $etud->image}}" class="" alt="..."> --}}
  
          <td>          
            <a href="{{ route('patients.show', $pat->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
            <a href="{{ route('patients.edit', $pat->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
            <a href="{{ url('supprimer-patients/' .$pat->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>

            
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