<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard-Edocteur</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('asset/img/favicon.png')}}" rel="icon">
  <link href="{{asset('asset/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.gstatic.com')}}" rel="preconnect">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title">Remplissez ce formulaire pour prendre un rendez-vous! </h5>

                <form method="POST" action="{{ route('rendezvouses.store') }}" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputName5" class="form-label">Nom </label>
                        <input type="text" class="form-control" name="nom">
                    </div>

                    <div class="col-md-6">
                        <label for="inputPrenom5" class="form-label">Prénom</label>
                        <input type="text" class="form-control" name="prenom">
                    </div>



                    <div class="col-md-6">
                        <label for="inputPassword5" class="form-label">Age</label>
                        <input type="number" class="form-control" name="age">
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
                        <label for="inputTelephone5" class="form-label">Téléphone</label>
                        <input type="number" class="form-control" name="telephone">
                    </div>




                    <div class="col-6">
                        <label for="inputDaterdv5" class="form-label">Date du rendez-vous</label>
                        <input type="date" class="form-control" name="date_rdv">
                    </div>


                    <div class="col-6">
                        <label for="inputHeure5" class="form-label">Heure du rendez-vous</label>
                        <input type="time" class="form-control" name="heure_rdv">
                    </div>

                    <div class="col-md-6">
                        <label for="" class="form-label">Choisir un docteur</label>
                        <select class="form-control" name="docteurs_id">
                            <option>Selectionner un Docteur</option>
                            @foreach ($docteurs as $docteur)
                                <option value="{{ $docteur->id }}">{{ $docteur->nom }} {{ $docteur->prenom }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-6">

                        <select name="statut" class="form-select" hidden>
                            <option value="En attente">
                            <option>

                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <button type="reset" class="btn btn-danger">Annuler</button>
                    </div>
                </form>

            </div>

        </div>
    </div>


</body>
</html>
    
    
    