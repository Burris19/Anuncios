@include('admin.base.helpsLayout.breadcumb')
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                </div>
                <h2 class="panel-title">{!! trans('label.title_banners') !!}</h2>
            </header>
            <div class="panel-body">
                {!! Form::open(['url' => '/admin/configure-banner', 'method' => 'POST' , 'class' => 'sendForm', "enctype" => "multipart/form-data"]) !!}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-md">
                                <button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-floppy-o"></i> {!! trans('label.save') !!}</button>
                            </div>
                        </div>
                    </div>
                    @include('admin.configure.forms.banners')
                    <br>
                {!! Form::close() !!}

                @include('admin.configure.forms.tableBanners')

                <div id="modalDiv">
                </div>
            </div>
        </section>
    </div>
</div>
