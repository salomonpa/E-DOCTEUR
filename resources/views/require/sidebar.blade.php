<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="dashboard">
        <i class="bi bi-grid"></i>
        <span>MENU</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Gestion Spécialistés</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('specialites.index')}}">
            <i class="bi bi-circle"></i><span>Liste Spécialistés</span>
          </a>
        </li>
        <li>
          <a href="{{route('specialites.create')}}">
            <i class="bi bi-circle"></i><span>Ajouter Spécialisté</span>
          </a>
        </li>

      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Gestion Docteurs</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route("docteurs.index")}}">
            <i class="bi bi-circle"></i><span>Liste des Docteurs</span>
          </a>
        </li>
        <li>
          <a href={{route("docteurs.create")}}>
            <i class="bi bi-circle"></i><span>Ajouter Docteur</span>
          </a>
        </li>

      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Gestion Patients</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route("patients.index")}}">
            <i class="bi bi-circle"></i><span>Liste des Patients</span>
          </a>
        </li>
        <li>
          <a href={{route("patients.create")}}>
            <i class="bi bi-circle"></i><span>Ajouter Patients</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Gestion Rendez-vous</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href={{route("rendezvouses.index")}}>
            <i class="bi bi-circle"></i><span>Liste Rendez-vous</span>
          </a>
        </li>
        <li>
          <a href={{route("rendezvouses.create")}}>
            <i class="bi bi-circle"></i><span>Ajouter Rendez-vous</span>
          </a>
        </li>

      </ul>
  </li><!-- End Charts Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav_2" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Gestion Services</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav_2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href={{route("services.index")}}>
            <i class="bi bi-circle"></i><span>Liste Service</span>
          </a>
        </li>
        <li>
          <a href={{route("services.create")}}>
            <i class="bi bi-circle"></i><span>Ajouter Service</span>
          </a>
        </li>

      </ul>
  

</aside>