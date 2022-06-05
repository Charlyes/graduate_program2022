<!-- Adicionar Interveniente Modal -->
<div class="modal fade SetupG" tabindex="-1" role="dialog" id="addSchedule" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agendar atendimento</h5>
                <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addscheduleForm" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                    <label class="required">horario</label>
                            <div class="input-group mb-3">

                                <select name="" id="" class="js-example-responsive2 jss"  style="border-top-right-radius: 0; border-bottom-right-radius: 0;"  aria-label="Default select example" required>
                                    <option class="jsss"  disabled selected value="0">Seleccione treinador &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                    </option>
                                        <option class="jsss"  value=""></option>
                                </select>
                            </div>

                        </div>

                    <div class="col-6">
                        <label class="required">assunto </label>
                        <div class="input-group mb-3">
                                <select name="" id="train" class="js-example-responsive2 "  style="border-top-right-radius: 0; border-bottom-right-radius: 0;" aria-label="Default select example" required>
                                <option disabled selected value="0">Seleccione treinamento &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                <option  value=""></option>
                                </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                            <span class="input-group-text">Data </span>
                                <input type="date" name="date_start" id="date_start" class="form-control" aria-label="Username" aria-describedby="basic-addon1" >
                            </div>
                        </div>

                    
                        <div class="col-6">

                            <div class="input-group mb-3">
                            <span class="input-group-text">Hora </span>
                                <!-- <span class="input-group-text" >Data </span> -->
                                <input type="time" name="start_hour" id="start_hour" class="form-control" aria-label="Username" aria-describedby="basic-addon1" >
                            </div>
                        </div>
                        
                </div>


            <div class="row" id="" style="display:none">
                
                
            </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="delete" class="btn btn-danger">Apagar</button>
                <button type="submit" id="env" value="Env"  class="btn btn-primary">Salvar</button>
            </div>
        </form>
        </div>

        </div>
    </div>
