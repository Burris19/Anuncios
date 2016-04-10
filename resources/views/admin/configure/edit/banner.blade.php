@extends('admin.configure.edit.column1')

@section('content_modal')
    <div class="form-group">
        <label for="message-text" class="control-label">{!! trans('label.link') !!}</label>
        {{--<input type="text" class="form-control" name="URL" value="{!! $data->URL !!}" required>--}}
        <input type="text" name="photo" value="{!! $data->photo !!}">
    </div>
@endsection