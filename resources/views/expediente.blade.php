@section('title','Expediente')
@section('subtitle', $expediente->cid_expediente)
@section('nivel1', 'Expediente')
@section('nivel2', $expediente->cid_expediente)
<style type="text/css">
        #scroll {
            overflow:scroll;
            height:150px;
        }
       
    </style>
<div class="container">
<div class="row">
<div class="box box-success">
	<div class="box-body">
	  	<div class="col-md-2">
		  	<div class="form-group">
			    <h4>Expediente EXP.:<strong>{{$expediente->cid_expediente}}</strong></h4>      
			    <input type="hidden" name="" class="form-control">
			</div>
			<div class="form-group">
			    <label>Fecha de Apertura</label>
			    <p>{{$expediente->dfecha}}</p>      
			    <input type="hidden" name="fecha_apertura" class="form-control input-sm" value="{{$expediente->dfecha}}">
			</div>
			
			<div class="form-group">
			    <label>Total del Paquete</label> 
			    <p>{{$expediente->totpaq}}</p>      
			    <input type="hidden" name="totpaq" class="form-control input-sm" value="{{$expediente->totpaq}}">
			</div>
			<div class="form-group">
			    <label>Moneda</label>
			    <p>{{$expediente->moneda}}</p>       
			    <input type="hidden" name="moneda" class="form-control input-sm" value="{{$expediente->moneda}}">
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
			    <button type="button" class="btn btn-primary">Cotización</button> 
			    <p>{{$expediente->cid_cotizacion}}</p>      
			    <input type="hidden" name="cid_cotizacion" class="form-control input-sm" value="{{$expediente->cid_cotizacion}}">
			</div>
			<div class="form-group">
			    <label>Fecha de Cotización</label>  
			    <p>{{$expediente->dfecha}}</p>     
			    <input type="hidden" name="dfecha" class="form-control input-sm" value="{{$expediente->dfecha}}">
			</div>
			<div class="form-group">
			    <label>Ejecutivo</label>
			    <p>{{$expediente->inicempleado}}-{{$expediente->nomempleado}}</p> 
			    <input type="hidden" name="numempleado" class="form-control input-sm" value="{{$expediente->numempleado}}">      
			    <input type="hidden" name="" class="form-control input-sm" value="{{$expediente->inicempleado}}-{{$expediente->nomempleado}}">
			</div>
			<div class="form-group">
			    <label>Área</label>  
			    <p>{{$expediente->nid_area}} {{$expediente->area}}</p>     
			    <input type="hidden" name="" class="form-control input-sm" value="{{$expediente->nid_area}} {{$expediente->area}}">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
			    <label>Cliente</label>   
			    <p>{{$expediente->cid_cliente}} {{$expediente->cnombre}} {{$expediente->capellidop}} {{$expediente->capellidom}}</p>    
			    <input type="hidden" name="" class="form-control input-sm" value="{{$expediente->cid_cliente}} {{$expediente->cnombre}} {{$expediente->capellidop}} {{$expediente->capellidom}}">
			</div>
			<div class="form-group">
			    <label>Dirección</label>   
			    <p>{{$expediente->cestado}},{{$expediente->cmunicipio}}. TEL.: {{$expediente->clada}} {{$expediente->ctelefono}} {{$expediente->cext}}</p>    
			    <input type="hidden" name="" class="form-control input-sm" value="{{$expediente->cestado}},{{$expediente->cmunicipio}}. TEL.: {{$expediente->clada}} {{$expediente->ctelefono}} {{$expediente->cext}}">
			</div>
			<div class="form-group">
			    <label></label>      
			    <input type="txt" name="" class="form-control input-sm" value="{{$expediente->cid_funcionario}} {{$expediente->fnombre}} {{$expediente->fapellidop}}" readonly>
			</div>
			<div class="form-group">
			    <button type="button" class="btn btn-info"> Contactos de Envío</button>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
			    <label>Tipo Cliente</label> 
			    <p>{{$expediente->ctipocliente}}</p>      
			    <input type="hidden" name="" class="form-control input-sm" value="{{$expediente->ctipocliente}}">
			</div>
			<div class="form-group">
			    <label>Email de Contacto</label>
			    <p>{{$expediente->cmail}}</p>       
			    <input type="hidden" name="" class="form-control input-sm" value="{{$expediente->cmail}}">
			</div>
			<div class="form-group">
			    <label>Fecha de Salida</label>
			    <p>{{$expediente->dfechasalida}}</p>       
			    <input type="hidden" name="" class="form-control input-sm" value="{{$expediente->dfechasalida}}">
			</div>
		</div>
	  </div>
	</div>
</div>

	<div class="container">
	<div class="container">
	<ul class="nav nav-tabs">
			
			    <li ><a href="{{url('ver_expediente', [$expediente->cid_expediente, $act=1])}}">Resumen</a></li>
			    <li ><a href="{{url('ver_expediente', [$expediente->cid_expediente, $act=2])}}">Pasajeros</a></li>
			    <li><a href="{{url('ver_expediente', [$expediente->cid_expediente, $act=3])}}">Cobranza</a></li>
			    <li><a href="{{url('ver_expediente', [$expediente->cid_expediente, $act=4])}}">Boletos Aereos</a></li>
			    <li><a href="{{url('ver_expediente', [$expediente->cid_expediente, $act=5])}}">Pagos</a></li>
			    <li><a href="{{url('ver_expediente', [$expediente->cid_expediente, $act=6])}}">PDF</a></li>
			    <li><a href="{{url('ver_expediente', [$expediente->cid_expediente, $act=7])}}">Confirmaciones</a></li>

			
		</ul>
		  <br>
		</div>
	</div>