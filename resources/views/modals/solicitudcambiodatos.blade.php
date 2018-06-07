
<!-- Modal solicitud de cambio de datos -->
<div id="solicamdatos" class="modal fade" role="dialog">
  	<div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        	<h4 class="modal-title">Solicitud de Cambios</h4>
	      	</div>
	      	<div class="modal-body">
	        	<div class="panel panel-primary">
		        	<div class="panel-heading">Registros</div>
		        		<div class="panel-body">
		        			<div class="row">
		        				<div class="col-md-12">
		        					<div class="form-group">
		        						<p><label>Expediente:</label> {{$expediente->cid_expediente}}</p>
		        						<p><label>Cliente: </label> {{$expediente->cid_cliente}} - {{$expediente->cnombre}} {{$expediente->capellidop}} {{$expediente->capellidom}}</p>
		        					</div>
		        					<div class="form-group">
			        					<label>Describa Brevemente el cambio</label>
			        					<textarea name="solicamdatos" class="form-control" rows="5"></textarea>
			        				</div>
		        				</div>
		        			</div>
		        		</div>
				</div>
	      	</div>
	      	<div class="modal-footer">
	      		<button type="button" class="btn btn-success">Enviar</button>
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      	</div>
	    </div>

	 </div>
</div><!--ventana modal-->