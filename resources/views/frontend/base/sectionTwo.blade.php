<section class="section white">
    <div class="container">
        <div class="big-title text-center">
            <h3>Escorts Destacadas</h3>
            <hr>
            <p class="lead">{!! $principal->featuredDescription !!}</p>
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
                                <a title="" href="/profile/{!! $profile->code !!}"><i class="fa fa-heart-o"></i></a>
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
