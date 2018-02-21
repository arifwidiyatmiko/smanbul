<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="SMA Negeri 1 Cibungbulang">
  <meta name="author" content="arifwidiyatmiko">

  <title><?php echo $this->config->item('title');?></title>

  <!-- css -->
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="<?php echo base_url();?>assets/full-slider.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="<?php echo base_url();?>assets/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

  <!--customs -- >
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
  <!-- boxed bg -->
  <link id="bodybg" href="<?php echo base_url();?>assets/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="<?php echo base_url();?>assets/color/default.css" rel="stylesheet">
  <style type="text/css">
  .affix {
      top: 200px;
      z-index: 9999 !important;
  }
  </style>
  <!-- =======================================================
    Theme Name: Medicio
    Theme URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    Modifier : Arif Widiyatmiko
    Modifier Email : arifwidiyatmiko@outlook.com
  ======================================================= -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom #myScrollspy" >


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
               <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="index.html" style="margin-top: 15px;">SMAN 1 CIBUNGBULANG</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url();?>">Beranda</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil Sekolah <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>Profil">Profil</a></li>
                <li><a href="<?php echo base_url();?>Profil/visimisi">Visi dan Misi</a></li>
                <li><a href="<?php echo base_url();?>Profil/struktur">Struktur Organisasi</a></li>
                <li><a href="<?php echo base_url();?>Profil/prestasi">Prestasi</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akademik <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>Akademik/Guru">Guru</a></li>
                <li><a href="<?php echo base_url();?>Akademik/Siswa">Siswa</a></li>
                <li><a href="<?php echo base_url();?>Akademik/Sarana">Sarana & Prasarana</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url();?>Ekstrakulikuler">Ekstrakulikuler</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fasilitas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="Perpustakaan.smanbul.sch.id">Perpustakaan</a></li>
                <li><a href="elearning.jaban.in">E-Learning</a></li>
                <li><a href="forum.smanbul.sch.id">Forum</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>