<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            {!! Form::open(['url' => '/admin/configure-column-one/' . $data->id, 'method' => 'DELETE', 'class' => 'deleteForm']) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 center">
                        <img src="assets/images/delete.png" alt="">
                    </div>

                    <div class="col-md-8">
                        <h2>Confirmar eliminacion del registro</h2>
                    </div>
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



