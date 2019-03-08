<!-- Modal-->
    <div class="modal fade" id="mensajes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                	<h3>Resultado</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
					<div class="container-fluid">

						<?php
							mensaje($_GET["msj"]);

	    					function mensaje($mj){
								if ($mj == 1) { 
									?>
									<div class="text-justify"><p>Su vehiculo puede transitar con normalidad ese dia a esa hora mas no de 7:00AM a 9:30AM y  16:00PM a 19:30PM ya que su numero de placa si entra en las restricciones para el pico y placa de dicho dia<p></div>
									<?php      
								}else if ($mj == 2) {   
									?>
									<div class="text-justify"><p>Su vehiculo no puede transitar con normalidad ese dia a esa hora ya que su numero de placa si entra en las restricciones para el pico y placa de dicho dia, mas fuera de los horarios comprendidos entre 7:00AM a 9:30AM y  16:00PM a 19:30PM si puede transitar con total normalidad<p></div>
									<?php      
								}else if ($mj == 3) {   
									?>
									<div class="text-justify"><p>Su vehiculo puede transitar con normalidad ese dia a esa y a cualquier hora ya que su numero de placa no entra en las restricciones para pico y placa de dicho dia<p></div>
									<?php      
								} else if ($mj == 4 || $mj == 5) {  
									?>
									<div class="text-justify"><p>Su vehiculo puede transitar con normalidad este dia a esa hora ya que esta medida no aplica para los Sabados ni Domingos<p></div>
									<?php      
								}
							}
						
						?>
					</div>
				</div>
         		<div class="modal-footer">
        			<a href="#" data-dismiss="modal" class="btn btn-primary">Cerrar</a>
     			</div>
            </div>
        </div>
    </div>
<!-- /.modal -->