<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<div class="col-md-8">
	<div class="box">
    	<div class="box-header">
        	<h3 class="box-title">Mi Estudiante</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">
        	<table id="example1" class="table table-bordered table-striped">
            	<thead>
                	<th class="col-md-1">ID</th>
                    <th class="col-md-4">Nombre</th>
                    <th class="col-md-6">Acción</th>
                </thead>
                <tbody>
<?php
include_once('../controller/config.php');
$grade_id=$_GET['grade'];
$exam_id=$_GET['exam'];
$year=$_GET['year'];
	
$sql="select student.i_name as std_name,student.id as std_id,student.index_number as std_index 
      from student
	  inner join student_grade
	  on student.index_number=student_grade.index_number
	  where student_grade.grade_id='$grade_id' and student._status='' and student_grade.year='$year'";
	  	  
$result=mysqli_query($conn,$sql);
$count=0;
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
		$count++;
		$std_index=$row["std_index"];

?>   
          			<tr>
                		<td><?php echo $count; ?></td>
                    	<td id="td1_<?php echo $row['std_id']; ?>">
                    		<a href="#modalviewform" onClick="studentProfile('<?php echo $row["std_index"]; ?>')" class=""  data-toggle="modal"><?php echo $row['std_name']; ?></a>
                    	</td>
                    	<td> 
<?php
$sql3="SELECT * FROM student_exam WHERE index_number='$std_index' AND grade_id='$grade_id' AND exam_id='$exam_id' AND year='$year'";

$result3=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result3) > 0){
	echo'<a href="#" class=" btn btn-success btn-xs" onClick="showModalEditExam('.$exam_id.','.$std_index.','.$grade_id.')" >Editar Calificacion de Examen</a>
<a href="#" class=" btn btn-primary btn-xs" onClick="showModalViewExam('.$exam_id.','.$year.','.$std_index.')"  >Ver Calificación de Examen</a>';
	
}else{
	echo'<a href="#" class=" btn btn-warning btn-xs" onClick="showModalAddExam('.$exam_id.','.$std_index.','.$grade_id.')"  >Añadir Calificación de Examen</a>';
}
?>

                    	</td>
                	</tr>
<?php } }  ?>
           		</tbody>
        	</table>	
     	</div><!-- /.box-body -->           
	</div><!-- /.box-->
</div>