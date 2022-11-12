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
        	<h3 class="box-title">Baja de Estudiante</h3>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive">
        	<table id="example1" class="table table-bordered table-striped">
            	<thead>
                	<th class="col-md-1">ID</th>
                    <th class="col-md-4">Nombre</th>
                    <th class="col-md-2">Acción</th>
                </thead>
                <tbody>
<?php
include_once('../controller/config.php');

$sql="select * from student where _status='leave'";

$result=mysqli_query($conn,$sql);
$count = 0;
if(mysqli_num_rows($result) > 0){
	while($row=mysqli_fetch_assoc($result)){
	$count++;
?>   
                	<tr>
                    	 <td><?php echo $count; ?></td>
                         <td><?php echo $row['i_name']; ?></td>
                         <td> 
       <!--MSK-00128 -->
       <a href="#" class="confirm-active btn btn-danger btn-xs" data-id="<?php echo $row['id']; ?>,<?php echo $row['index_number']; ?>">Activo</a>
       <!--MSK-00146 -->
       <a href="#modalviewform" onClick="showModal(this)" class="btn btn-primary btn-xs"  data-id="<?php echo $row['id']; ?>,<?php echo $row['index_number']; ?>" data-toggle="modal">Ver</a>
                          </td>
                    </tr>
<?php } } ?>
                </tbody>
         	</table>	
     	</div><!-- /.box-body -->           
	</div><!-- /.box-->
</div>


