<div class="topbar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="top-details">
                    <strong>{!! $principal->topText !!}</strong>
                    <span><i class="fa fa-envelope-o"></i> <a href="{!! $principal->email !!}">{!! $principal->email !!}</a></span>
                    <span><i class="fa fa-phone"></i>  {!! $principal->phone !!}</span>
                </div>
            </div><!-- end left -->
            <div class="col-md-6 text-right">
                {{--<div class="btn-group">--}}
                    {{--<div class="input-group stylish-input-group">--}}
                        {{--<input type="text" class="form-control"  placeholder="Buscar" >--}}
                        {{--<span class="input-group-addon">--}}
                            {{--<button type="submit">--}}
                                {{--<span class="fa fa-search"></span>--}}
                            {{--</button>--}}
                        {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img src="/assets-frontend/images/icons/languages.png" alt="English"> <span class="fa fa-angle-down"></span></button>
                    <ul class="dropdown-menu start-right" role="menu">
                        <li><a href="#"><img src="/assets-frontend/images/icons/en.png" alt="English"></a></li>
                        <li><a href="#"><img src="/assets-frontend/images/icons/es.png" alt="Español"></a></li>
                    </ul>
                </div><!-- /btn-group -->
            </div><!-- end left -->
        </div><!-- end row -->
    </div><!-- end container -->
</div>