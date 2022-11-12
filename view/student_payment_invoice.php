<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../index.php');
    exit;
}
?>
	<!--MSK-000136-->
	<div class="modal msk-fade" id="modalINV" tabindex="-1" role="dialog" aria-labelledby="insert_alert1" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog"><!--modal-dialog -->  
			<div class="container col-lg-12 "><!--modal-content --> 
      			<div class="row">
          			<div class="panel panel-info"><!--panel -->
                    	<div class="msk-heading">
                    	<button type="button" onClick="" class="close  " data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>	
                        <br>
                        </div>
            			<div class="panel-body"><!--panel-body -->
                        	<div class="row">
                            	<div class="col-xs-2">
                                	<div class="div-logo">
                                    	<img class="logo" src="../uploads/logo2.png">
                                    </div>
                                </div>
                                <div class="col-xs-5 class-name">
                                	<h2>AMO LA PROGRAMACIÓN</h2>
                                	<div class="class-address">
                                    	Estado de Mexico,<br>
									    Nicolas Romero
                                    </div>
                                </div>
                                <div class="col-xs-4 class-email text-right ">
                                    	Email: betto5523@gmail.com<br>
                                        Telefono: 561-259-6673 <br> 
                                </div>
                        	</div>
                            <div class="row ">
                                <div class="col-xs-5">
                                   <h4>FACTURAR A:</h4>
                                    <div class="student-address">
<?php
include_once("../controller/config.php");
$index=$_GET['index'];
$inv_number=$_GET['invoice_number'];
$desc=$_GET['desc'];
$monthly_fee=$_GET['monthly_fee'];
$paid=$_GET['paid'];
$balance=$monthly_fee-$paid;

$monthly_fee = number_format($monthly_fee, 2, '.', '');
$paid = number_format($paid, 2, '.', '');

$current_year=date('Y');
$current_month=date('F');
$current_date=date('Y-m-d');

$sql="select * from student where index_number='$index'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$index=$row['index_number'];


?>                                    
                                  <span class="std-name"><?php echo $row['i_name']; ?></span><br>
                                    	Estado de Mexico,<br>
									    Nicolas Romero
                                    </div>
                                </div>
                                <div class="col-xs-5 col-xs-offset-2 text-right msk-t">
                                	<br>
                                    
                                	<h3>FACTURAR - #<?php echo $inv_number; ?></h3>
                                    <div class="text-right">
                                    	Año: <?php echo $current_year; ?><br>
                                        Mes: <?php echo $current_month; ?><br>
                                    	Fecha: <?php echo $current_date; ?>
                                    </div>                                
                                </div>
      						</div> <!-- / end client details section -->
                             <table class="table table-bordered">
                                <thead>
                                    <th class="col-md-1">ID</th>
                                    <th class="col-md-1">Descripción</th>
                                    <th class="col-md-1">Cantidad($)</th>
                                    <th class="col-md-1">Mes</th>
                                    <th class="col-md-1">Fecha</th>
                                </thead>
								<tbody>
                                    <tr>
                                    	<td> 1</td>
                                       	<td><?php echo $desc; ?></td>
                                        <td>$<?php echo $paid; ?></td>
                                        <td><?php echo $current_month; ?></td>
                                        <td><?php echo $current_date; ?></td>
                                    </tr>
                 				</tbody>
                          	</table> 
                            <div class="row">
                                <div class="col-xs-1 text-right pdetail1">
                                      <strong>
                                        <span id="spanmFee"><?php echo $monthly_fee; ?>$</span> <br>
										<span id="spanTotal"><?php echo $paid; ?>$</span> <br>
                                        <span id="spanPaid"><?php echo $paid; ?>$</span> <br>
                                      </strong>
  								</div>
                                <div class="col-xs-3 text-right pdetail2">
    								<p>
                                      <strong>
                                        Tarifa Mensual :<br>
										Total :<br>
                                        Pago :<br>
                                      </strong>
                                    </p>
  								</div>
							</div>
                            <div class="col-xs-6 col-xs-offset-2 text-right">
                            	<h1 id="h1">GRACIAS!</h1>
                            </div>
                  		</div><!--/.panel-body -->
                	</div><!--/. panel--> 
                </div><!--/.row --> 
            </div><!--/.modal-content -->
        </div><!--/.modal-dialog -->
    </div><!--/.modal -->