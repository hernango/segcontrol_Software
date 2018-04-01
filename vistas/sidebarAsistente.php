<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="img/avatar3.png" class="img-circle" alt="User Image" />
    </div>
    <div class="pull-center info">
      <p>Bienvenido<br>  <?php echo "".$sesion_nombre ?></p>

      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search..."/>
      <span class="input-group-btn">
        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </form>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="active">
      <a href="index.html">
        <i class="fa fa-dashboard"></i> <span>Asistente</span>
      </a>
    </li>
    <li>
      <li>
        <a href="" id="Principal">
          <i class="fa fa-bar-chart-o"></i> <span>Principal</span>
        </a>
      </li>
      <a href="" id="menuCuenta">
        <i class="fa fa-th"></i> <span>Cuenta</span>
      </a>
    </li>
    <li>
      <a href="" id="menuServicios">
        <i class="fa fa-th"></i> <span>Servicio</span>
      </a>
    </li>

  </ul>
</section>
<!-- /.sidebar -->
