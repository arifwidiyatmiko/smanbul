<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $this->config->item('title');?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/admin/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css">

    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/colpick.css" type="text/css"/> -->
    <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('Editor');?>"><?php echo $this->config->item('title');?> Dashboard</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       <li><a href="<?php echo base_url('Editor/out');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('Editor');?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Editor/list/pages');?>"><i class="fa fa-edit fa-fw"></i> Halaman</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Editor/list/post');?>"><i class="fa fa-file-powerpoint-o fa-fw"></i> Post</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Editor/prestasi');?>"><i class="fa  fa fa-flag-checkered fa-fw"></i> Prestasi</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Editor/Ekstrakulikuler');?>"><i class="fa  fa-rocket fa-fw"></i> Ekstrakulikuler</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Editor/Sarana');?>"><i class="fa fa-asl-interpreting fa-fw"></i> Sarana</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Editor/headlines');?>"><i class="fa fa fa-newspaper-o fa-fw"></i> Headlines</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Editor/slider');?>"><i class="fa fa fa-television fa-fw"></i> Slider</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Editor/paralax');?>"><i class="fa fa fa-ticket fa-fw"></i> Paralax</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('Editor/footer');?>"><i class="fa fa fa-cogs fa-fw"></i> Footer</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
