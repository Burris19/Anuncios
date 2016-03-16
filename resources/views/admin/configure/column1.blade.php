@include('admin.base.helpsLayout.breadcumb')

<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                </div>
                <h2 class="panel-title">Links Footer Columna 1</h2>
            </header>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-md">
                            <button id="addToTable" class="btn btn-primary">Añadir <i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label class="col-md-1 control-label" for="inputDefault">Nombre:</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="inputDefault">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">

                    <div class="form-group">
                        <label class="col-md-1 control-label" for="inputDefault">Enlace:</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="inputDefault">
                        </div>
                    </div>
                </div>
                <br>
                <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Enlace url</th>
                        <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>Morenas</td>
                        <td>http://www.escortsinmallorca.com/index.html</td>
                        <td class="actions">
                            <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                            <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeC">
                        <td>Rubias</td>
                        <td>http://www.escortsinmallorca.com/index.html</td>
                        <td class="actions">
                            <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                            <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Castañas</td>
                        <td>http://www.escortsinmallorca.com/index.html</td>
                        <td class="actions">
                            <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                            <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>