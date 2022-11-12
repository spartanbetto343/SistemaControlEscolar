<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<?php
include_once('../controller/config.php');
$event_id=$_GET['event_id'];
$grade=0;
$prefix="";
$grade_name="";
$category="";
$type="";

$sql="SELECT * FROM events WHERE id='$event_id'";
	 
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
	
	$grade=$row['grade_id'];
	$category=$row['category_id'];
	
	if($category == 1){
		$category = "Todos";
	}else if($category == 2){
		$category = "Todos los Maestros y Estudiantes";
	}else if($category == 3){
		$category = "Todos los Maestros y Grados Especificos";
	}else if($category == 4){
		$category = "Solo Grados Especificos";
	}else if($category == 5){
		$category = "Solo Maestros";
	}else if($category == 6){
		$category = "Solo Estudiantes";
	}else if($category == 7){
		$category = "Solo Padres";
	}else{
		
	}
	
	$creator_type=$row['creator_type'];
	$create_by=$row['create_by'];
	
	if($creator_type == "Admin"){
		
		$sql1="SELECT * FROM admin WHERE index_number='$create_by'";
	 
		$result1=mysqli_query($conn,$sql1);
		$row1=mysqli_fetch_assoc($result1);
		$name=$row1['i_name'];
		
	}
	
	if($creator_type == "Teacher"){
		
		$sql1="SELECT * FROM teacher WHERE index_number='$create_by'";
	 
		$result1=mysqli_query($conn,$sql1);
		$row1=mysqli_fetch_assoc($result1);
		$name=$row1['i_name'];
		
	}
			
?>

<div class="modal msk-fade" id="modalviewEvent" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog"><!--modal-dialog -->  
		<div class="container col-lg-6 modal-content1"><!--modal-content --> 
      		<div class="row">
          		<div class="panel"><!--panel --> 
            		<div class="panel-heading bg-orange">
                    	<button type="button"  class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
              			<h3 class="panel-title"><?php echo $row['title']; ?></h3>
            		</div>
            		<div class="panel-body"><!--panel-body -->
              			<div class="row">
                			<div class=" col-md-12"> 
                  				<table class="table table-user-information">
                    				<tbody>
                      					<tr>
                        					<td>Titulo:</td>
                        					<td id="title1"><?php echo $row['title']; ?> </td>
                      					</tr>
                      					<tr>
                        					<td>Categoria::</td>
                        					<td id="category1"><?php echo $category; ?></td>
                      					</tr>
                             			<tr>
                        					<td>Grado:</td>
                        					<td id="grade1">
                                            	<?php 
													if($grade){
														
														$g=(explode(",",$grade));
														
														for($i=0;$i<count($g);$i++){
															$id=$g[$i];
															
															
															$sql1="SELECT * FROM grade WHERE id =$id";
															$result1=mysqli_query($conn,$sql1);
															$row1=mysqli_fetch_assoc($result1);
															
															$grade_name.=$prefix.$row1['name'];
															$prefix=',';
															
														}
														echo $grade_name;
													}else{
														echo "Todos";
													}
												?>
                                             </td>
                      					</tr>
                        				<tr>
                        					<td>de:</td>
                        					<td id="_from1"> <?php echo $row['start_date_time']; ?></td>
                      					</tr>
                      					<tr>
                        					<td>a:</td>
                        					<td id="_to1"> <?php echo $row['end_date_time']; ?></td>
                      					</tr>
                        					<td>Nota / Descripción:</td>
                        					<td id="note"> <?php echo $row['note']; ?></td>
                      					</tr>
                                        </tr>
                        					<td>Creado por:</td>
                        					<td id="note"> <?php echo $name; ?></td>
                      					</tr>
                    				</tbody>
                  				</table>
                  			</div>
                   		</div>
                  	</div><!--/.panel-body -->
            	</div><!--/. panel--> 
			</div><!--/.row --> 
    	</div><!--/.modal-content -->
	</div><!--/.modal-dialog -->
</div><!--/.modal -->  