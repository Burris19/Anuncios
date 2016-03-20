<table class="table table-bordered table-striped mb-none" id="datatable-editable">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Enlace url</th>
        <th>Acción</th>
    </tr>
    </thead>
    <tbody class="crud-table-body">
        <tr class="gradeX crud-table-clone" style="display: none;">
            <td>name</td>
            <td>url</td>
            <td class="actions">
                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                <a href="/admin/configure-column-one" data-id="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                <a href="/admin/configure-column-one" data-id="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
        @foreach($data as $key => $item)
            <tr class="gradeX">
                <td>{!! $item->name !!}</td>
                <td>{!! $item->URL !!}</td>
                <td class="actions">
                    <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                    <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                    <a href="/admin/configure-column-one" data-id="{!! $item->id !!}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                    <a href="/admin/configure-column-one" data-id="{!! $item->id !!}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



