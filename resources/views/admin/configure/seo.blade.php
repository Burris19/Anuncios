@include('admin.base.helpsLayout.breadcumb')
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                </div>
                <h2 class="panel-title">Configuración SEO</h2>
            </header>
            <div class="panel-body">

                {!! Form::open(['url' => '/admin/configure-seo/' . $data->id, 'method' => 'PUT', 'class' => 'sendForm' ]) !!}
                    <div class="row left">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textareaDefault">Descripción del sitio:</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" name="siteDescription" required>{!! $data->siteDescription !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textareaDefault">Keywords:</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" name="keywords" required>{!! $data->keywords !!}</textarea>
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