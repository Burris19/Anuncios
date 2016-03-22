@extends('frontend.base.layout')

@section('content')
    <div class="wrapper">
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
                        <div class="btn-group">
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control"  placeholder="Buscar" >
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <span class="fa fa-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img src="assets-frontend/images/icons/languages.png" alt="English"> <span class="fa fa-angle-down"></span></button>
                            <ul class="dropdown-menu start-right" role="menu">
                                <li><a href="#"><img src="assets-frontend/images/icons/en.png" alt="English"></a></li>
                                <li><a href="#"><img src="assets-frontend/images/icons/es.png" alt="Español"></a></li>
                            </ul>
                        </div><!-- /btn-group -->
                    </div><!-- end left -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end topbar -->

        <header class="header header-white">
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default yamm">
                            <div class="container-header">
                                <div class="navbar-table">
                                    <div class="navbar-cell tight">
                                        <div class="navbar-header">
                                            <a class="navbar-brand" href="index.html"><img src="assets-frontend/images/logo.png" alt="Ova"></a>
                                            <div>
                                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="fa fa-bars"></span>
                                                </button>
                                            </div>
                                        </div><!-- end navbar-header -->
                                    </div><!-- end navbar-cell -->

                                    <div class="navbar-cell stretch">
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                            <div class="navbar-cell">
                                                <ul class="nav navbar-nav navbar-right">
                                                    <li>
                                                        <a href="#">Inicio</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Escorts</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Trans</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Boys</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Agencias</a>
                                                    </li>
                                                </ul>
                                            </div><!-- end navbar-cell -->
                                        </div><!-- /.navbar-collapse -->
                                    </div><!-- end navbar cell -->
                                </div><!-- end navbar-table -->
                            </div><!-- end container fluid -->
                        </nav><!-- end navbar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </header>

        <div class="slider-section">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        @foreach($sliders as $slider)
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="{!! $slider->URL !!}"  data-saveperformance="off"  data-title="{!! $slider->name !!}">
                                <img src="{!! $slider->URL !!}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div><!-- end SLIDER -->

        <section class="section white">
            <div class="container">
                <div class="big-title text-center">
                    <h3>Escorts Deluxe</h3>
                    <hr>
                    <p class="lead">{!! $principal->bannersDescription !!}</p>
                </div><!-- end title -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="assets-frontend/upload/team_01.jpg" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>Josephine</h3>
                            <small>Escort deluxe</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="assets-frontend/upload/team_02.jpg" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>Ariadna</h3>
                            <small>Escort deluxe</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="assets-frontend/upload/team_03.jpg" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>Sara</h3>
                            <small>Escort deluxe</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="assets-frontend/upload/team_04.jpg" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>Sabrina</h3>
                            <small>Escort deluxe</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->


        <section class="section white">
            <div class="container">
                <div class="big-title text-center">
                    <h3>Escorts Destacadas</h3>
                    <hr>
                    <p class="lead">{!! $principal->featuredDescription !!}</p>
                </div><!-- end title -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="assets-frontend/upload/team_01.jpg" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>Josephine</h3>
                            <small>Escort deluxe</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="assets-frontend/upload/team_02.jpg" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>Ariadna</h3>
                            <small>Escort deluxe</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="assets-frontend/upload/team_03.jpg" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>Sara</h3>
                            <small>Escort deluxe</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="assets-frontend/upload/team_04.jpg" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>Sabrina</h3>
                            <small>Escort deluxe</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section fullscreen paralbackground parallax" style="background-image:url('assets-frontend/upload/parallax_01.jpg');" data-img-width="1920" data-img-height="504" data-diff="100">
            <div class="container">
                <hr class="invis">
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section white">
            <div class="container">
                <div id="owl-portfolio" class="owl-custom">
                    @foreach($banners as $banner)
                        <div class="owl-item">
                            <div class="entry">
                                <img src="{!! $banner->photo !!}" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="{!! $banner->name !!}" href="{!! $banner->URL !!}"><i class="fa fa-link"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                        </div><!-- end owl-item -->
                    @endforeach



                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->



        <section class="section white">
            <div class="container">
                <div class="big-title text-center">
                    <h3>Novedades</h3>
                    <hr>
                    <p class="lead">{!! $principal->novelties !!}</p>
                </div><!-- end title -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="assets-frontend/upload/team_01.jpg" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>Josephine</h3>
                            <small>Escort deluxe</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="assets-frontend/upload/team_02.jpg" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>Ariadna</h3>
                            <small>Escort deluxe</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="assets-frontend/upload/team_03.jpg" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>Sara</h3>
                            <small>Escort deluxe</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="assets-frontend/upload/team_04.jpg" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="#"><i class="fa fa-heart-o"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>Sabrina</h3>
                            <small>Escort deluxe</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section fullscreen paralbackground parallax" style="background-image:url('assets-frontend/upload/parallax_02.jpg');" data-img-width="1920" data-img-height="612" data-diff="100">
            <div class="container">
            </div><!-- end container -->
        </section><!-- end section -->


        <footer class="section footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget">
                            <div class="about-widget">
                                <address>
                                    <i class="fa fa-envelope-o alignleft"></i>
                                    <strong>Email:</strong>
                                    <p><a href="{!! $principal->email !!}">{!! $principal->email !!}</a></p>
                                </address>
                                <address>
                                    <i class="fa fa-phone alignleft"></i>
                                    <strong>Teléfono</strong>
                                    <p>{!! $principal->phone !!}</p>
                                </address>
                            </div><!-- end about-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget">

                            <div class="latest-posts">
                                <div class="media">
                                    <div class="media-body">
                                        @foreach($column1 as $column)
                                            <h4 class="media-heading"><a href="{!! $column->URL !!}" title="">{!! $column->name !!}</a></h4>
                                        @endforeach
                                    </div>
                                </div>
                            </div><!-- end latest-posts -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget">

                            <div class="latest-posts">
                                <div class="media">
                                    <div class="media-body">
                                        @foreach($column2 as $column)
                                            <h4 class="media-heading"><a href="{!! $column->URL !!}" title="">{!! $column->name !!}</a></h4>
                                        @endforeach

                                    </div>
                                </div>
                            </div><!-- end latest-posts -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="widget">

                            <div class="latest-posts">
                                <div class="media">
                                    <div class="media-body">
                                        @foreach($column2 as $column)
                                            <h4 class="media-heading"><a href="{!! $column->URL !!}" title="">{!! $column->name !!}</a></h4>
                                        @endforeach
                                    </div>
                                </div>
                            </div><!-- end latest-posts -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        <footer class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>Copyright © 2016. Todos los derechos reservados </p>
                    </div><!-- end col -->
                    <div class="col-md-6 text-right">
                        <ul class="list-inline">
                            <li><a href="#">Condiciones legales</a></li>
                        </ul>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end copyrights -->

    </div>
@endsection