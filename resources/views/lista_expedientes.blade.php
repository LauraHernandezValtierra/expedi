@extends('home')
@section('nivel1', 'Expediente')
@push('styles')
<style type="text/css">
        #scroll {
            overflow:scroll;
            height:500px;
        }
       
    </style>
    <link rel="stylesheet" href="{{asset('/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endpush
@section('title','Administración de Expedientes')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="{{ url('expedientes') }}">Administrar Expedientes</a></li>
			      <li class="dropdown">
			        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingresos
			        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><a href="#">Nueva Solicitud</a></li>
				          <li><a href="#">Cambio de Folio a Expediente</a></li>
				          <li><a href="#">Cancelar Expediente</a></li>
				        </ul>
				      <li><a href="#">Ver Bitácoras</a></li>
				      <li><a href="#">Comisiones</a></li>
				    </li>
				</ul>
			  </div>
			</nav>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<div class="box box-default">
			
			
				<div class="box-body">
					<div class="col-md-4">
						<table class="table table-striper table-hover table-fixed"  cellspacing="0" border="0">
				        <tbody>
				        	<tr id="filter_col1" data-column="0">
				                <td>Cotización</td>
				                <td align="center"><input type="text" class="column_filter" id="col0_filter"></td>
				               
				            </tr>
				            <tr id="filter_col2" data-column="1">
				                <td>Expediente</td>
				                <td align="center"><input type="text" class="column_filter" id="col1_filter"></td>
				               
				            </tr>
				          
				        </tbody>
				    </table>
					</div>
					<div class="col-md-4">
						<table class="table table-striper table-hover table-fixed"  cellspacing="0" border="0">
				        <tbody>
						<tr id="filter_col7" data-column="6">
				                <td>Empleado</td>
				                <td align="center"><input type="text" class="column_filter" id="col6_filter"></td>
				               
				            </tr>
				            <tr id="filter_col3" data-column="2">
				                <td>Fecha Ingreso</td>
				                <td align="center"><input type="date" class="column_filter" id="col2_filter"></td>
				                
				            </tr>
				        </tbody></table>
					</div>
					<div class="col-md-4">
						<table class="table table-striper table-hover table-fixed"  cellspacing="0" border="0">
				        <tbody>
				            <tr id="filter_col6" data-column="5">
				                <td>Nombre/Razón Social</td>
				                <td align="center"><input type="text" class="column_filter" id="col5_filter"></td>
				            </tr>
				        </tbody>
				    </table>
					</div>
					
				               
				          
				            
					
				</div>
			</div>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<div class="box box-info">
				<div class="box-header with-border">
	              <h3 class="box-title">Expedientes</h3>
	            </div>
				<div class="box-body">
					<div id="scroll">
						<table class="table table-striper table-hover table-fixed" id="tabla1">
							<thead>
								<tr>
									<th>Cotización</th>
									<th>Expediente</th>
									<th>Ingreso</th>
									<th>Paquete</th>
									<th>ID Cliente</th>
									<th>Nombre/Razón Social</th>
									<th>I. Ejec</th>
									<th># Emp</th>
									<th>Pax</th>
									<th>F.Salida</th>
									<th>F.Regreso</th>
									<th>T.Ope A</th>
									<th>T.Ope Terr</th>
									<th>Ver</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									@foreach($expediente as $exp)
									<td>{{$exp->cid_cotizacion}}</td>
									<td>{{$exp->cid_expediente}}</td>
									<td>{{$exp->dfecha}}</td>
									<td>{{$exp->paquete}}</td>
									<td>{{$exp->cid_cliente}}</td>
									<td>{{$exp->cnombre}} {{$exp->capellidop}} {{$exp->capellidom}}</td>
									<td>{{$exp->inicempleado}}</td>
									<td>{{$exp->numempleado}}</td>
									<td>{{$exp->pax}}</td>
									<td>{{$exp->dfechasalida}}</td>
									<td></td>
									<td></td>
									<td></td>
									<td><a href="{{route('ver_expediente', [$exp->cid_expediente, $act=1])}}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
								</tr>
								@endforeach
							</tbody>
							<tfoot>
					            <tr>
					               <th>Cotización</th>
									<th>Expediente</th>
									<th>Ingreso</th>
									<th>Paquete</th>
									<th>ID Cliente</th>
									<th>Nombre/Razón Social</th>
									<th>I. Ejec</th>
									<th># Emp</th>
									<th>Pax</th>
									<th>F.Salida</th>
									<th>F.Regreso</th>
									<th>T.Ope A</th>
									<th>T.Ope Terr</th>

					            </tr>
					        </tfoot>
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('scripts')
<!-- DataTables -->
<script src="{{asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src=".{{asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  
 function filterColumn ( i ) {
    $('#tabla1').DataTable().column( i ).search(
        $('#col'+i+'_filter').val()
        
    ).draw();
}
 
$(document).ready(function() {
    $('#tabla1').DataTable();
 
    $('input.global_filter').on( 'keyup click', function () {
        filterGlobal();
    } );
 
    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('tr').attr('data-column') );
    } );
} );

</script>
@endpush