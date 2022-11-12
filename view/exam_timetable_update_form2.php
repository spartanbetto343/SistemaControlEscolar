<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<div class="modal msk-fade" id="modalUpdateform" tabindex="-1" role="dialog" aria-labelledby="modalInsertform" aria-hidden="true">  
  	<div class="modal-dialog ">
    	<div class="container modal-content1 "><!--modal-content --> 
      		<div class="row ">	
           		<div class="col-md-3">
            		<div class="panel">
        				<div class="panel-heading bg-orange">               
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          					<h3 class="panel-title">Actualizar Horario de Examen </h3>
   						</div>
            			 <form role="form" action="../index.php" method="post">
            				<div class="panel-body"> <!-- Start of modal body--> 
               					<div class="form-group" id="divUpdateDay">
                					<label for="" >Dia</label>
        							<select class="form-control"  id="day1" name="day">			
                                        <option value="Sunday">Domingo</option>
                                        <option value="Monday">Lunes</option>
                                        <option value="Tuesday">Martes</option>
                                        <option value="Wednesday">Miercoles</option>
                                        <option value="Thursday">Jueves</option>
                                        <option value="Friday">Viernes</option>
                                        <option value="Saturday">Sabado</option>
									</select>
        						</div>
                                <div class="form-group" id="divUpdateSubject">
                					<label for="" >Asignatura</label>
        							<select class="form-control" id="subject1" name="subject_id"><!--MSK-000136-subject-->			
<?php
include_once('../controller/config.php');
$grade_id=$_GET['grade'];
$exam_id=$_GET['exam'];

$sql="select DISTINCT subject_routing.subject_id as s_id,subject.name as s_name
      from subject_routing
      inner join subject
      on subject_routing.subject_id=subject.id 
      where subject_routing.grade_id=$grade_id";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
		
?> 
     									<option value="<?php echo $row["s_id"]; ?>"><?php echo $row['s_name']; ?></option>
<?php }} ?> 	           
									</select>
        						</div> 
                                <div class="form-group" id="divUpdateClassroom">
                					<label for="" >Clase</label>
        							<select class="form-control"  id="classroom1" name="classroom_id"><!--MSK-000136-classroom-->			
<?php
include_once('../controller/config.php');

$sql="SELECT * FROM class_room";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
     									<option value="<?php echo $row["id"]; ?>"><?php echo $row['name']; ?></option>
<?php }} ?> 	           
									</select>
        						</div> 
                                <div class="form-group" id="divUpdateSTime">
                					<label for="" >Hora de Inicio</label>
        							<input type="text" class="form-control" id="start_time1" name="start_time" placeholder="Inserte la Hora de Inicio" autocomplete="off"/>
        						</div>  
                                 <div class="form-group" id="divUpdateETime">
                					<label for="" >Hora de Termino</label>
        							<input type="text" class="form-control" id="end_time1" name="end_time" placeholder="Inserte la Hora de Termino" autocomplete="off"/>
        						</div>  
            				</div><!--/.modal body-->
            				<div class="panel-footer bg-gray-light">
                            	<input type="hidden" name="grade" value="<?php echo $grade_id; ?>"  />
                                <input type="hidden" name="exam" value="<?php echo $exam_id; ?>"  />
                            	<input type="hidden" id="id1" name="id" value=""  />
            					<input type="hidden" name="do" value="update_exam_timetable"  />
                                <input type="hidden" name="create_by" value="Teacher"  />
                    			<button type="submit" class="btn btn-info" id="btnSubmit1" style="width:100%;">Actualizar</button><!--MSK-000145-->
             				</div><!--/.panel-footer-->
             			</form>       
      				</div><!--/.panel-->
         		</div><!--/.col-md-3 --> 
            </div><!--/.row-->      
        </div><!-- /.modal-content -->  		 
  	</div><!-- /.modal-dialog -->   
</div><!--/.Modal-Add form -->