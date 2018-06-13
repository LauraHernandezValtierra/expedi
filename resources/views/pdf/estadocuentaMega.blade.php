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

            .trcolor{
                background-color: #9AB5D2;
            }
            .trcolor2{
                background-color: #E2F0FF  ;  
            }

  </style>
</head>
<body>
	<table width='100%'>
        <tr>
            <td>
                <img src='http://lax.megatravel.com.mx/expo/img/logo_mt_.png' width='200px'>
            </td>
            <th><h2 align="center">ESTADO DE CUENTA</h2></th>
            <td class="t2">
                 Elaboró: {{ Auth::user()->cid_empleado}} - {{Auth::user()->cnombre }} {{Auth::user()->capellidop }} {{Auth::user()->capellidom }}<br> {{$hoy}}
            </td>
        </tr>
    </table>
    <table width='100%'>
    	<tr>
    		<th>Cliente: </th><td>{{$cliente->cnombre}} {{$cliente->capellidop}} {{$cliente->capellidom}}</td>
    		<th>Expediente</th><td>{{$exp}}</td>
    	</tr>
    	<tr>
    		<th>Funcionario: </th><td>{{$funcionario->cid_funcionario}} - {{$funcionario->cnombre}} {{$funcionario->capellidop}} {{$funcionario->capellidom}}</td>
    		<th>Ventas: </th><td>({{$expediente->inicempleado}}) {{$expediente->nomempleado}}</td>
    	</tr>
    	<tr>
    		<th>Ubicación: </th><td></td>
    		
    	</tr>
    </table>
    <hr>
     @foreach($recibos as $rec)
    <table width="100%" border="1" class="table th td">
        <tr class="trcolor">
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
    </table>
    <table width="100%" border="1" class="table th td trcolor2">
        <tr>
            <td>
                <table>

                    <tr>
                        <th>Ingreso Ventas</th>
                    </tr>
                    <tr>
                        <td>Importe</td><td>{{$rec->monto}}</td>
                    </tr>
                    <tr>
                        <td>Cargo Admon 0.00%</td>
                    </tr>
                    <tr>
                        <td>Cargo Admon USD</td>
                    </tr>
                     <tr>
                        <th>Importe Ventas</th>
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <th>Comisión a Cargo de Mega</th>
                    </tr>
                    <tr>
                        <td>Importe</td><td align="right">{{$rec->monto}}</td>
                    </tr>
                    <tr>
                        <td>Comisión Mega 2.18%</td><td align="right">{{$comision=number_format($rec->monto*$porcommega,2)}}</td>
                    </tr>
                    <tr>
                        <td>Comisión Mega USD</td><td align="right">{{number_format($commusd=$comision/$rec->intercam,2)}}</td>
                    </tr>
                </table>
            </td>
            <td>
                 <table>
                    <tr>
                        <th>Ingreso Bancos</th>
                    </tr>
                    <tr>
                        <td>Importe</td><td align="right">{{$rec->monto}}</td>
                    </tr>
                    <tr>
                        <td>Comisión Bancaria 2.18%</td><td align="right">{{$combanmxn=number_format($rec->monto*$porcomb,2)}}</td>
                    </tr>
                    <tr>
                        <th>Importe a Bancos</th><td align="right">{{number_format($impban=$rec->monto-$combanmxn,2)}}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
        <br>
        @endforeach
    <br>
    <table width="100%" align="right" border="1" class="table th td ">
        <tr class='trcolor'>
            <th></th>
            <th>Ingreso Bruto </th>
            <th>Cargo Adm </th>
            <th>Ingreso Venta</th>
            <th>Com Mega</th>
            <th>Com Banco</th>
        </tr>
        <tr>
            <td>MXN</td>
            <td>{{number_format($montomxn,2)}}</td>
            <td></td>
            <td>{{number_format($montomxn,2)}}</td>
            <td>{{$cm}}</td>
            <td>{{$cb}}</td>
        </tr>
        <tr>
            <td>USD</td>
            <td>{{number_format($montousd,2)}}</td>
            <td></td>
            <td>{{number_format($montousd,2)}}</td>
            <td>{{$cmusd}}</td>
            <td>{{$cbusd}}</td>
        </tr>
         <tr>
            <td colspan="6">Ingreso neto es menos la Comisión Bancaria</td>
        </tr>
    </table>
  

</body>
</html>