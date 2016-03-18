@include('admin.base.helpsLayout.breadcumb')
<!-- start: page -->
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                </div>
                <h2 class="panel-title">Configuración principal</h2>
            </header>
            <div class="panel-body">
                {!! Form::open(['url' => '/admin/configure-principal', 'method' => 'post', 'class' =>  'sendForm']) !!}
                    <div class="row left">
                        <div class="form-group">
                            
                            {!! Form::label('textoSuperior','Texto Superior',['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                
                            {!! Form::text('topText',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                             {!! Form::label('email','Email',['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-6">
                                <div class="input-group mb-md">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                    {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
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
                                    {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Telefono']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textareaDefault">Descripción Destacadas:</label>
                            <div class="col-md-6">
                                {!! Form::textarea('featuredDescription', null, ['row' => '1','class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textareaDefault">Descripción Novedades:</label>
                            <div class="col-md-6">
                                 {!! Form::textarea('novelties', null, ['row' => '1','class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textareaDefault">Descripción Banners:</label>
                            <div class="col-md-6">
                                 {!! Form::textarea(' bannersDescription', null, ['row' => '1','class'=>'form-control']) !!}
                               
                            </div>
                        </div>
                        <div class="panel-body">
                            <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button>

                        </div>
                    </div>
                {!! Form::close() !!}

            </div>
        </section>
    </div>
</div>

