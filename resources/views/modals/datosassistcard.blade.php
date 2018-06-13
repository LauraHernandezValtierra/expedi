<div id="datassistcard" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                      	<form  name="updatepasajero" action="{{route('updatepasajero')}}" method="post">
                      		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <!-- Modal content-->
                        <div class="modal-content">
	                        <div class="modal-header">
	                            <button type="button" class="close" data-dismiss="modal">&times;</button>
	                            <h4 class="modal-title">Datos Adicionales del Pasajero</h4>
	                        </div>
                          	<div class="modal-body">
						        <div class="panel panel-default">
						        	<div class="panel-heading">Datos del Pasajero</div>
						        	<div class="panel-body">
						        		<div class="form-group" id="ventana">
						        			<label>Pax</label>
						        			<input type="text" class="form-control" name="" value="0" readonly>
						        		</div>
						        		<div class="container" id="ventana2">
						        			
						        			<input type="hidden" name="idpax" value="" readonly>
						        		</div>
						        		
						        		<table class="table">
						        		
						        				<tr>
						        					<td>Genero</td>
						        					<td>
						        						<select name="genero" class="form-control" >
						        							<option value="0">Selecciona</option>
						        							<option value="MASCULINO">Masculino</option>
						        							<option value="FEMENINO">Femenino</option>
						        						</select></td>
						        					
						        				</tr>
						        				<tr>
						        					<td>Fecha de Nacimiento</td>
						        					<td><input type="date" name="fechanac" class="form-control" ></td>
						        					
						        				</tr>
						        				<tr>
						        					<td>No. Pasaporte</td>
						        					<td><input type="txt" name="pasaporte" class="form-control" ></td>
						        					
						        				</tr>
						        				<tr>
						        					<td>Nacionalidad</td>
						        					<td><input type="txt" name="nacionalidad" class="form-control" ></td>
						        					
						        				</tr>
						        				<tr>
						        					<td>Fecha Vencimiento Pasaporte</td>
						        					<td><input type="date" name="vencimientopas" class="form-control" ></td>
						        					
						        				</tr>
						        		
						        		</table>		
						        	</div>
						        </div>
					        </div>
					      
                          <div class="modal-footer">
                          	<button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                        </form>

                      </div>
</div>