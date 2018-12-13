

<?php 
include_once('server.php');
$sql = "SELECT DISTINCT pais FROM `registo`";
$resultado = mysqli_query($db,$sql);
#$dados = mysqli_fetch_array($resultado);

?>

  <!-- Navbar -->
      <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="funcionario.php" class="nav-link">Home</a>
          </li>
          
        </ul>

      </nav>
      <!-- /.navbar -->

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
            
            <div class="info">
              <a href="#" class="d-block"><?php echo $_SESSION['nomeUserFunc'];  ?> </a>
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
                    <a href="cadastraaluno.php" class="nav-link">
                      <i class=""></i>
                      <p>Novo Estudante</p>
                    </a>
                  </li>
                  <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                      <i class="fa fa-address-card-o"></i>
                      <p> Meus Dados
                        <i class="right fa fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="dadosfuncionario.php" class="nav-link">
                      <i class=""></i>
                      <p>Alterar Meus Dados</p>
                    </a>
                    </li>
                  </ul>
                  </li><br>
                  <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                 <i class="fa fa-globe fa-1x "></i>
                  <p> Estudantes em
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <?php while($dados = mysqli_fetch_array($resultado)){  ?>
                  <li class="nav-item">
                    <a href="tabelapais.php?pais=<?php echo $dados['pais']; ?>" class="nav-link">
                      <i class=""></i>
                      <p><?php echo $dados['pais']; ?></p>
                    </a>
                  </li>
                <?php } ?>
              </li><br>
             </ul>
                  <li class="nav-item">
                    <a href="sair.php" class="nav-link">
                      <i class="fa fa-power-off"></i>
                      <p>Sair</p>
                    </a>
                  </li>
                </ul>
              </li>

                
        <!-- /.sidebar -->
      </aside>