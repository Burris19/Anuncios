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

                @if( !empty($profile[0]->url1) )

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="/{{ $profile[0]->url1 }}" class="" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="/{{ $profile[0]->url1 }}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                        </div><!-- end team-member -->
                    </div><!-- end col -->

                @endif

                @if( !empty($profile[0]->url2) )

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="/{{ $profile[0]->url2 }}" class="" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="/{{ $profile[0]->url2 }}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                        </div><!-- end team-member -->
                    </div><!-- end col -->

                @endif

                @if( !empty($profile[0]->url3) )

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="/{{ $profile[0]->url3 }}" class="" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="/{{ $profile[0]->url3 }}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                        </div><!-- end team-member -->
                    </div><!-- end col -->

                @endif

                @if( !empty($profile[0]->url4) )

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="team-member">
                            <div class="entry">
                                <img src="/{{ $profile[0]->url4 }}" class="" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        <a title="" href="/{{ $profile[0]->url4 }}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                        </div><!-- end team-member -->
                    </div><!-- end col -->

                @endif
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->
    

    <section class="section fullscreen paralbackground parallax" style="background-image:url('upload/parallax_02.jpg');" data-img-width="1920" data-img-height="612" data-diff="100">
        <div class="container">
        
        </div><!-- end container -->
    </section><!-- end section -->


@endsection