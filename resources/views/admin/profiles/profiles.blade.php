@extends('admin.app')

<header class="page-header">
    <h2>Administración</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.html">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>Perfiles</span></li>
        </ol>

        <a class="sidebar-right-toggle" data-open="#"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>

<!-- start: page -->
<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
    <div class="content-with-menu-container">
        <div class="inner-menu-toggle">
            <a href="#" class="inner-menu-expand" data-open="inner-menu">
                Mostrar Barra <i class="fa fa-chevron-right"></i>
            </a>
        </div>


        <menu id="content-menu" class="inner-menu" role="menu">
            <div class="nano">
                <div class="nano-content">

                    <div class="inner-menu-toggle-inside">
                        <a href="#" class="inner-menu-collapse">
                            <i class="fa fa-chevron-up visible-xs-inline"></i><i class="fa fa-chevron-left hidden-xs-inline"></i> Ocultar Barra
                        </a>
                        <a href="#" class="inner-menu-expand" data-open="inner-menu">
                            Mostrar Barra <i class="fa fa-chevron-down"></i>
                        </a>
                    </div>

                    <div class="inner-menu-content">

                        <hr class="separator" />

                        <a href="create" class="btn btn-block btn-primary btn-md pt-sm pb-sm text-md">
                            <i class="fa fa-upload mr-xs"></i>
                            Crear Perfil
                        </a>

                        <hr class="separator" />

                    </div>
                </div>
            </div>
        </menu>


        <div class="inner-body mg-main">

            <div class="inner-toolbar clearfix">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-pencil"></i> Editar</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-trash-o"></i> Borrar</a>
                    </li>
                    <li class="right" data-sort-source data-sort-id="media-gallery">
                        <ul class="nav nav-pills nav-pills-primary">
                            <li>
                                <label>Filtrar:</label>
                            </li>
                            <li class="active">
                                <a data-option-value="*" href="#all">Todos los perfiles</a>
                            </li>
                            <li>
                                <a data-option-value=".escorts" href="#escorts">Escorts</a>
                            </li>
                            <li>
                                <a data-option-value=".trans" href="#trans">Trans</a>
                            </li>
                            <li>
                                <a data-option-value=".boys" href="#boys">Boys</a>
                            </li>
                            <li>
                                <a data-option-value=".agencias" href="#agencias">Agencias</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">


                @foreach($data as $key => $value )

                    <div class="isotope-item {!! $value->category !!} col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="thumb-preview">
                                <a class="thumb-image" href="{!! $value->images['url2'] !!}">
                                    <img src="{!! $value->images['url2'] !!}" class="img-responsive" alt="Project">
                                </a>
                                <div class="mg-thumb-options">
                                    <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                    <div class="mg-toolbar">
                                        <div class="mg-option checkbox-custom checkbox-inline">
                                            <input type="checkbox" id="file_1" value="1">
                                            <label for="file_1">SELECT</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mg-title text-weight-semibold">{!! $value->name !!}</h5>
                            <div class="mg-description">
                                <small class="pull-left text-muted">{!! $value->category !!}</small>
                            </div>
                        </div>
                    </div>

                @endforeach
                {{--<div class="isotope-item escorts col-sm-6 col-md-4 col-lg-3">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<div class="thumb-preview">--}}
                            {{--<a class="thumb-image" href="assets/images/projects/image-1.jpg">--}}
                                {{--<img src="assets/images/projects/image-1.jpg" class="img-responsive" alt="Project">--}}
                            {{--</a>--}}
                            {{--<div class="mg-thumb-options">--}}
                                {{--<div class="mg-zoom"><i class="fa fa-search"></i></div>--}}
                                {{--<div class="mg-toolbar">--}}
                                    {{--<div class="mg-option checkbox-custom checkbox-inline">--}}
                                        {{--<input type="checkbox" id="file_1" value="1">--}}
                                        {{--<label for="file_1">SELECT</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<h5 class="mg-title text-weight-semibold">Nombre 1</h5>--}}
                        {{--<div class="mg-description">--}}
                            {{--<small class="pull-left text-muted">Escort</small>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="isotope-item agencias col-sm-6 col-md-4 col-lg-3">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<div class="thumb-preview">--}}
                            {{--<a class="thumb-image" href="assets/images/projects/image.jpg">--}}
                                {{--<img src="assets/images/projects/image.jpg" class="img-responsive" alt="Project">--}}
                            {{--</a>--}}
                            {{--<div class="mg-thumb-options">--}}
                                {{--<div class="mg-zoom"><i class="fa fa-search"></i></div>--}}
                                {{--<div class="mg-toolbar">--}}
                                    {{--<div class="mg-option checkbox-custom checkbox-inline">--}}
                                        {{--<input type="checkbox" id="file_2" value="1">--}}
                                        {{--<label for="file_2">SELECT</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<h5 class="mg-title text-weight-semibold">Nombre 2</h5>--}}
                        {{--<div class="mg-description">--}}
                            {{--<small class="pull-left text-muted">Agencia</small>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="isotope-item boys col-sm-6 col-md-4 col-lg-3">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<div class="thumb-preview">--}}
                            {{--<a class="thumb-image" href="assets/images/projects/image.jpg">--}}
                                {{--<img src="assets/images/projects/image.jpg" class="img-responsive" alt="Project">--}}
                            {{--</a>--}}
                            {{--<div class="mg-thumb-options">--}}
                                {{--<div class="mg-zoom"><i class="fa fa-search"></i></div>--}}
                                {{--<div class="mg-toolbar">--}}
                                    {{--<div class="mg-option checkbox-custom checkbox-inline">--}}
                                        {{--<input type="checkbox" id="file_3" value="1">--}}
                                        {{--<label for="file_3">SELECT</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<h5 class="mg-title text-weight-semibold">Nombre 3</h5>--}}
                        {{--<div class="mg-description">--}}
                            {{--<small class="pull-left text-muted">Boy</small>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="isotope-item trans col-sm-6 col-md-4 col-lg-3">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<div class="thumb-preview">--}}
                            {{--<a class="thumb-image" href="assets/images/projects/image.jpg">--}}
                                {{--<img src="assets/images/projects/image.jpg" class="img-responsive" alt="Project">--}}
                            {{--</a>--}}
                            {{--<div class="mg-thumb-options">--}}
                                {{--<div class="mg-zoom"><i class="fa fa-search"></i></div>--}}
                                {{--<div class="mg-toolbar">--}}
                                    {{--<div class="mg-option checkbox-custom checkbox-inline">--}}
                                        {{--<input type="checkbox" id="file_4" value="1">--}}
                                        {{--<label for="file_4">SELECT</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<h5 class="mg-title text-weight-semibold">Nombre 4</h5>--}}
                        {{--<div class="mg-description">--}}
                            {{--<small class="pull-left text-muted">Trans</small>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="isotope-item boys col-sm-6 col-md-4 col-lg-3">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<div class="thumb-preview">--}}
                            {{--<a class="thumb-image" href="assets/images/projects/image.jpg">--}}
                                {{--<img src="assets/images/projects/image.jpg" class="img-responsive" alt="Project">--}}
                            {{--</a>--}}
                            {{--<div class="mg-thumb-options">--}}
                                {{--<div class="mg-zoom"><i class="fa fa-search"></i></div>--}}
                                {{--<div class="mg-toolbar">--}}
                                    {{--<div class="mg-option checkbox-custom checkbox-inline">--}}
                                        {{--<input type="checkbox" id="file_5" value="1">--}}
                                        {{--<label for="file_5">SELECT</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<h5 class="mg-title text-weight-semibold">Nombre 5</h5>--}}
                        {{--<div class="mg-description">--}}
                            {{--<small class="pull-left text-muted">Boy</small>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="isotope-item escorts col-sm-6 col-md-4 col-lg-3">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<div class="thumb-preview">--}}
                            {{--<a class="thumb-image" href="assets/images/projects/image-1.jpg">--}}
                                {{--<img src="assets/images/projects/image-1.jpg" class="img-responsive" alt="Project">--}}
                            {{--</a>--}}
                            {{--<div class="mg-thumb-options">--}}
                                {{--<div class="mg-zoom"><i class="fa fa-search"></i></div>--}}
                                {{--<div class="mg-toolbar">--}}
                                    {{--<div class="mg-option checkbox-custom checkbox-inline">--}}
                                        {{--<input type="checkbox" id="file_6" value="1">--}}
                                        {{--<label for="file_6">SELECT</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<h5 class="mg-title text-weight-semibold">Nombre 6</h5>--}}
                        {{--<div class="mg-description">--}}
                            {{--<small class="pull-left text-muted">Escort</small>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="isotope-item agencias col-sm-6 col-md-4 col-lg-3">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<div class="thumb-preview">--}}
                            {{--<a class="thumb-image" href="assets/images/projects/image-1.jpg">--}}
                                {{--<img src="assets/images/projects/image-1.jpg" class="img-responsive" alt="Project">--}}
                            {{--</a>--}}
                            {{--<div class="mg-thumb-options">--}}
                                {{--<div class="mg-zoom"><i class="fa fa-search"></i></div>--}}
                                {{--<div class="mg-toolbar">--}}
                                    {{--<div class="mg-option checkbox-custom checkbox-inline">--}}
                                        {{--<input type="checkbox" id="file_7" value="1">--}}
                                        {{--<label for="file_7">SELECT</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<h5 class="mg-title text-weight-semibold">Nombre 7</h5>--}}
                        {{--<div class="mg-description">--}}
                            {{--<small class="pull-left text-muted">Agencia</small>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="isotope-item trans col-sm-6 col-md-4 col-lg-3">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<div class="thumb-preview">--}}
                            {{--<a class="thumb-image" href="assets/images/projects/image-1.jpg">--}}
                                {{--<img src="assets/images/projects/image-1.jpg" class="img-responsive" alt="Project">--}}
                            {{--</a>--}}
                            {{--<div class="mg-thumb-options">--}}
                                {{--<div class="mg-zoom"><i class="fa fa-search"></i></div>--}}
                                {{--<div class="mg-toolbar">--}}
                                    {{--<div class="mg-option checkbox-custom checkbox-inline">--}}
                                        {{--<input type="checkbox" id="file_8" value="1">--}}
                                        {{--<label for="file_8">SELECT</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<h5 class="mg-title text-weight-semibold">Nombre 8</h5>--}}
                        {{--<div class="mg-description">--}}
                            {{--<small class="pull-left text-muted">Trans</small>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</section>
