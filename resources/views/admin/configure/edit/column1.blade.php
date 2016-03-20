<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['url' => '/admin/configure-column-one/' . $data->id, 'method' => 'PUT', 'class' => 'UpdateForm']) !!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">

                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{!! $data->name !!}" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Enlace</label>
                            <input type="text" class="form-control" name="URL" value="{!! $data->URL !!}" required>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" data-type="modal" class="btn btn-primary updateModal">Save changes</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
