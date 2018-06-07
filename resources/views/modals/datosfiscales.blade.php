<!--modal datos fiscales-->
<div id="datosfiscales" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
	                        <div class="modal-header">
	                            <button type="button" class="close" data-dismiss="modal">&times;</button>
	                            <h4 class="modal-title">Consulta de Datos del Cliente</h4>
	                        </div>
                          	<div class="modal-body">
                          		<div class="col-md-6">
                          			<div class="panel panel-primary">
						        	<div class="panel-heading">Datos Generales del Cliente</div>
						        		<div class="panel-body">
						        		
							        		<table class="table table-condensed">
							        			
							        				<tr>
							        					<td>Clave</td>
							        					<td>{{$expediente->cid_cliente}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Tipo de Cliente</td>
							        					<td>{{$expediente->ctipocliente}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Nombre</td>
							        					<td>{{$expediente->cnombre}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Apellido Paterno</td>
							        					<td>{{$expediente->capellidop}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Apellido Materno</td>
							        					<td>{{$expediente->capellidom}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Teléfono</td>
							        					<td>({{$expediente->clada}})  {{$expediente->ctelefono}}  EXT:{{$expediente->cext}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Tipo</td>
							        					<td>{{$expediente->ctipotelefono}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Email</td>
							        					<td>{{$expediente->cmail}} </td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Estado</td>
							        					
							        					
							        				</tr>
							        				<tr>
							        					<td>Municipio</td>
							        					<td></td>
							        					
							        				</tr>
							        			</table>
							        		
						        				
						        		</div>
			                          	
                        			</div><!--panel-->
                        		</div><!--div col 6-->
                        		<div class="col-md-6">
                          			<div class="panel panel-primary">
						        	<div class="panel-heading">Datos Generales del Cliente</div>
						        		<div class="panel-body">
						        		
							        		<table class="table table-condensed">
							        			
							        				<tr>
							        					<td><button type="button" class="btn btn-info btn-sm">Ver Cédula Fiscal</button></td>
							        					
							        					
							        				</tr>
							        				<tr>
							        					<td>Nombre o Razón Social</td>
							        					<td>{{$expediente->cnombre}}</td>
							        					
							        				</tr>
							        				
							        				<tr>
							        					<td>Apellido Paterno</td>
							        					<td>{{$expediente->capellidop}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Apellido Materno</td>
							        					<td>{{$expediente->capellidom}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>RFC</td>
							        					<td></td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Dirección</td>
							        					<td></td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Colonia</td>
							        					<td></td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Código Postal</td>
							        					
							        					
							        				</tr>
							        				<tr>
							        					<td>Estado</td>
							        					<td></td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Municipio</td>
							        					<td></td>
							        					
							        				</tr>
							        			</table>
							        		
						        				
						        		</div>
			                          	
                        			</div><!--panel-->
                        		</div><!--div col 6-->

                     		</div><!--modal body-->
                     		<div class="modal-footer">
                     			<div class="col-md-6 col-sm-6">
                     				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#solicamdatos">Solicitud de Cambio de Datos</button>
                     			</div>
	                          	<div class="col-md-6 col-sm-6">
	                            	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                            </div>
                          	</div>
                     	</div><!--modal content-->
                     </div><!--div clas dialog-->
</div><!--ventana modal-->