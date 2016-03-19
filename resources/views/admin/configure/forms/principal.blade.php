<div class="panel-body">
    {!! Form::open(['url' => '/admin/configure-principal/' . $data->id, 'method' => 'PUT', 'class' =>  'sendForm']) !!}
    <div class="row left">

        <div class="form-group">
            {!! Form::label('textoSuperior','Texto Superior',['class'=>'col-md-3 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('topText', $data->topText ,['class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('email','Email',['class'=>'col-md-3 control-label']) !!}
            <div class="col-md-6">
                <div class="input-group mb-md">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    {!! Form::text('email', $data->email,['class'=>'form-control','placeholder'=>'Email','required' => 'required']) !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('phone','Telefono',['class'=>'col-md-3 control-label']) !!}
            <div class="col-md-6">
                <div class="input-group mb-md">
                    <span class="input-group-addon">
                        <i class="fa fa-phone"></i>
                    </span>
                    {!! Form::number('phone',$data->phone,['class'=>'form-control','placeholder'=>'Telefono','required' => 'required', 'min' => '1']) !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" for="textareaDefault">Descripción Destacadas:</label>
            <div class="col-md-6">
                {!! Form::textarea('featuredDescription', $data->featuredDescription, ['rows' => '5','cols' => '10','class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" for="textareaDefault">Descripción Novedades:</label>
            <div class="col-md-6">
                {!! Form::textarea('novelties', $data->novelties, ['rows' => '5','cols' => '10','class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" for="textareaDefault">Descripción Banners:</label>
            <div class="col-md-6">
                {!! Form::textarea('bannersDescription', $data->bannersDescription, ['rows' => '5', 'cols' => '10', 'class'=>'form-control','required' => 'required']) !!}
            </div>
        </div>

        <div class="panel-body">
            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button>
        </div>
    </div>
    {!! Form::close() !!}

</div>