<div class="tab-pane" id = "archivos">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="row">
                <div class="row">
                    <div class="form-group col-xs-12" id = "content-file">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Descripcion</th>
                                <th style="width: 40px; text-align:center;">Seleccionar archivo</th>
                                <th style="text-align:center;" >Vista Previa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(config('photosProfile.archivos') as $key => $description )
                                <?php $field = "img".($key+1) ?>
                                <?php $name = "input".($key+1) ?>
                                <tr>
                                    <th>{{ $description }}</th>
                                    <th style="text-align:center; width: 40px;">
                                        <div style="background-image: url('cargar.png'); background-repeat: no-repeat; background-position: center center; " title="Seleccionar archivo desde su PC">
                                            <input type="file" style="outline: none; opacity: 0;" id="{{ $field }}" name="{{ $name }}"/>
                                        </div>
                                    </th>
                                    <th style="text-align:center;" ><img src="default.png" id="mm{{ $field }}" width='50' height='50' ></th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>