@extends('admin.configure.forms.columnOne')

@section('content')
    <div class="row">
        <div class="form-group col-md-6">
            <label class="col-md-2 control-label" for="inputDefault">{!! trans('label.imagen') !!}</label>
            <div class="col-md-8">
                {{--<input type="file" class="form-control" name="photo">--}}
                <input type="text" name="photo" class="form-control">
            </div>
        </div>
    </div>
@endsection