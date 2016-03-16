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
                <div class="row left">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Texto superior:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputDefault">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">E-mail:</label>
                        <div class="col-md-6">
                            <div class="input-group mb-md">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
                                <input type="text" class="form-control" placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Teléfono:</label>
                        <div class="col-md-6">
                            <div class="input-group mb-md">
														<span class="input-group-addon">
															<i class="fa fa-phone"></i>
														</span>
                                <input type="text" class="form-control" placeholder="Teléfono">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textareaDefault">Descripción Destacadas:</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="3" id="textareaDefault"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textareaDefault">Descripción Novedades:</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="3" id="textareaDefault"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textareaDefault">Descripción Banners:</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="3" id="textareaDefault"></textarea>
                        </div>
                    </div>
                    <div class="panel-body">
                        <button type="button" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>