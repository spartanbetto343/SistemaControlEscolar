<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<div class="col-md-10">
	<div class="box">
    	<div class="box-header">
        	<h3 class="box-title">Todos los Estudiantes</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">
        	<table id="example1" class="table table-bordered table-striped">
            	<thead>
                	<th class="col-md-1">ID</th>
                    <th class="col-md-3">Nombre</th>
                    <th class="col-md-8">Acción</th>
                </thead>
                <tbody>
<?php
include_once('../controller/config.php');
$grade_id=$_GET['grade'];
$current_year=date('Y');
	
$sql="select student.i_name as std_name,student.id as std_id,student.index_number as std_index 
      from student
	  inner join student_grade
	  on student.index_number=student_grade.index_number
	  where student_grade.grade_id='$grade_id' and student._status=''";
	  	  
$result=mysqli_query($conn,$sql);
$count=0;
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
		$count++;
?>   
                	<tr>
                    	<td><?php echo $count; ?></td>
                        <td id="td1_<?php echo $row['std_id']; ?>">
                        	<a href="#modalviewform" onClick="showModal1(this)" class=""  data-id="<?php echo $row["std_id"]; ?>,<?php echo $grade_id; ?>" data-toggle="modal"><?php echo $row['std_name']; ?></a>
                        </td>
                        <td> 
<!--MSK-00113 -->                                     
<a href="edit_student.php?std_index=<?php echo $row["std_index"]; ?>&grade_id=<?php echo $grade_id; ?>" onClick="" class="btn btn-info btn-xs" data-id="<?php echo $row["std_id"]; ?>" data-toggle="modal">Editar</a>
<!--MSK-00128 -->
<a href="#" class="confirm-delete btn btn-danger btn-xs" data-id="<?php echo $row["std_id"];?>,<?php echo $grade_id; ?>,<?php echo $row["std_index"];?>">Baja</a>
<!--MSK-00146 -->

<a href="#" class="btn btn-success btn-xs" onClick="editSubject(this)"  data-id="<?php echo $row["std_index"]; ?>" >Editar Asignatura</a>
<a href="#" class="confirm-upgrade btn btn-danger btn-xs"  data-id="<?php echo $row["std_index"]; ?>" >Actualizar Grado</a>  

<!--MSK-00146 --> 
<a href="#" onClick="showModal2(this)" class="btn btn-success btn-xs"  data-id="<?php echo $row["std_index"]; ?>">Añadir Pago</a>
<a href="#" onClick="viewPayments(this)" class="btn btn-info btn-xs"  data-id="<?php echo $row["std_index"]; ?>">Ver Pagos</a>
                       </td>
                    </tr>
<?php } } ?>
                </tbody>
         	</table>	
     	</div><!-- /.box-body -->           
	</div><!-- /.box-->
</div>