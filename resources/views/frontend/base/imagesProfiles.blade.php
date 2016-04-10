<section class="section white">
    <div class="container">
        <div class="row">
            

            @if( !empty($profileSpanish->images->url1) )

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <div class="entry">
                            <img src="/{{ $profileSpanish->images->url1 }}" class="" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <a title="" href="/{{ $profileSpanish->images->url1 }}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end team-member -->
                </div><!-- end col -->

            @endif

            @if( !empty($profileSpanish->images->url2) )

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <div class="entry">
                            <img src="/{{ $profileSpanish->images->url2 }}" class="" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <a title="" href="/{{ $profileSpanish->images->url2 }}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end team-member -->
                </div><!-- end col -->

            @endif

            @if( !empty($profileSpanish->images->url3) )

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <div class="entry">
                            <img src="/{{ $profileSpanish->images->url3 }}" class="" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <a title="" href="/{{ $profileSpanish->images->url3 }}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end team-member -->
                </div><!-- end col -->

            @endif

            @if( !empty($profileSpanish->images->url4) )

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <div class="entry">
                            <img src="/{{ $profileSpanish->images->url4 }}" class="" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    <a title="" href="/{{ $profileSpanish->images->url4 }}" data-rel="prettyPhoto"><i class="fa fa-search"></i></a>
                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                    </div><!-- end team-member -->
                </div><!-- end col -->

            @endif
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->