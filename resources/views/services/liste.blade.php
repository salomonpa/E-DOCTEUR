@extends('layouts.mainlayout')
@section('content')


@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif




<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

           <div class="text-center">
            <p>LISTE DES SALLES</p>
        </div>
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">N</th>
                  <th scope="col">Type de service</th>
                  <th scope="col">Description</th>
                
                 
                  
                </tr>
              </thead>
              <tbody>
                <tbody>
                  @foreach ($services as $ser )
                  <tr>
                    <td>{{ $ser->id }}</td>
                    <td>{{ $ser->type_service }}</td>
                    <td>{{ $ser->description }}</td>
                    
                   
                   

                    <td>          
                      <a href="{{ route('services.show', $sa->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                      <a href="{{ route('services.edit', $sa->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                      <a href="{{ url('supprimer-services/'.$sa->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>                   
                  </td>
                   
            
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