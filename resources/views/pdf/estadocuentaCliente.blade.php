<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Estado de Cuenta Cliente</title>
  <style type="text/css">
  			.t1{
                font-size: 15px;
            }
            .t2{
                font-size: 8.5px;
            }
            table{
                font-size: 13px;
               

            }
            .table, .th, .td {
    border: 1px solid black;
    border-collapse: collapse;
}

  </style>
</head>
<body>
	<table width='100%'>
        <tr>
            <td>
                <img src='http://lax.megatravel.com.mx/expo/img/logo_mt_.png' width='200px'>
            </td>
            <th><h2 align="center">ESTADO DE CUENTA CLIENTE</h2></th>
            <td>
                <table  width="100%">
                    <tr>
                        <th align="center">Expediente</th>
                    </tr>
                    <tr>
                    	<td align="center" class="t1"><u><b>{{$exp}}</b></u></td>
                    </tr>
                </table>
                <table  width="100%">
                	<tr>
                        <th align="center">Moneda del Exp.</th>
                    </tr>
                    <tr>
                    	<td align="center">{{$expediente->moneda}}</td>
                    </tr>
                </table>   
               
            </td>
        </tr>
    </table>
    <table width='100%'>
    	<tr>
    		<th>Cliente: </th><td>{{$cliente->cnombre}} {{$cliente->capellidop}} {{$cliente->capellidom}}</td>
    		<th>Ventas: </th><td>({{$expediente->inicempleado}}) {{$expediente->nomempleado}}</td>
    	</tr>
    	<tr>
    		<th>Contacto: </th><td></td>
    		<th>Pax: </th><td>{{$recibo->pasajero}}</td>
    	</tr>
    	<tr>
    		<th>Ubicación: </th><td></td>
    		<th>Salida: </th><td>{{$recibo->fsalida}}</td>
    	</tr>
    	<tr>
    		<th>Destino: </th><td>{{$recibo->destino}}</td>
    		
    	</tr>
    </table>
    <br>
    <br>

    <p align="right">Mínimo a Pagar: {{$expediente->minapagar}}</p>
    <hr>
    <table width="100%" border="1" class="table th td">
        <tr>
            <th>Folio</th>
            <th>Moneda</th>
            <th>Documento </th>
            <th>Ingreso</th>
            <th>Pago</th>
            <th>T.C. </th>
            <th>Importe</th>
            <th>Importe MXN</th>
            <th>Importe USD </th>
            <th>Est</th>
        </tr>
        @foreach($recibos as $rec)
        <tr>
            <td>{{$rec->folio}}</td>
            <td>{{$rec->moneda}}</td>
            <td>RECIBO</td>
            <td>{{$rec->dfecha}}</td>
            <td>{{$rec->concepto}}</td>
            <td>{{$rec->intercam}}</td>
            <td align="right">{{$rec->monto}}</td>
            @if($rec->moneda=='MXN')
                                            
                                            <td align="right">{{$rec->monto}}</td>
                                            <td align="right">{{number_format($rec->monto/$rec->intercam,2)}}</td>
                                            
                                            @else
                                            <td align="right">{{number_format($rec->monto*$rec->intercam,2)}}</td>
                                            <td align="right">{{$rec->monto}}</td>
                                           
                                            @endif
            <td>EM</td>
        </tr>
        @endforeach
    </table>
    <table width="40%" align="right">
        <tr>
            <td> </td>
            <td> Total Pagado </td>
            <td>{{number_format($montomxn,2)}}</td>
            <td>{{number_format($montousd,2)}}</td>
        </tr>
        <tr>
            <td> </td>
            <td>Dif. a Pagar</td>
            <td>{{number_format($diferencia,2)}} {{$expediente->moneda}}</td>
        </tr>
    </table>
    <footer class="t2">
        Elaboró: {{ Auth::user()->cid_empleado}} - {{Auth::user()->cnombre }} {{Auth::user()->capellidop }} {{Auth::user()->capellidom }} {{$hoy}}
    </footer>
</body>
</html>