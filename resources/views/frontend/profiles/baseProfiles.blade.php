@extends('frontend.base.layout')

@section('content')
        <section class="panel form-wizard">
                <div class="tabs">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#w2-spanish" data-toggle="tab" class="text-center">
                                Español
                            </a>
                        </li>
                        <li>
                            <a href="#w2-english" data-toggle="tab" class="text-center">
                                Ingles
                            </a>
                        </li>
                    </ul>
                            <div class="tab-content">
                                @include('frontend.base.contentProfile')
                            </div>
                </div>
            </section>

   

    

    <section class="section white">
    <div class="container">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="about-widget">
    <address>
    <i class="fa fa-heart alignleft"></i>
    <strong>Edad:</strong>
    <p>27 años</p>
    </address>
    <address>
    <i class="fa fa-venus-mars alignleft"></i>
    <strong>Orientación sexual:</strong>
    <p>Bisexual</p>
    </address>
    <address>
    <i class="fa fa-check alignleft"></i>
    <strong>Fotos reales verificadas:</strong>
    </address>
    </div><!-- end service-box -->
    </div><!-- end col -->

    <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="about-widget">
    <address>
    <i class="fa fa-info alignleft"></i>
    <strong>Medidas:</strong>
    <p>95-60-92</p>
    </address>							<address>
    <i class="fa fa-info alignleft"></i>
    <strong>Altura:</strong>
    <p>1,67 m</p>
    </address>
    </div><!-- end service-box -->
    </div><!-- end col -->

    <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="about-widget">
    <address>
    <i class="fa fa-flag alignleft"></i>
    <strong>Nacionalidad:</strong>
    <p>Española</p>
    </address>							<address>
    <i class="fa fa-flag-o alignleft"></i>
    <strong>Idiomas:</strong>
    <p>Español e inglés</p>
    </address>
    </div><!-- end service-box -->
    </div><!-- end col -->

    </div><!-- end row -->
    </div><!-- end container -->
    </section><!-- end section -->

    <section class="section white">
    <div class="container">
    <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="team-member">
    <div class="entry">
    <img src="upload/team_01.jpg" class="" alt="">
    <div class="magnifier">
    <div class="visible-buttons">
    <a title="" href="upload/team_01.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
    </div><!-- end buttons -->
    </div><!-- end magnifier -->
    </div><!-- end entry -->
    </div><!-- end team-member -->
    </div><!-- end col -->

    <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="team-member">
    <div class="entry">
    <img src="upload/team_01.jpg" class="" alt="">
    <div class="magnifier">
    <div class="visible-buttons">
    <a title="" href="upload/team_01.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
    </div><!-- end buttons -->
    </div><!-- end magnifier -->
    </div><!-- end entry -->
    </div><!-- end team-member -->
    </div><!-- end col -->

    <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="team-member">
    <div class="entry">
    <img src="upload/team_01.jpg" class="" alt="">
    <div class="magnifier">
    <div class="visible-buttons">
    <a title="" href="upload/team_01.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
    </div><!-- end buttons -->
    </div><!-- end magnifier -->
    </div><!-- end entry -->
    </div><!-- end team-member -->
    </div><!-- end col -->

    <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="team-member">
    <div class="entry">
    <img src="upload/team_01.jpg" class="" alt="">
    <div class="magnifier">
    <div class="visible-buttons">
    <a title="" href="upload/team_01.jpg" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
    </div><!-- end buttons -->
    </div><!-- end magnifier -->
    </div><!-- end entry -->
    </div><!-- end team-member -->
    </div><!-- end col -->
    </div><!-- end row -->
    </div><!-- end container -->
    </section><!-- end section -->

    <section class="section fullscreen paralbackground parallax" style="background-image:url('upload/parallax_02.jpg');" data-img-width="1920" data-img-height="612" data-diff="100">
    <div class="container">
    </div><!-- end container -->
    </section><!-- end section -->


@endsection