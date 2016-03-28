<div id="w2-spanish" class="tab-pane active">
    <section class="page-title grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1>{{$profile[0]->name}}</h1>
                    <p>Categoria: {{$profile[0]->category}}</p>
                    <p></p>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="small-title">
                        <p class="lead">Impresionante escort de belleza inigualable en Mallorca.</p>
                    </div><!-- end title -->
                    <div class="text-widget">
                        <p>{{$profile[0]->description}}.</p>
                    </div><!-- end text-widget -->

                    <div class="about-widget">
                        <hr>
                        <address>
                            <i class="fa fa-phone alignleft"></i>
                            <strong>Teléfono:</strong>
                            <p>{{$profile[0]->phone}}</p>
                        </address>
                        <address>
                            <i class="fa fa-money alignleft"></i>
                            <strong>Tarifas:</strong>
                            <p>{{$profile[0]->price}}</p>
                        </address>
                        <address>
                            <i class="fa fa-bus alignleft"></i>
                            <strong>Salidas:</strong>
                            <p>{{$profile[0]->departures}}</p>
                        </address>
                        <address>
                            <i class="fa fa-history alignleft"></i>
                            <strong>Horario:</strong>
                            <p>{{$profile[0]->timetable}}</p>
                        </address>
                        <address>
                            <i class="fa fa-map-marker alignleft"></i>
                            <strong>Zona:</strong>
                            <p>Manacor</p>
                        </address>
                    </div><!-- end about-widget -->

                </div><!-- end col -->

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="/{{ $profile[0]->images->url1 }}" alt="" class="img-fullwidth wow slideInRight">
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-widget">
                        <address>
                            <i class="fa fa-heart alignleft"></i>
                            <strong>Edad:</strong>
                            <p>{{$profile[0]->age}}</p>
                        </address>
                        <address>
                            <i class="fa fa-venus-mars alignleft"></i>
                            <strong>Orientación sexual:</strong>
                            <p>{{$profile[0]->sexual_orientation}}</p>
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
                            <p>{{$profile[0]->measurements}}</p>
                        </address>                          <address>
                            <i class="fa fa-info alignleft"></i>
                            <strong>Altura:</strong>
                            <p>{{$profile[0]->height}}</p>
                        </address>
                    </div><!-- end service-box -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-widget">
                        <address>
                            <i class="fa fa-flag alignleft"></i>
                            <strong>Nacionalidad:</strong>
                            <p>{{$profile[0]->nationality}}</p>
                        </address>                          <address>
                            <i class="fa fa-flag-o alignleft"></i>
                            <strong>Idiomas:</strong>
                            <p>{{$profile[0]->languages}}</p>
                        </address>
                    </div><!-- end service-box -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    @include('frontend.base.imagesProfiles')

</div>
<div id="w2-english" class="tab-pane">
    
    <section class="page-title grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1>{{$profile[0]->name}}</h1>
                    <p>Category: {{$profile[0]->category}}</p>
                    <p></p>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="small-title">
                        <p class="lead">Impresionante escort de belleza inigualable en Mallorca.</p>
                    </div><!-- end title -->
                    <div class="text-widget">
                        <p>{{$profile[0]->description}}.</p>
                    </div><!-- end text-widget -->

                    <div class="about-widget">
                        <hr>
                        <address>
                            <i class="fa fa-phone alignleft"></i>
                            <strong>Phone:</strong>
                            <p>{{$profile[0]->phone}}</p>
                        </address>
                        <address>
                            <i class="fa fa-money alignleft"></i>
                            <strong>Price:</strong>
                            <p>{{$profile[0]->price}}</p>
                        </address>
                        <address>
                            <i class="fa fa-bus alignleft"></i>
                            <strong>Departures:</strong>
                            <p>{{$profile[0]->departures}}</p>
                        </address>
                        <address>
                            <i class="fa fa-history alignleft"></i>
                            <strong>Timetable:</strong>
                            <p>{{$profile[0]->timetable}}</p>
                        </address>
                        <address>
                            <i class="fa fa-map-marker alignleft"></i>
                            <strong>Zona:</strong>
                            <p>Manacor</p>
                        </address>
                    </div><!-- end about-widget -->

                </div><!-- end col -->

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="/{{ $profile[0]->images->url1 }}" alt="" class="img-fullwidth wow slideInRight">
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-widget">
                        <address>
                            <i class="fa fa-heart alignleft"></i>
                            <strong>Age:</strong>
                            <p>{{$profile[0]->age}}</p>
                        </address>
                        <address>
                            <i class="fa fa-venus-mars alignleft"></i>
                            <strong>Sexual Orientation:</strong>
                            <p>{{$profile[0]->sexual_orientation}}</p>
                        </address>
                        <address>
                            <i class="fa fa-check alignleft"></i>
                            <strong>Verified Real Photos:</strong>
                        </address>
                    </div><!-- end service-box -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-widget">
                        <address>
                            <i class="fa fa-info alignleft"></i>
                            <strong>Medidas:</strong>
                            <p>{{$profile[0]->measurements}}</p>
                        </address>                          <address>
                            <i class="fa fa-info alignleft"></i>
                            <strong>Altura:</strong>
                            <p>{{$profile[0]->height}}</p>
                        </address>
                    </div><!-- end service-box -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-widget">
                        <address>
                            <i class="fa fa-flag alignleft"></i>
                            <strong>Nacionalidad:</strong>
                            <p>{{$profile[0]->nationality}}</p>
                        </address>                          <address>
                            <i class="fa fa-flag-o alignleft"></i>
                            <strong>Idiomas:</strong>
                            <p>{{$profile[0]->languages}}</p>
                        </address>
                    </div><!-- end service-box -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    @include('frontend.base.imagesProfiles')

</div>