<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
<?php
include_once('../controller/config.php');

$index=$_SESSION["index_number"];

$sql="SELECT * FROM student WHERE index_number='$index'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['i_name'];
$image=$row['image_name'];

?>      
      
      <div class="user-panel">
      	<div class="pull-left image">
        	<img src="../<?php echo $image; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        	<p><?php echo $name; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">NEVEGACIÓN PRINCIPAL</li>
        <li class="active treeview">
          <a href="dashboard1.php">
            <i class="fa fa-dashboard"></i> <span>Tablero</span>
          </a>
        </li>
        <li>
          <a href="my_profile.php">
            <i class="fa fa-flag"></i> <span>Mi Perfil</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Mestros</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="my_teacher.php"><i class="fa fa-circle-o"></i> Mis Maestros</a></li>
            <li><a href="all_teacher1.php"><i class="fa fa-circle-o"></i>Todos los Maestros</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Asignatura</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="my_subject.php"><i class="fa fa-circle-o"></i> Mis Asignaturas</a></li>
            <li><a href="all_subject1.php"><i class="fa fa-circle-o"></i> Todas las Asignaturas</a></li>
          </ul>
        </li>
         
         <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar-plus-o"></i>
            <span>Horario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="my_timetable.php"><i class="fa fa-circle-o"></i> Mi horario</a></li>
            <li><a href="all_timetable1.php"><i class="fa fa-circle-o"></i>Todos los Horarios</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar-check-o"></i>
            <span>Asistencia</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="my_attendance.php"><i class="fa fa-circle-o"></i> Mi Asistencia</a></li>
            <li><a href="my_attendance_history.php"><i class="fa fa-circle-o"></i> Mi Historico de Asistencia</a></li>
          </ul>
        </li>
        <!--
         <li>
          <a href="my_payments.php">
            <i class="fa fa-money"></i> <span>My Payments</span>
          </a>
        </li>
        -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-certificate"></i>
            <span>Examenes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="my_exam_marks.php"><i class="fa fa-circle-o"></i> Mis Calificaciones de Examen</a></li>
            <li><a href="my_exam_marks_history.php"><i class="fa fa-circle-o"></i> Mi Historico de Calificaciones de Examen</a></li>
            <li><a href="my_exam_timetable.php"><i class="fa fa-circle-o"></i>Mis Horarios de Examen</a></li>
          </ul>
        </li>
        <!--
        <li class="treeview">
          <a href="#">
            <i class="fa fa-facebook"></i>
            <span>Friends</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	<li><a href="add_friends1.php"><i class="fa fa-circle-o"></i> Add Friends</a></li>
            <li><a href="my_friends1.php"><i class="fa fa-circle-o"></i> My Friends</a></li>
          </ul>
        </li>
        -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>