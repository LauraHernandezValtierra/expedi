<div id="docreembolsos" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Documentos de Soporte para Reembolsos</h4>
                        </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="form-group col-md-2">
                                <label>Expediente</label>
                                <input type="text" name="Expediente" value="{{$expediente->cid_expediente}}" class="form-control">
                              </div>
                              <div class="form-group col-md-2">
                                <label>Clave del Cliente</label>
                                <input type="text" name="Expediente" value="{{$expediente->cid_cliente}}" class="form-control">
                              </div>
                              <div class="form-group col-md-5">
                                <label>Nombre del Cliente</label>
                                <input type="text" name="Expediente" value="{{$expediente->cnombre}} {{$expediente->capellidop}} {{$expediente->capellidom}}" class="form-control">
                              </div>
                              <div class="form-group col-md-3">
                                <label>Solicitud Reembolso</label>
                                <input type="text" name="Expediente" value="" class="form-control">
                              </div>
                            </div>
                            <!--<div class="row">
                              <div class="form-group col-md-3">
                                <label>Archivo</label>
                                <select name="archivore" id="archivore" class="form-control">
                                  <option value="0">-Archivo-</option>
                                  <option value="1">Cédula Fiscal</option>
                                  <option value="2">Solicitud Reembolso</option>
                                  <option value="3">Carta Reembolso</option>
                                  <option value="4">Recibo</option>
                                </select>
                              </div>
                            </div>-->
                            <div id="ventana">
                                <iframe src=""  style="width:850px; height:500px;" frameborder="0">
                                    
                                </iframe>
                               
                            </div>  
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
            </div>