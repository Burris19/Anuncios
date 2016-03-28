@extends('frontend.base.layout')

@section('content')



    <section class="section white">
        <div class="container">
            <div class="big-title text-center">
                <h3>Escorts Deluxe</h3>
                <hr>
                <p class="lead">Breve descripción para la sección de Escorts Deluxe</p>
            </div><!-- end title -->

            <hr class="invis">

            <div class="row">

                    @foreach($escortDelux as $profile)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <div class="entry">
                                    <img src="/{!! $profile->images['url1'] !!}" alt="">
                                    <div class="magnifier">
                                        <div class="visible-buttons">
                                            <a title="{!! $profile->name !!}" href="/profile/{!! $profile->code !!}" target="_blank"><i class="fa fa-heart-o"></i></a>
                                        </div><!-- end buttons -->
                                    </div><!-- end magnifier -->
                                </div><!-- end entry -->
                                <h3>{!! $profile->name !!}</h3>
                                <small>Escort deluxe</small>
                            </div><!-- end team-member -->
                        </div>
                    @endforeach


            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->


    <section class="section white">
        <div class="container">
            <div class="big-title text-center">
                <h3>Escorts</h3>
            </div><!-- end title -->

            <hr class="invis">

            <div class="row">
                @foreach($escortFeatured as $profile)
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="/{!! $profile->images['url1'] !!}" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="/profile/{!! $profile->code !!}" target="_blank"><i class="fa fa-heart-o"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <h3>{!! $profile->name !!}</h3>
                            <small>Escort Destacada</small>
                        </div><!-- end team-member -->
                    </div><!-- end col -->
                @endforeach
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section fullscreen paralbackground parallax" style="background-image:url('upload/parallax_01.jpg');" data-img-width="1920" data-img-height="504" data-diff="100">
        <div class="container">
            <hr class="invis">
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section white">
        <div class="container">
            <div id="owl-portfolio" class="owl-custom">
                @foreach($escortNovelties as $profile)
                    <div class="owl-item">
                        <div class="entry">
                            <img src="/{!! $profile->images['url1'] !!}" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <a title="{!! $profile->name !!}" href="/profile/{!! $profile->code !!}" target="_blank"><i class="fa fa-link"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div>
                @endforeach

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section fullscreen paralbackground parallax" style="background-image:url('upload/parallax_02.jpg');" data-img-width="1920" data-img-height="612" data-diff="100">
        <div class="container">
        </div><!-- end container -->
    </section><!-- end section -->

@endsection