@extends('home')
@push('styles')
@section('nivel3', 'Cobranza')
<style type="text/css">
        #scroll {
            overflow:scroll;
            height:150px;
        }
        
       
    </style>
    <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/iCheck/all.css')}}">
@endpush
@section('content')
@include('expediente')
		  <br>
		  <div class="container-fluid">
		  	 <h3>Cobranza</h3>
		  	<div class="row">
		  		<div class="box box-primary">
					<div class="box-body" >
					  	<div class="col-md-2">
							<div class="form-group">
							    <label>Fecha Límite de Pago</label>   
							    <input type="txt" name="" class="form-control"  readonly readonly>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							    <label>T. C. Consolidado</label>   
							    <input type="txt" name="" class="form-control" readonly readonly>
							</div>
						</div>
						<div class="col-md-2">
							<label>Total Paquete</label>
							<div class="input-group">
							    <input type="txt" name="" class="form-control" value="{{$expediente->totpaq}}" readonly readonly>
							    <span class="input-group-addon" >USD</span>
							</div>
						</div>
						<div class="col-md-2">
							<label>Mínimo a Pagar</label>   
							<div class="input-group">
							    <input type="text" value="{{$expediente->minapagar}}" class="form-control" readonly readonly>
							     <span class="input-group-addon">USD</span>
							</div>
						</div>
						<div class="col-md-2">
							 <label>Importe a Pagar</label> 
							<div class="input-group">
						      <input id="" type="text" class="form-control" name=""  readonly readonly>
						      <span class="input-group-addon">USD</span>
						    </div>
						</div>
					</div>
				</div>
			</div>
		
				<div class="row">
					<div class="box box-primary">
						<div class="box-header with-border">
						  <div class="box-title"> Pagos</div>
						</div>
						<div class="box-body" >
						
							<div class="texto col-md-12">
								<div id="scroll">
									<table class="table table-bordered">
										<tr>
											
											<th>F. Aut</th>
											<th>Folio</th>
											<th>Documento</th>
											<th>Soporte</th>
											<th>T.C</th>
											<th>Cargo Adm</th>
											<th>Ingreso en</th>
											<th>Ingresos(MXN)</th>
											<th>Insgresos(USD)</th>
											<th>Aplic Venta</th>
										</tr>
										@foreach($recibos as $rec)
										<tr>
											<td>{{$rec->dfecha}}</td>
											<td>{{$rec->folio}}</td>
											<td>RECIBO 
												<button type="button" class="btn btn-info btn-xs" data-name="{{asset('pdf/cobranza/recibodigital/'.$rec->folio.'.pdf')}}"  data-valor="Recibo Digital" data-toggle="modal" data-target="#docscobranza"  ><i class="fa fa-file-pdf-o "></i></button>
												<button type="button" class="btn btn-success btn-xs" data-name="{{asset('pdf/cobranza/documentosoporte/'.$rec->folio.'.pdf')}}" data-valor="Documento de Soporte"  data-toggle="modal" data-target="#docscobranza"><i class="fa fa-file-pdf-o "></i></button>
												<button type="button" class="btn btn-warning btn-xs" data-name="{{asset('pdf/cobranza/fichabancoreembolso/'.$rec->folio.'.pdf')}}"  data-valor="Ficha Banco Reembolso" data-toggle="modal" data-target="#docscobranza"><i class="fa fa-file-pdf-o "></i></button>
												<button type="button" class="btn btn-danger btn-xs" data-name="{{asset('pdf/cobranza/facturasat/'.$rec->folio.'.pdf')}}" data-valor="Factura SAT"  data-toggle="modal" data-target="#docscobranza"><i class="fa fa-file-pdf-o "></i></button>
											</td>
											<td>{{$rec->concepto}}</td>
											<td>{{$rec->intercam}}</td>
											<td></td>
											<td>{{$rec->moneda}}</td>
											@if($rec->moneda=='MXN')
											
											<td>{{$rec->monto}}</td>
											<td>0.00</td>
											<td>{{number_format($rec->monto / $rec->intercam, 2)}}</td>
											@else
											<td>0.00</td>
											<td>{{$rec->monto}}</td>
											<td>{{$rec->monto}}</td>
											@endif
										</tr>
										@endforeach
									</table>
								</div>
							</div>
							
							
							<div class="col-md-12">
								<div class="col-md-6">
									<div  class="col-md-12">
										<label>Datos de Comisión de Agencia</label>
									</div>
									<div class="col-md-12">
										<div  class="col-md-6">
										<label>Total Comisionables</label>
										<div class="input-group">
												 <input id="" type="text" class="form-control" name="" >
										      <span class="input-group-addon">USD</span>
										  </div>
										</div>
										<div  class="col-md-6">
											<label>% Comisión</label>
											<input type="text" name=""  class="form-control"value="">
										</div>
									</div>
									<div  class="col-md-12">
										<label>Comisión de Agencia</label>
									</div>
									<div class="col-md-12">
										<div  class="col-md-6">

										<label>MXN</label>
										<div class="input-group">
												 <input id="" type="text" class="form-control" name="" >
										      <span class="input-group-addon">MXN</span>
										  </div>
									</div>
									<div  class="col-md-6">
										<label>USD</label>
										<div class="input-group">
												 <input id="" type="text" class="form-control" name="" >
										      <span class="input-group-addon">USD</span>
										  </div>
									</div>
									</div>
								</div>

								<div class="col-md-6">
									<div  class="col-md-3">
									<label>T.Ingresos</label>
									</div>
									<div  class="col-md-3">
										<label>MXN</label>
										<input type="text" name=""  class="form-control"value="{{$totmxn}}" readonly>
									</div>
									<div  class="col-md-3">
										<label>USD</label>
										<input type="text" name=""  class="form-control"value="{{$totusd}}" readonly>
									</div>
									<label>Total Aplic Venta</label>
									<div class="input-group">
								      <input id="" type="text" class="form-control" name="" value="{{$apventatotal}}"  readonly>
								      <span class="input-group-addon">USD</span>
								    </div>
								
									<div class="col-md-3">
										<label>T. Cargos Admon</label>
									</div>
									<div  class="col-md-3">
										<label>MXN</label>
										<input type="text" name=""  class="form-control"value="" readonly>
									</div>
									<div  class="col-md-3">
										<label>USD</label>
										<input type="text" name=""  class="form-control"value="" readonly>
									</div>
									<div  class="col-md-1">
										<label></label>
										<button type="button" class="btn btn-primary">Canc MSI</button>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<br>
								</div>
								<div class="col-md-12">
									<div class="col-md-6">
										<!--Botón menú de opciones de archivo-->
										<div class="col-md-4">
											<div class="dropdown">
												<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Opciones de Archivo
												<span class="caret"></span></button>
											  <ul class="dropdown-menu">
											    <li><a href="{{route('estadoCuenta',[$expediente->cid_expediente, $tipo=1])}}">Imprimir Estado de Cuenta</a></li>
											    <li><a href="{{route('estadoCuenta',[$expediente->cid_expediente,$tipo=2])}}">Estado de Cuenta para Clientes</a></li>
											    
											    <li><a href="#">Link-Pago Enviadas</a></li>
											  </ul>
											</div>
										</div>
										<div class="col-md-4">
											<div class="dropdown">
												<button type="button" class="btn btn-primary">Datos para Web</button>
											</div>
										</div>
										<div class="col-md-4">
											
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#solireembolso">Reembolsos</button>

												<!--Boton dropdown, menú de documentos --><div class="dropdown">
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" >Documentos de Reembolsos
													<span class="caret"></span></button>
												  <ul class="dropdown-menu">
												    
												    <li><button type="button" class="btn btn-link" data-toggle="modal" data-name="{{asset('pdf/reembolsos/cedulafiscal/'.$rec->folio.'.pdf')}}"  data-target="#docreembolsos">Cédula Fiscal</button></li>
												    <li><button type="button" class="btn btn-link" data-toggle="modal" data-name="{{asset('pdf/reembolsos/solicitud/'.$rec->folio.'.pdf')}}" data-target="#docreembolsos">Solicitud Reembolso</button></li>
												    <li><button type="button" class="btn btn-link" data-toggle="modal" data-name="{{asset('pdf/reembolsos/carta/'.$rec->folio.'.pdf')}}" data-target="#docreembolsos">Carta Reembolso</button></li>
												    <li><button type="button" class="btn btn-link" data-toggle="modal" data-name="{{asset('pdf/reembolsos/recibo/'.$rec->folio.'.pdf')}}" data-target="#docreembolsos">Recibo</button></li>
												  </ul>
												</div>
										</div>
										<div class="col-md-4">
											<!--Botón menú de opciones fiscales-->
											<div class="dropdown">
												<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Fiscales
												<span class="caret"></span></button>
											  <ul class="dropdown-menu">
											    <li><button type="button" class="btn btn-link" data-toggle="modal" data-target="#cadenapagoweb">Generar Cadena de Pago Web</button></li>
											    <li><button type="button" class="btn btn-link" data-toggle="modal" data-target="#datosfiscales"> Datos Fiscales</button></li>
											    <li><a href="#">Solicitar Factura SAT</a></li>
											  </ul>
											</div>
										</div>
										
									
									</div>
									<div class="col-md-6">
										<div class="col-md-6">
											<button type="button" class="btn btn-info btn-xs" disabled><i class="fa fa-file-pdf-o"></i></button><label>Ver Recibo Digital (PDF)</label><br>
												<button type="button" class="btn btn-success btn-xs" disabled><i class="fa fa-file-pdf-o "></i></button>
												<label>Ver Documento de Soporte</label><br>
										</div>
										<div class="col-md-6">
											<button type="button" class="btn btn-warning btn-xs" disabled><i class="fa fa-file-pdf-o "></i></button>
												<label>Ficha Banco Reembolso</label><br>
												<button type="button" class="btn btn-danger btn-xs" disabled><i class="fa fa-file-pdf-o "></i></button><label>Factura SAT</label>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<br><br>
		</div>
	</div>
	  	<br><br>
</div>

<!--Se separó el código ya que son muchas ventanas modal en esta sección, así es fácil encintrar cada una y llevar a cabo modificaciones-->
@include('modals.datosfiscales', array('expediente'=>$expediente))
@include('modals.solicitudcambiodatos', array('expediente'=>$expediente))
@include('modals.cadenapagoweb', array('expediente'=>$expediente))
@include('modals.solicitudreembolsos', array('expediente'=>$expediente))
@include('modals.docreembolsos', array('expediente'=>$expediente))
@include('modals.docscobranza')


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
            
            $("#ventana iframe").attr("src",$(this).data("name"));
            $("#ventana2 input").attr("value",$(this).data("valor"));
             
  });
</script>
@endpush