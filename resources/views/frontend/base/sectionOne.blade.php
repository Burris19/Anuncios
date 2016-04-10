{{--Escort Deluxe--}}
<section class="section white">
    <div class="container">
        <div class="big-title text-center">
            <h3>Escorts Deluxe</h3>
            <hr>
            <p class="lead">{!! $principal->bannersDescription !!}</p>
        </div>
        <hr class="invis">
        <div class="row">

            @foreach($escortDelux as $profile)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="team-member">
                        <div class="entry">
                            <img src="/{!! $profile->images['url1'] !!}" alt="">
                            <div class="magnifier">
                                <div class="visible-buttons">
                                    {!! Form::open(['url' => '/profile/' . $profile->name , 'method' => 'POST', 'target' => '_blank']) !!})
                                        {{--<a class="sendProfile" title="{!! $profile->name !!}" href="/profile/{!! $profile->name !!}" target="_blank"><i class="fa fa-heart-o"></i></a>--}}
                                            <a href="#" class="sendProfile"><i class="fa fa-heart-o"></i></a>
                                            <input type="hidden" name="code" value="{!! $profile->code !!}"/>
                                        <button type="submit" class="showProfile"></button>
                                    {!! Form::close() !!}

                                </div><!-- end buttons -->
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                        <h3>{!! $profile->name !!}</h3>
                        <small>Escort deluxe</small>
                    </div><!-- end team-member -->
                </div>
            @endforeach

        </div>
    </div>
</section>


