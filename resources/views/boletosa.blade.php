@extends('home')
@section('nivel3','Boletos')
@push('styles')
<style type="text/css">
        #scroll {
            overflow:scroll;
            height:150px;
        }
       
    </style>
@endpush
@section('content')
@include('expediente')
		  	<div class="container">

			  <ul class="nav nav-pills nav-justified">
			  <li class="active"><a data-toggle="pill" href="#home">Boletos BSP</a></li>
			  <li><a data-toggle="pill" href="#menu1">Boletos Nevada</a></li>
			  <li><a data-toggle="pill" href="#menu2">Otras Aerolíneas</a></li>
			</ul>

			<div class="tab-content">
			  <div id="home" class="tab-pane fade in active">
			    <h3>Boletos BSP</h3>
			    <div>
			    	<div class="box box-primary">
						<div class="box-body" >
							<div class="row">
								<div class="col-md-8">
									<div id="scroll">
										<table class="table table-bordered">
											<tr>
												<th>Sol. Boletos</th>
												<th>Pax</th>
												<th>Wspan</th>
												<th>Fecha/Hora Registro</th>
												<th></th>
												<th></th>
												
											</tr>
											@foreach($boletos as $bol)
											<tr>
												<td>{{$bol->numfolio}}</td>
												<td>{{$bol->nombrepax}}</td>
												
												<td></td>
												<td>{{$bol->fhcaptura}}</td>
												<td><button type="button" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></td>
												<td><button type="button" class="btn btn-success btn-xs"><i class="fa fa-sticky-note-o"></i></button></td>
											</tr>
											@endforeach
										</table>
									</div>
								</div>
								<div class="col-md-4">
									<div class="col-md-10">
										<select class="form-control">
											<option value="">EMD</option>
											<option value="">Cupones</option>
											<option value="">ADM</option>
											<option value="">Boleto Electrónico</option>
											<option value="">Remisión</option>
											<option value="">Reembolso</option>
											<option value="">ACM</option>
										</select>
									</div>
									<br><br>
									<div class="col-md-10">
										<div id="scroll">
											<table class="table table-bordered">
												<tr>
													
													
												</tr>
												
											
											</table>
										</div>
									</div>
								
								</div>
							</div>
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-2">
									<button type="button" class="btn btn-primary btn-xs" disabled><i class="fa fa-eye"></i></button>Ver Solicitud
								</div>
								<div class="col-md-2">
									<button type="button" class="btn btn-success btn-xs" disabled><i class="fa fa-sticky-note-o" ></i></button>Archivo Adjunto
								</div>
								
							</div>
						</div>
					</div>
					<div class="box box-primary">
						<div class="box-header">
							<div class="box-title"> Aereos</div>
						</div>
						<div class="box-body" >
							<div class="row">
								<div class="col-md-9">
									<div id="scroll">
										<table class="table table-bordered">
											<tr>
												<th>Ti</th>
												<th>Operador</th>
												<th>Descrise</th>
												<th>Importe</th>
												<th>Moneda</th>
												<th>Importe USD</th>
												<th>Documento</th>
												<th>Fi</th>
												<th>F_capconf</th>
											</tr>
											
										
										</table>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Total</label>
										<input type="text" name="" value="" class="form-control" readonly>
									</div>
									<button type="button" class="btn btn-primary">Ver Detalle de Boletos BSP</button>
								</div>
							</div>
						</div>
					</div>
			    </div>
			  </div>
			  <div id="menu1" class="tab-pane fade">
			    <h3>Boletos Nevada</h3>
			     <div>
			    	<div class="box box-primary">
						<div class="box-body" >
							<div class="row">
								<!--<div class="col-md-6">
									<div class="col-md-12">
										 <div class="input-group">
							                <div class="input-group-btn">
							                  <button type="button" class="btn btn-warning">Buscar Archivo</button>
							                </div>
							                
							                <!-- /btn-group -->
							              <!--  <input type="text" class="form-control">
							              </div>
							              <br>
							              <button type="button" class="btn btn-primary">Cargar Archivo</button>
							              <button type="button" data-toggle="modal"   data-target="#myModal" class="btn btn-info">Ver Archivo</button>
									</div>
									<br><br>
									
								</div>-->
								<div class="col-md-6">
									<div class="btn-group btn-group-justified">
										<a href="" onclick="" class="btn btn-success">Actualizar</a>
							              <a href="" class="btn btn-danger">Borrar</a>
									</div>
									
									<div id="scroll">
											<table class="table table-bordered">
												<tr>
													<td>Recibo No.</td>
													<td>Fecha de emisión</td>
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td><button type="button" data-toggle="modal"   data-target="#myModal" class="btn btn-info"><span class="glyphicon glyphicon-file"></span></button></td>
													
												</tr>
												
											
											</table>
										</div>
								</div>
							</div>
							
						</div>
					</div>
			  </div>
			</div>
			  <div id="menu2" class="tab-pane fade">
			    <h3>Otras Aerolíneas</h3>
			    <div>
			    	<div class="box box-primary">
						<div class="box-body" >
							<div class="row">
								<!--<div class="col-md-6">
									<div class="col-md-12">
										 <div class="input-group">
							                <div class="input-group-btn">
							                  <button type="button" class="btn btn-warning">Buscar Archivo</button>
							                </div>
							                <!-- /btn-group -->
							              <!--  <input type="text" class="form-control">
							              </div>
							              <br>
							              <button type="button" class="btn btn-primary">Cargar Archivo</button>
							              <button type="button" data-toggle="modal"   data-target="#myModal" class="btn btn-info">Ver Archivo</button>
									</div>
									<br><br>
									
								</div>-->
								<div class="col-md-6">
									<div class="btn-group btn-group-justified">
										<a href="" onclick="" class="btn btn-success">Actualizar</a>
							              <a href="" class="btn btn-danger">Borrar</a>
									</div>
									
									<div id="scroll">
											<table class="table table-bordered">
												<tr>
													<td>Recibo No.</td>
													<td>Fecha de emisión</td>
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td><button type="button" data-toggle="modal"   data-target="#myModal" class="btn btn-info"><span class="glyphicon glyphicon-file"></span></button></td>
													
												</tr>
												
											
											</table>
										</div>
								</div>
							</div>
							
						</div>
					</div>
			  
			  </div>
			</div>
			<div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                          <div class="modal-body">
                            <div id="ventana">
                                <iframe src=""  style="width:500px; height:500px;" frameborder="0">
                                    
                                </iframe>
                               
                            </div>  
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
            </div>
@endsection