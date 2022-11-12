<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
<?php
include_once('../controller/config.php');

$index=$_SESSION["index_number"];

$sql="SELECT * FROM admin WHERE index_number='$index'";
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
        <li class="header">NAVEGACIÓN PRINCIPAL</li>
        <li class="active treeview">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Tablero</span>
          </a>
        </li>
         <li>
          <a href="admin_profile.php">
            <i class="fa fa-flag"></i> <span>Mi Perfil</span>
          </a>
        </li>
        <li>
          <a href="class_room.php">
            <i class="fa fa-list-ul"></i> <span>Clases</span>
          </a>
        </li>
        <li>
          <a href="grade.php">
            <i class="fa fa-database"></i> <span>Grado</span>
          </a>
        </li>
        <li>
          <a href="subject.php">
            <i class="fa fa-book"></i> <span>Asignatura</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Maestros</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="teacher.php"><i class="fa fa-circle-o"></i> Añadir Profesor</a></li>
            <li><a href="all_teacher.php"><i class="fa fa-circle-o"></i> Todos los Profesores</a></li>
          </ul>
        </li>
        <li>
          <a href="subject_routing.php">
            <i class="fa fa-th"></i> <span>Enrutamiento de Asignaturas</span>
          </a>
        </li>
        <li>
          <a href="timetable.php">
            <i class="fa fa-calendar-plus-o"></i> <span>Horario</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Estudiantes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="student.php"><i class="fa fa-circle-o"></i> Añadir Estudiante</a></li>
            <li><a href="all_student.php"><i class="fa fa-circle-o"></i> Todos los Estudiantes</a></li>
            <li><a href="student_leave.php"><i class="fa fa-circle-o"></i> Baja de Estudiantes</a></li>
          </ul>
        </li>
        <!--
        <li>
          <a href="student_payment.php">
            <i class="fa fa-money"></i> <span>Student Payment</span>
          </a>
        </li>
        -->
        <!--
         <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar-check-o"></i>
            <span>Asistencia</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_attendance.php"><i class="fa fa-circle-o"></i> Añadir Asistencia</a></li>
            <li><a href="student_attendance_history.php"><i class="fa fa-circle-o"></i>Historico de Asistencia de Estudiantes </a></li>
            <li><a href="teacher_attendance_history.php"><i class="fa fa-circle-o"></i>Historico de Asistencia de Maestros</a></li>
          </ul>
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
            <li><a href="exam.php"><i class="fa fa-circle-o"></i>Crear Examen</a></li>
            <li><a href="exam_timetable.php"><i class="fa fa-circle-o"></i>Horarios de Examen</a></li>
            <li><a href="student_exam_marks.php"><i class="fa fa-circle-o"></i>Calificaciones de Examenes Estudiante</a></li>
            <li><a href="student_exam_marks_history.php"><i class="fa fa-circle-o"></i>Historico de Calificaciones Examen Estudiante</a></li>
          </ul>
        </li>
        <!--
        <li>
          <a href="petty_cash.php">
            <i class="fa fa-yen"></i> <span>Petty Cash</span>
          </a>
        </li>
        -->
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
          	<li><a href="add_friends.php"><i class="fa fa-circle-o"></i> Add Friends</a></li>
            <li><a href="my_friends.php"><i class="fa fa-circle-o"></i> My Friends</a>
           
          </ul>
        </li>
        -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Eventos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="my_events.php"><i class="fa fa-circle-o"></i> Mis Eventos</a></li>
            <li><a href="all_events.php"><i class="fa fa-circle-o"></i> Todos los Eventos</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>