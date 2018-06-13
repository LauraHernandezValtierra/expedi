@extends('home')
@section('nivel3','Resumen')
@push('styles')

@endpush
@section('content')
@include('expediente')

		  <br>
		  <div class="container">
		  	<div class="row">
		  		<h3>Resumen</h3>
		  		<div class="box box-default">
					<div class="box-body" >
					  	<div class="col-md-2">
							<div class="form-group">
							    <label>Mínimo a Pagar</label>   
							    <input type="txt" name="" class="form-control" value="{{$expediente->minapagar}}"readonly>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							    <label>Fecha de Salida</label>   
							    <input type="date" name="" class="form-control" value="{{$expediente->dfechasalida}}" readonly>
							    <!--<button type="button" class="btn btn-primary btn-xs">Cambiar Fecha</button>-->
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							    <label>Fecha de Regreso</label>   
							    <input type="date" name="" class="form-control" readonly>
							    <!--<button type="button" class="btn btn-primary btn-xs">Cambiar Fecha</button>-->
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							    <label>Notas</label>   
							    <textarea class="form-control" readonly></textarea>
							    <!--<button type="button" class="btn btn-primary btn-xs">Agregar Comentario</button>-->
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							   <!--<button type="button" class="btn btn-warning">Cerrar Expediente</button>-->

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="box box-primary">
					<div class="box-header with-border">
						<div class="box-title"> Paquete</div>
					</div>
					<div class="box-body">
						<!--<div class="col-md-2">
							<div class="form-group">
							    <label>Paquete</label>   
							    <select class="form-control">
							    	<option></option>
							    </select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							    <label>Área</label>   
							    <select class="form-control">
							    	<option></option>
							    </select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							    <label>MT</label>   
							    <select class="form-control">
							    	<option></option>
							    </select>
							</div>
						</div>
						<div class="col-md-2">
							<label>Clave MT</label> 
							<div class="input-group input-group-sm"> 
								 
				                <input type="text" class="form-control"  name="clave MT" id="MT" >
				                    <span class="input-group-btn">
				                      <button type="button" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
				                    </span>
				             </div>
						</div>-->

						<div class="texto col-md-12">
							
							<!--<label class="text-red">*Solo se permite la captura de un paquete</label>-->
							<div>
								<div  class="col-md-2">
									<label>Paquete</label>
									<input type="text" name=""  class="form-control"value="PRINCIPAL"readonly>
								</div>
								<div  class="col-md-1">
									<label>No. Área</label>
									<input type="text" name=""  class="form-control"value="{{$expediente->nid_area}}"readonly>
								</div>
								<div  class="col-md-2">
									<label>Área</label>
									<input type="text" name="" class="form-control" value="{{$expediente->area}}"readonly>
								</div>
								<div  class="col-md-2">
									<label>MT</label>
									<input type="text" name=""  class="form-control"value="{{$expediente->cid_destin}}"readonly>
								</div>
								<div  class="col-md-3">
									<label>Nombre del Paquete</label>
									<input type="text" name=""  class="form-control"value="{{$expediente->paquete}}" readonly>
								</div>
							
								<div class="col-md-2">
									<label>Observaciones</label>
									<textarea class="form-control" readonly>{{$expediente->observa}}</textarea>
								</div>
						<!--<div class="col-md-4">
						
							<button type="button" class="btn btn-success">Agregar</button>
							<button type="button" class="btn btn-info" disabled>Editar</button>
							<button type="button" class="btn btn-danger" disabled>Eliminar</button>
						</div>-->
						</div></div>
					<br><br>
					<div class="row">
						
						<div class="col-md-3">
							<div class="form-group">
							    <label>Promoción</label> 
							    <input type="text" name="" value="" class="form-control" readonly>  
							    <!--<select class="form-control">
							    	<option></option>
							    </select>-->
							</div>
							
						</div>
						<div class="col-md-2">
							
								<div class="checkbox">
							      <label><input type="checkbox" value="" disabled>T.C. Preferencial</label>
							      <input type="text" name="" class="form-control" readonly>
							    </div>
							    <div class="checkbox">
							      <label><input type="checkbox" value="" disabled>Meses sin Intereses</label>
							      <input type="text" name="" class="form-control" readonly>
							    </div>
							    <div class="checkbox">
							      <label><input type="checkbox" value="" disabled>Tarifa Aerea Promocional</label>
							    </div>
							
						</div>
						<div class="col-md-2">
							
								<div class="checkbox">
							      <button type="button" class="btn btn-primary">Envío Mail Quinceañeras</button>
							    </div>
						</div>
					</div>
				</div>
				</div>
				
			</div>
		  </div>
	</div>


	  	<br><br>
</div>

@endsection