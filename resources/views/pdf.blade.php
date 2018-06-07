@extends('home')
@section('nivel3','PDF')
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
		  		<h3>Documentación del Expediente</h3>
			    <div>
			    	<div class="panel panel-primary">
						<div class="panel-body" >
							<div class="row">
								<div class="col-md-6">
									<div class="col-md-12">
										 <div class="input-group">
							                <div class="input-group-btn">
							                  <button type="button" class="btn btn-warning">Buscar Archivo</button>
							                </div>
							                <!-- /btn-group -->
							                <input type="text" class="form-control">
							              </div>
							              <br>
							              <div class="form-group">
							              	<label>Descripción (Nombre de Archivo)</label>
							              	<input type="text" class="form-control">
							              	
							              </div>
							              <button type="button" class="btn btn-primary">Cargar Archivo</button>
							              
									</div>
									<br><br>
									
								</div>
								<div class="col-md-6">
									<div class="btn-group btn-group-justified">
										<a href="" onclick="" class="btn btn-success">Solicitud de Documentos</a>
							              <a href="" class="btn btn-danger">Borrar</a>
									</div>
									
									<div id="scroll">
											<table class="table table-bordered">
												<tr>
													<td>Documentos</td>
													
													<td></td>
												</tr>
												<tr>
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