@extends('home')
@section('nivel3','Pagos')
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
			  <li class="active"><a data-toggle="pill" href="#home">Fichas de Depósito</a></li>
			  <li><a data-toggle="pill" href="#menu1">Tarjeta Bancaria</a></li>
			  <li><a data-toggle="pill" href="#menu2">Efectivo</a></li>
			</ul>

			<div class="tab-content">
			  <div id="home" class="tab-pane fade in active">
			    <h3>Fichas de Depósito</h3>
			    <div>
			    	<div class="box box-primary">
						<div class="box-body" >
							<!--<div class="row">
								<div class="col-md-6">
									<div class="col-md-12">
										 <div class="input-group">
							                <div class="input-group-btn">
							                  <button type="button" class="btn btn-warning">Buscar Archivo</button>
							                </div>
							                <!-- /btn-group -->
							              <!--  <input type="text" class="form-control">
							              </div>
							              <br>
							     
							              	<label>Observaciones:</label>
							              <textarea class="form-control"></textarea>
							              <button type="button" data-toggle="modal"   data-target="#myModal" class="btn btn-info">Enviar Archivo a Ingresos</button>
							           </div>
								</div>
							</div>
							<br>-->
							<div class="row">
								<div class="col-md-11">
									<div align="center">
										<label>Archivos enviados a Ingresos o Cancelados por Ingresos</label>
									</div>
									
									<div id="scroll">
											<table class="table table-bordered">
												<tr>
													<td>Archivo</td>
													<td>Fecha de envío</td>
													<td>Status</td>
													<td>Fecha Proc</td>
													<td>Fecha Canc</td>
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td></td>
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
			  <div id="menu1" class="tab-pane fade">
			    
			     <h3>Tarjeta Bancaria</h3>
			    <div>
			    	<div class="box box-primary">
						<div class="box-body" >
							<!--<div class="row">
								<div class="col-md-6">
									<div class="col-md-12">
										 <div class="input-group">
							                <div class="input-group-btn">
							                  <button type="button" class="btn btn-warning">Buscar Archivo</button>
							                </div>
							                <!-- /btn-group -->
							               <!-- <input type="text" class="form-control">
							              </div>
							              <br>
							     
							              	<label>Observaciones:</label>
							              <textarea class="form-control"></textarea>
							              <button type="button" data-toggle="modal"   data-target="#myModal" class="btn btn-info">Enviar Archivo a Ingresos</button>
							           </div>
								</div>
							</div>-->
							<br>
							<div class="row">
								<div class="col-md-11">
									<div align="center">
										<label>Archivos enviados a Ingresos o Cancelados por Ingresos</label>
									</div>
									
									<div id="scroll">
											<table class="table table-bordered">
												<tr>
													<td>Archivo</td>
													<td>Fecha de envío</td>
													<td>Status</td>
													<td>Fecha Proc</td>
													<td>Fecha Canc</td>
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td></td>
													<td></td>
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
			    <h3>Efectivo</h3>
			    <div>
			    	<div class="box box-primary">
						<div class="box-body">
							<div class="row">
								<div class="col-md-11">
									
									<div id="scroll">
											<table class="table table-bordered">
												<tr>
													<td>Recibo No.</td>
													<td>Fecha de Emisión</td>
													<td>Monto</td>
													<td>Moneda</td>
													
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td></td>
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
			  
			