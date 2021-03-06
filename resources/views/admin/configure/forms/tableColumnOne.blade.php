<table class="table table-bordered table-striped mb-none" id="tblListado">
    <thead>
    <tr>
        <th>{!! trans('label.name') !!}</th>
        <th>{!! trans('link') !!}</th>
        @yield('header')
        <th>{!! trans('actions') !!}</th>
    </tr>
    </thead>
    <tbody class="crud-table-body">
        <tr class="gradeX crud-table-clone" style="display: none;">
            <td>name</td>
            <td>url</td>
            <td class="actions">
                <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                <a href="/admin/{!! $rootBase !!}" data-id="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                <a href="/admin/{!! $rootBase !!}" data-id="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
        @if($rootBase == 'configure-column-one' || $rootBase == 'configure-column-two' || $rootBase == 'configure-column-tree')
            @include('admin.configure.forms.rowsColumns')
        @elseif($rootBase == 'configure-banner')
            @include('admin.configure.forms.rowsColumnsBanner')
        @endif

    </tbody>
</table>


<script>
    $('#tblListado').DataTable( {
        "language": {
            "lengthMenu": "Mostrar _MENU_ registror por pagína",
            "zeroRecords": "Ningun resultado ",
            "info": "pagína _PAGE_ de _PAGES_",
            "infoEmpty": "No hay ningun registro",
            "infoFiltered": "(buscados en _MAX_ registros existentes)",
            "paginate": {
                "first":      "Primero",
                "last":       "Ultimo",
                "next":       "Siguiente",
                "previous":   "Anterior"
            },
            "search":     "Buscar:"
        }
    } );
</script>