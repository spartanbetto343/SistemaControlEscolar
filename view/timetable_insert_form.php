<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
<!-- //MSK-000119-1  modalInsertform -->  
<div class="modal msk-fade" id="modalInsertform" tabindex="-1" role="dialog" aria-labelledby="modalInsertform" aria-hidden="true">  
  	<div class="modal-dialog ">
    	<div class="container modal-content1 "><!--modal-content --> 
      		<div class="row ">	
           		<div class="col-md-3 ">
            		<div class="panel panel-primary">
        				<div class="panel-heading">               
        					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
          					<h3 class="panel-title">Añadir Enrutamiento de Asignatura </h3>
   						</div>
            			 <form role="form" action="../index.php" method="post">
            				<div class="panel-body"> <!-- Start of modal body--> 
               					<div class="form-group" id="divDay">
                					<label for="" >Dia</label>
        							<select class="form-control"  id="day" name="day">			
     									<option >Seleccionar dia</option>
                                        <option value="Sunday">Domingo</option>
                                        <option value="Monday">Lunes</option>
                                        <option value="Tuesday">Martes</option>
                                        <option value="Wednesday">Miercoles</option>
                                        <option value="Thursday">Jueves</option>
                                        <option value="Friday">Viernes</option>
                                        <option value="Saturday">Sabado</option>
									</select>
        						</div>
                                <div class="form-group" id="divSubject">
                					<label for="" >Asignatura</label>
        							<select class="form-control"  id="subject" name="subject_id"><!--MSK-000116-subject-->		
     									<option>Seleccionar Asignatura</option>
<?php
include_once('../controller/config.php');
$id=$_GET['grade'];
$sql="select DISTINCT subject_routing.subject_id as s_id,subject.name as s_name
      from subject_routing
      inner join subject
      on subject_routing.subject_id=subject.id 
      where subject_routing.grade_id=$id";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
?> 
     									<option value="<?php echo $row["s_id"]; ?>"><?php echo $row['s_name']; ?></option>
<?php }} ?> 	           
									</select>
        						</div> 
                                <div class="form-group" id="divTeacher">
                					<label for="" >Maestro</label>
        							<select class="form-control"  id="teacher" name="teacher_id"><!--MSK-000124-teacher-->		
     									<option>Seleccionar Maestro</option>
									</select>
        						</div> 
                                <div class="form-group" id="divClassroom">
                					<label for="" >Clase</label>
        							<select class="form-control"  id="classroom" name="classroom_id"><!--MSK-000116-classroom-->			
     									<option>Seleccionar Clase</option>
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
                                <div class="form-group" id="divStartTime">
                					<label for="" >Hora de Inicio</label>
        							<input type="text" class="form-control" id="start_time" name="start_time"  placeholder="Insertar Hora de Inicio" autocomplete="off"/>
        						</div>  
                                 <div class="form-group" id="divEndTime">
                					<label for="" >Hora de Termino</label>
        							<input type="text" class="form-control" id="end_time" name="end_time"  placeholder="Insertar Hora de Termino" autocomplete="off"/>
        						</div>  
            				</div><!--/.modal body-->
            				<div class="panel-footer bg-blue-active">
                            	<input type="hidden" id="grade_id" name="grade_id" value="<?php echo $id; ?>"  />
            					<input type="hidden" name="do" value="add_timetable"  />
                                <input type="hidden" name="do1" value="add_timetable1"  />
                    			<button type="submit" class="btn btn-info " id="btnSubmit" style="width:100%;">Enviar</button><!--MSK-000125-->
             				</div><!--/.panel-footer-->
             			</form>       
      				</div><!--/.panel-->
         		</div><!--/.col-md-3 --> 
            </div><!--/.row-->      
        </div><!-- /.modal-content -->  		 
  	</div><!-- /.modal-dialog -->   
</div><!--/.Modal-Add form -->