@extends('home')
@push('styles')
	<style type="text/css">
        #scroll {
            overflow:scroll;
            height:300px;
        }
       
       .titulo{
       		color: #001690;
       		text-align: center;
       }

       .subtitulo{
       		color: #B62F0E;
       		text-align: center;
       }
       #fondodiv{
       	background-color: white;
       	color: #394169;
       }
       body{
       	background-color:#ecf0f5;
       }

    </style>
<link rel="stylesheet" href="{{asset('adminlte/plugins/iCheck/all.css')}}">
<!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
      
@endpush
@section('content')
<div class="container" id="fondodiv">
	<div class="row">
		<div class="col-md-12">
			<img src="{{asset('assist-card.png')}}" width="250px">
			<h4 class="titulo">Solicitud de Seguros Assist Card</h4>
			<button type="button" class="btn btn-danger" onClick='javascript:history.back()'>Atrás</button>
		</div>
		<div class="col-md-12">
			<h5 class="subtitulo">Si sus pasajeros tienen edad mayor a 65 años en algunas categorías no son aplicables</h5>
		</div>
	</div>

	<table class="table table-condensed table-responsive " id="table">
			<thead>
				<tr>
					<th>Expediente</th>
					<th>Cotización</th>
					<th>Vendedor</th>
					<th>Moneda Exp</th>
					<th>T.C. Oficial</th>
					<th>Fecha Inicio Serv</th>
					<th>Fecha Fin Serv</th>
					<th>Días a cubrir</th>
					<th>F. Apertura Exp.</th>
				</tr>
			</thead>
				<tr>
					<td><input type="txt" name="expediente" value="{{$exp->cid_expediente}}" class="form-control" readonly></td>
					
					<td><input type="txt" name="cotizacion" value="{{$exp->cid_cotizacion}}" class="form-control"readonly ></td>
				
					<td><input type="text" name="vendedor" value="{{$exp->inicempleado}}-{{$exp->nomempleado}}" class="form-control" readonly></td>
				
					<td><input type="txt" name="moneda" value="{{$exp->moneda}}" class="form-control" readonly></td>
				
					<td><input type="txt" name="tc" value="" class="form-control" readonly></td>
			
					<td><input type="text" name="finicio" value="" class="form-control" id="datepicker" ></td>
					<td><input type="text" name="ffin" value="" class="form-control" id="datepicker2" onchange="fecha()"></td>
					<td><input type=""  name="dias" id="dias" value="" class="form-control" readonly ></td>
					<td><input type="date" name="fapertura" value="{{$exp->dfecha}}" class="form-control" readonly></td>
					
				</tr>
		
	</table>
	<div class="col-md-12" id="scroll">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Enviar</th>
					<th>Apellido(s)</th>
					<th>Nombre(s)</th>
					<th>No Pasaporte</th>
					<th>Fecha Nacimiento</th>
					<th>Email del Vendedor</th>
					<th>Inic Vendedor</th>
					<th>Edad</th>
					<th>Precio USD</th>
					<th>Precio MXN</th>
					<th>Upgrade</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pasajeros as $pax)
				<tr>
					<td>
						<div class="checkbox">
						  <label><input type="checkbox" value=""></label>
						</div>
					</td>
					<td>
						<input type="hidden" name="idpax" value="{{$pax->idpax}}">{{$pax->apellidop}} {{$pax->apellidom}}
					</td>
					<td>
						{{$pax->nombre}} 
					</td>
					<td>
						{{$pax->pasaporte}} 
					</td>
					<td>
						{{$pax->fechanac}} 
					</td>
					<td>
						{{$empleado->email}} 
					</td>
					<td>
						{{$empleado->ciniciales}} 
					</td>
					<td>
						
					</td>
					<td>
						0.00
					</td>
					<td>
						0.00
					</td>
					<td>
						0.00
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<div class="row">
				<div class="container">
					<input type="checkbox" onclick="marcar(this);"  /> Marcar/Desmarcar Todos 
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-4">
					<label><br><br></label>
					<label>Precio por Día</label>
					<label>Descuento</label>
				</div>
				<div class="col-md-4">
					<label>Edad de 0-64</label>
					<input type="text" name="" class="form-control" placeholder="Precio por día">
					<input type="text" name="" class="form-control" placeholder="Descuento">
				</div>
				<div class="col-md-4">
					<label>Edad de 65-66</label>
					<input type="text" name="" class="form-control" placeholder="Precio por día">
					<input type="text" name="" class="form-control" placeholder="Descuento">
				</div>
				
			</div>
		</div>

		<div class="col-md-3">
			<label>Tipo de Seguro</label>
			<select class="form-control" name="tiposeguro">
				<option value="0">Seleccionar</option>
			</select>
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-4">
				<label>Min Días</label>
				<input type="text" name="mindias" class="form-control">
				</div>
				<div class="col-md-4">
					<label>Max Días</label>
					<input type="text" name="maxdias" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<label>Upgrate X Pax</label>
					<input type="text" name="upxpax" class="form-control">
				</div>
			</div>
			
			
		</div>
		<div class="col-md-2">
			
			<button type="button" class="btn btn-primary"> Generar plantilla <br>y Enviar</button>
			<br><br><br>
			<button type="button" class="btn btn-danger" onClick='javascript:history.back()'>Atrás</button>
		</div>
	</div>
</div>


@endsection
@push('scripts')
	<script type="text/javascript">
		
		function marcar(source) 
		{
			checkboxes=document.getElementsByTagName('input'); //obtenemos todos los controles del tipo Input
			for(i=0;i<checkboxes.length;i++) //recoremos todos los controles
			{
				if(checkboxes[i].type == "checkbox") //solo si es un checkbox entramos
				{
					checkboxes[i].checked=source.checked; //si es un checkbox le damos el valor del checkbox que lo llamó (Marcar/Desmarcar Todos)
				}
			}
		}

	</script>
	<!-- iCheck 1.0.1 -->
<script src="{{asset('adminlte/plugins/iCheck/icheck.min.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

<script type="text/javascript">

	   $('#datepicker').datepicker({
	   	format: "dd/mm/yyyy",
        clearBtn: true,
        language: "es",
        autoclose: true,
        keyboardNavigation: false,
        todayHighlight: true
	   })

	   $('#datepicker2').datepicker({
	   format: "dd/mm/yyyy",
        clearBtn: true,
        language: "es",
        autoclose: true,
        keyboardNavigation: false,
        todayHighlight: true
    })


	    function fecha() {	  
	     var start = $(" input[name='finicio']").val();
			    var end   = $(" input[name='ffin']").val();
			    
			var inicial=start.split("/");

			var final=end.split("/");
			// obtenemos las fechas en milisegundos
			var dateStart=new Date(inicial[2],(inicial[1]-1),inicial[0]);
            var dateEnd=new Date(final[2],(final[1]-1),final[0]);

			    var days = (((dateEnd-dateStart)/86400)/1000);
			   
			         $("#dias").val(days);
			           
		  
	    }
	    	
	    

	  
</script>
@endpush
