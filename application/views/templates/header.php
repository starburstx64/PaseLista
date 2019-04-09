<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title>

  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
  <!-- boostrap theme -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.min.css') ?>">
  <!-- datatables css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/datatables/datatables/media/css/jquery.dataTables.min.css') ?>">
  <!-- fileinput css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fileinput/css/fileinput.min.css') ?>">
  <!-- fullcalendar css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fullcalendar/fullcalendar.min.css') ?>">  
  <!-- keith calendar css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/keith-calendar/jquery.calendars.picker.css') ?>"> 

  <!-- custom css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('custom/css/custom.css') ?>"> 

  <!-- jquery -->
  <script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  

</head>
<body>

<input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
<nav class="navbar navbar-default  navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="topNavDashboard"><a href="<?php echo base_url('index.php/dashboard') ?>"> <i class="glyphicon glyphicon-dashboard"></i> Dashboard <span class="sr-only">(current)</span></a></li>
        <!-- <li><a href="#">Class</a></li> -->
        <li class="dropdown" id="topClassMainNav">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-edit"></i> Clases <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li id="topNavClass"><a href="<?php echo base_url('index.php/classes'); ?>">Gestionar Clases</a></li>                        
            <li id="topNavSection"><a href="<?php echo base_url('index.php/section') ?>">Gestionar Seciones</a></li>                                 
            <li id="topNavSubject"><a href="<?php echo base_url('index.php/subject') ?>">Gestionar Temas</a></li>           
          </ul>
        </li>
        <li class="dropdown" id="topStudentMainNav">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-list-alt"></i> Estudiantes <span class="caret"></span></a>

          <ul class="dropdown-menu">
            <li id="addStudentNav"><a href="<?php echo base_url('index.php/student?opt=addst') ?>">Añadir Estudiantes</a></li>                                              
            <li id="manageStudentNav"><a href="<?php echo base_url('index.php/student?opt=mgst') ?>">Gestionar Estudiantes</a></li>           
          </ul>
        </li>
        <li class="dropdown" id="topAttendanceMainNav">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-time"></i> Asistencia <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li id="takeAttendNav"><a href="<?php echo base_url('index.php/attendance?atd=add') ?>"></a></li>
            <li id="attenReport"><a href="<?php echo base_url('index.php/attendance?atd=report') ?>"></a></li>
          </ul>
        </li>   
      </ul>      
      <ul class="nav navbar-nav navbar-right">        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
          <ul class="dropdown-menu">            
            <li><a href="<?php echo base_url('setting') ?>">Setting</a></li>                       
            <li><a href="<?php echo base_url('users/logout'); ?>">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">

  
