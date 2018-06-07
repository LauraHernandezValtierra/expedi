<!--modal generar cadena de pago web-->
<div id="cadenapagoweb" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
	                        <div class="modal-header">
	                            <button type="button" class="close" data-dismiss="modal">&times;</button>
	                            <h4 class="modal-title">Solicitud de Referencia de Pago</h4>
	                        </div>
                          	<div class="modal-body">
                          		<div class="col-md-6">
                          			<div class="panel panel-primary">
						        	<div class="panel-heading">Datos para Generar Pago en Web</div>
						        		<div class="panel-body">
						        		
							        		<table class="table table-condensed">
							        			
							        				<tr>
							        					<td>Expedeinte</td>
							        					<td>{{$expediente->cid_expediente}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Fecha de Salida</td>
							        					<td>{{$expediente->dfechasalida}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>T.C Hoy</td>
							        					<td></td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Moneda Exp</td>
							        					<td>{{$expediente->moneda}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Cliente</td>
							        					<td>{{$expediente->cid_cliente}} -  {{$expediente->cnombre}} {{$expediente->capellidop}} {{$expediente->capellidom}}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Paquete</td>
							        					<td>{{$expediente->paquete}} </td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Ejecutivo que solicita el link de pago</td>
							        					<td> {{ Auth::user()->cid_empleado}} - {{Auth::user()->cnombre }} {{ Auth::user()->capellidop }} {{ Auth::user()->capellidom }}</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Mail del ejecutivo que solicita el link de pago</td>
							        					<td> {{ Auth::user()->cmail}} </td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Nombre del Contacto</td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Mail del Contacto</td>
							        					<td>{{$expediente->cmail}}</td>
							        					
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
							        			
							        				<tr>
							        					<td>Pax Principal</td>
							        					@foreach($pasajeros as $pax)
							        					@if($pax->principal==1)
							        					<td>{{$pax->apellidop}} {{$pax->apellidom}} {{$pax->nombre}}</td>
							        				@endif
							        					
							        					@endforeach
							        					
							        				</tr>
							        				
							        				<tr>
							        					<td>Elija la moneda en que pagará</td>
														<td>
								        					<div class="radio">
															  <label><input type="radio" name="optradio" class="flat-red">MXN</label>
															</div>
															<div class="radio">
															  <label><input type="radio" name="optradio" class="flat-red">USD</label>
															</div>
														</td>
							        				</tr>
							        				<tr>
							        					<td>Importe Máximo en MXN</td>
							        					<td><input type="text" name="maxmxn"></td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Importe Máximo en USD</td>
							        					<td><input type="text" name="maxusd"></td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Importe en MXN</td>
							        					<td><input type="text" name="impmxn"></td>
							        					
							        				</tr>
							        				<tr>
							        					<td>Importe en USD</td>
							        					<td><input type="text" name="imusd"></td>
							        					
							        				
							        			</table>
							        		
						        				
						        		</div>
			                          	
                        			</div><!--panel-->
                        		</div><!--div col 6-->

                     		</div><!--modal body-->
                     		<div class="modal-footer">
                     			<div class="col-md-6 col-sm-6">
                     				<button type="button" class="btn btn-primary" >Generar la Solicitud de Pago</button>
                     			</div>
	                          	<div class="col-md-6 col-sm-6">
	                            	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                            </div>
                          	</div>
                     	</div><!--modal content-->
                     </div><!--div clas dialog-->
</div><!--ventana modal-->