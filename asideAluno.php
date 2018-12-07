<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="img/core-img/icone.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CheckNotes</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="isac.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">

          <a href="#" class="d-block"> <?php  echo $_SESSION['username'] ?> </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="fa fa-gear"></i>
              <p> Opções
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="notas.php" class="nav-link">
                  <i class="fa fa-file-text-o"></i>
                  <p>Lançar notas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="dadosaluno.php" class="nav-link">
                  <i class="fa fa-address-card-o"></i>
                  <p>Meus Dados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="alunologar.php" class="nav-link">
                  <i class="fa fa-power-off"></i>
                  <p>Sair</p>
                </a>
              </li>
            </ul>
          </li>
            
    <!-- /.sidebar -->
  </aside>