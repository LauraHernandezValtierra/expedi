@extends('home')
@section('nivel3','Pasajeros')
@push('styles')
<style type="text/css">
        #scroll {
            overflow:scroll;
            height:150px;
        }
       .divbtn{
       	border: 1px solid #3c8dbc;
       }
    </style>
      <link rel="stylesheet" href="{{asset('adminlte/plugins/iCheck/all.css')}}">
@endpush
@section('content')
@if(Session::has('mensaje_success'))
        <div class="alert alert-success alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <i class="icon fa fa-check"></i><strong>Success!</strong> {{Session::get('mensaje_success')}}
        </div>
    @endif
    @if(Session::has('mensaje_error'))
        <div class="alert alert-warning alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <i class="icon fa fa-ban"></i><strong>Error!</strong> {{Session::get('mensaje_error')}}
        </div>
    @endif
@include('expediente')
		  <br>
		  <div class="container">
		  	 <h3>Pasajeros</h3>
		  	<!--<div class="row">
		  		<form role="form"  name="agregarpasajero" action="{{route('agregarpasajero')}}" method="post"><input type="hidden" name="_token" value="{{ csrf_token() }}">
		  		<div class="panel panel-default">
					<div class="panel-body" >
					  	<div class="col-md-2">
							<div class="form-group">
							    <label>Apellido Paterno</label>   
							    <input type="txt" name="apellidop" class="form-control" >
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							    <label>Apellido Materno</label>   
							    <input type="txt" name="apellidom" class="form-control">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							    <label>Nombre(s)</label>   
							    <input type="txt" name="nombre" class="form-control">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							    <label>Título</label>   
							    <select name="titulo" class="form-control">
							    	<option value="MR">MR</option>
							    	<option value="MS">MS</option>
							    	<option value="JR">JR</option>
							    </select>
							</div>
						</div>
						<div class="col-md-1">
							<div class="checkbox">
							      <label><input type="checkbox" name="paxprincipal">Pasajero Principal</label>
							      <input type="hidden" name="exp" value="{{$expediente->cid_expediente}}">
							</div>
						</div>
						<div class="col-md-3">
							<br><br>
							<button type="submit"  class="btn btn-success">Agregar</button>	
						</div>
						<div class="col-md-12">
							<label class="text-red">*Los nombres deben de coincidir con los del pasaporte</label>
						</div>
					</div>
				</div>

				</form>
			</div>-->
			
		
				<div class="row">
					<div class="box box-primary">
						
						<div class="box-body" >
							
							<div class="texto col-md-9 col-lg-12">
							<div id="scroll">	
								<div>
									<div  class="col-md-2">
										<label></label>
										
									</div>
									<div  class="col-md-2">
										<label>Apellido Paterno</label>

									</div>
									<div  class="col-md-2">
										<label>Apellido Materno</label>
										
									</div>
									<div  class="col-md-2">
										<label>Nombre(s)</label>
										
									</div>
									<div  class="col-md-1">
										<label>Título</label>
										
									</div>
									<div  class="col-md-2">
										<label>P</label>
										
									</div>
									
								</div>
							
							@foreach($pasajeros as $pax)
							
								<div class="row">
									<div class="col-md-2">
									
										<button type="button" class="btn btn-info" data-name="{{$pax->idpax}} - {{$pax->apellidop}} {{$pax->apellidom}} {{$pax->nombre}}"  data-valor="{{$pax->idpax}}" data-toggle="modal" data-target="#datassistcard"  >Adicionales Assist Card</button>
									</div>
									<div  class="col-md-2">
										<input type="text" name=""  class="form-control"value="{{$pax->apellidop}}" readonly>
									</div>
									<div  class="col-md-2">
										<input type="text" name=""  class="form-control"value="{{$pax->apellidom}}" readonly>
									</div>
									<div  class="col-md-2">
										<input type="text" name="" class="form-control" value="{{$pax->nombre}}" readonly>
									</div>
									<div  class="col-md-1">
										<input type="text" name=""  class="form-control"value="{{$pax->titulo}}" readonly>
									</div>
									<div  class="col-md-2">
										@if($pax->principal==1)
									
									      <input type="text" class="form-control" value="PRINCIPAL"  readonly>
									    
									      @else
									  
									    @endif
									</div>
									
								</div>
							@endforeach
							</div></div>
							<div class="row">
								<div class="col-md-12">
									<div class="col-md-2">
										<div class=" col-md-12 col-sm-2 col-xs-3 divbtn">
											<a href="{{route('solicitud', $expediente->cid_expediente)}}">Solicitud de ASSIST CARD</a>
										</div>
									</div>
									<div class="col-md-2">
										<div class="dropdown">
										<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Opciones
										<span class="caret"></span></button>
									  <ul class="dropdown-menu">
									    <li><a href="#">Pax de Bloq (EU)</a></li>
									    <li><a href="#">Completar datos /Pax(EU)</a></li>
									    <li><a href="#">Exportar a Excel</a></li>
									  </ul>
									</div>
									</div>
									
								</div>
							</div>
						
						</div>
					</div>
			
			<br><br>
			<div class="row">
				<div class="box box-primary">
					
					<div class="box-body" >
						<div class="form-group">
							<label>Buscar Archivo</label>
							<input type="text" name="" class="form-control">
						</div>
						
							<!--<button type="button" class="btn btn-primary">Cargar Pasaporte</button>
						
							<button type="button" class="btn btn-primary">Cargar Visa</button>
						
							<button type="button" class="btn btn-primary">Cargar boleto Nevada</button>-->
						
							<button type="button" class="btn btn-primary">Consulta Pasaporte</button>
						
							<button type="button" class="btn btn-primary">Consulta Visa</button>
						
							<button type="button" class="btn btn-primary">Boletos Nevada</button>
					
					</div>
				</div>
			</div>


		</div>
	</div>


	  	<br><br>
</div>

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
						        			<input type="text" class="form-control" name="" value="" readonly>
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



@endsection
@push('scripts')
<!-- iCheck 1.0.1 -->
<script src="{{asset('adminlte/plugins/iCheck/icheck.min.js')}}"></script>

<script type="text/javascript">
//Flat red color scheme for iCheck
	  $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

	 
        $('.btn').click(function () {
            
            $("#ventana input").attr("value",$(this).data("name"));
              $("#ventana2 input").attr("value",$(this).data("valor"));
            });
     $(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function(){
    $(".alert-dismissible").alert('close');
  });
</script>
@endpush