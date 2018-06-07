<!--modal solicitar reembolso-->
<div id="solireembolso" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
	                        <div class="modal-header">
	                            <button type="button" class="close" data-dismiss="modal">&times;</button>
	                            <h4 class="modal-title">Pasivos para Reembolsos</h4>
	                        </div>
	                        <div class="row">
	                        	<div class="col-md-6">
                          			<div class="panel panel-primary">
						        	<div class="panel-heading">Datos del Reembolso</div>
						        		<div class="panel-body">
						        		
							        		<table class="table table-condensed">
							        			
							        				<tr>
							        					<td>Cliente</td>
							        					<td>{{$expediente->cid_cliente}} -  {{$expediente->cnombre}} {{$expediente->capellidop}} {{$expediente->capellidom}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Contacto</td>
							        					<td></td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Mail de Contacto</td>
							        					<td>{{$expediente->cmail}}</td>
							        					
							        				</tr>
							        				
							        				<tr>
							        					<td>Ejecutivo</td>
							        					<td>{{$expediente->inicempleado}}-{{$expediente->nomempleado}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Expediente</td>
							        					<td>{{$expediente->cid_expediente}} </td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Com Agencia</td>
							        					<td><div class="input-group">
													      <input id="" type="text" class="form-control input-sm" name="comisionagencia" >
													      <span class="input-group-addon">USD</span>
													      
													    </div></td>
							        					
							        				</tr>
							        				<tr>
							        					<td>T.C Consolidado</td>
							        					<td> </td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Fecha de Salida</td>
							        					<td>{{$expediente->dfechasalida}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Excedente</td>
							        					<td><div class="input-group">
													      <input id="" type="text" class="form-control input-sm" name="excedente" >
													      <span class="input-group-addon">USD</span>
													      
													    </div></td>
							        					
							        				</tr>
							        			</table>
							        		
						        				
						        		</div>
			                          	
                        			</div><!--panel-->
                        		</div><!--div col 6-->
                        		
								<div class="col-md-6">
                          			<div class="panel panel-primary">
						        	<div class="panel-heading">Importes para Reembolsos</div>
						        		<div class="panel-body">
						        		
							        		<table class="table table-condensed">
							        			
							        				<tr>
							        					<td>Comisión Agencia</td>
							        					
							        					<td>
							        						<div class="input-group">
													      <input id="" type="text" class="form-control input-sm" name="comisionagencia" >
													      <span class="input-group-addon">USD</span>
													      
													    </div>
							        					</td>
							        					<td>
							        						<div class="input-group">
													      <input id="" type="text" class="form-control input-sm" name="comisionagencia" >
													      <span class="input-group-addon">MXN</span>
													      
													    </div>
							        					</td>
							        				</tr>
							        				
							        				<tr>
							        					<td>Excedente de Pago</td>
														<td>
							        						<div class="input-group">
													      <input id="" type="text" class="form-control input-sm" name="comisionagencia" >
													      <span class="input-group-addon">USD</span>
													      
													    </div>
							        					</td>
							        					<td>
							        						<div class="input-group">
													      <input id="" type="text" class="form-control input-sm" name="comisionagencia" >
													      <span class="input-group-addon">MXN</span>
													      
													    </div>
							        					</td>
							        				</tr>
							        				<tr>
							        					<td>Dif. no Acreditable</td>
							        					<td>
							        						<div class="input-group">
													      <input id="" type="text" class="form-control input-sm" name="comisionagencia" >
													      <span class="input-group-addon">USD</span>
													      
													    </div>
							        					</td>
							        				</tr>
							        				<tr>
							        					<td colspan="2" class="subtitulo">*El total debe ser igual al Excedente
							        					</td>
							        				</tr>
							        				<tr>

							        					<td>Total</td>
							        					<td>
							        						<div class="input-group">
													      <input id="" type="text" class="form-control input-sm" name="comisionagencia" >
													      <span class="input-group-addon">USD</span>
													      
													    </div>
							        					</td>
							        				</tr>
							        				
							        				
							        			</table>
						        		</div>

			                          	
                        			</div><!--panel-->
                        		</div><!--div col 6-->
	                        </div>
	                        <div class="row">
	                        	<div class="modal-body">
                          		

                        		<div class="col-md-6">
                          			<div class="panel panel-primary">
						        	<div class="panel-heading">Datos Bancarios del Cliente</div>
						        		<div class="panel-body">
						        		
							        		<table class="table table-condensed">
							        			
							        				<tr>
							        					<td>A nombre de</td>
							        					<td><input type="text" name="beneficiario"></td>
							        				</tr>
							        				
							        				<tr>
							        					<td>Banco</td>
														<td>
								        					<input type="text" name="banco">
														</td>
							        				</tr>
							        				<tr>
							        					<td>Sucursal</td>
							        					<td><input type="text" name="sucursal"></td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Cuenta</td>
							        					<td><input type="text" name="cuenta"></td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Clave Interbancaria</td>
							        					<td><input type="text" name="clave"></td>
							        					
							        				</tr>
							        				
							        			</table>
						        		</div>

			                          	
                        			</div><!--panel-->
                        		</div><!--div col 6-->
                    			<div class="col-md-6">
                      			<div class="panel panel-primary">
					        	<div class="panel-heading"></div>
					        		<div class="panel-body">
					        		
						        		<table class="table table-condensed">
						        			<div class="form-group">
					        				<tr>
					        					<td>Observaciones</td><td><textarea class="form-control" rows="5" id="comment"></textarea></td>
					        				</tr>
					        			</div>
						        		</table>
						        		
					        				
					        		</div>
		                          	
                    			</div><!--panel-->
                    			</div><!--div col 6-->
	                        </div>
                          	

                     		</div><!--modal body-->
                     		<div class="modal-footer">
                     		
                     				<button type="button" class="btn btn-primary" >Guardar</button>
                     			
	                            	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                            
                          	</div>
                     	</div><!--modal content-->
                     </div><!--div clas dialog-->
</div><!--ventana modal-->