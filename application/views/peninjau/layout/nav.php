  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?php echo base_url('peninjau/dashboard')?>">
            <i class="fa fa-dashboard text-aqua"></i> <span>Dashboard</span>
          </a>
        </li>
        <!-- menu produk -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-check"></i> <span>Pemilihan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('peninjau/balon')?>"><i class="fa fa-user-plus"></i> Data Bakal Calon Ketua</a></li>
            <li><a href="<?php echo base_url('peninjau/calon')?>"><i class="fa fa-user-plus"></i> Data Calon Ketua</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cubes"></i> <span>hasil Pemilihan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('peninjau/balon/chart_balon')?>"><i class="fa fa-bar-chart"></i> Hasil Voting Bakal Calon Ketua</a></li>
            <li><a href="<?php echo base_url('peninjau/calon/chart_calon')?>"><i class="fa fa-bar-chart"></i> Hasil Voting Calon Ketua</a></li>
          </ul>
        </li>
        <!-- end menu user -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">