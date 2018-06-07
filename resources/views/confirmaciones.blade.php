@extends('home')
@section('nivel3','Confirmaciones')
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
<br>
		  <div class="container">
		  	<div class="row">
		  		 <h3>Confirmaciones</h3>
					<div class="panel panel-primary">
						<div class="panel-heading"></div>
						<div class="panel-body" >
							<div class="col-md-8">
									<div id="scroll">
										<table class="table table-bordered">
											<tr>
												<th>No. Confirmación</th>
												<th>Consecutivo</th>
												<th></th>
												
												
											</tr>
											
											<tr>
												<td></td>
												<td></td>
												
												<td><button type="button" data-toggle="modal"   data-target="#myModal" class="btn btn-info"><span class="glyphicon glyphicon-file"></span></button></td>
												
											</tr>
											
										</table>
									</div>
							</div>
							<div class="col-md-4">
									<button type="button" class="btn btn-primary">Ver Bitácoras</button>
									
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