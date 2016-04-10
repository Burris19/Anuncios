@extends('frontend.base.layout')

@section('content')


        <section class="section white">
            <div class="container">
                <div class="big-title text-center">
                    <h3>{!! trans('label.boys') !!}</h3>
                </div><!-- end title -->

                <hr class="invis">

                <div class="row">

                    @foreach($boys as $profile)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <div class="entry">
                                    <img src="/{!! $profile->images['url1'] !!}" alt="">
                                    <div class="magnifier">
                                        <div class="visible-buttons">
                                            {{--<a title="{!! $profile->name !!}" href="/profile/{!! $profile->code !!}" target="_blank"><i class="fa fa-heart-o"></i></a>--}}
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
                            </div><!-- end team-member -->
                        </div>
                    @endforeach

                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section fullscreen paralbackground parallax" style="background-image:url('upload/parallax_01.jpg');" data-img-width="1920" data-img-height="504" data-diff="100">
            <div class="container">
                <hr class="invis">
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section white">
            <div class="container">
                <div id="owl-portfolio" class="owl-custom">

                    @foreach($boysAll as $profile)
                        <div class="owl-item">
                            <div class="entry">
                                <img src="/{!! $profile->images['url1'] !!}" alt="">
                                <div class="magnifier">
                                    <div class="visible-buttons">
                                        {{--<a title="{!! $profile->name !!}" href="/profile/{!! $profile->code !!}" target="_blank"><i class="fa fa-link"></i></a>--}}
                                        {!! Form::open(['url' => '/profile/' . $profile->name , 'method' => 'POST', 'target' => '_blank']) !!})
                                        {{--<a class="sendProfile" title="{!! $profile->name !!}" href="/profile/{!! $profile->name !!}" target="_blank"><i class="fa fa-heart-o"></i></a>--}}
                                        <a href="#" class="sendProfile"><i class="fa fa-heart-o"></i></a>
                                        <input type="hidden" name="code" value="{!! $profile->code !!}"/>
                                        <button type="submit" class="showProfile"></button>
                                        {!! Form::close() !!}
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                        </div><!-- end owl-item -->
                    @endforeach

                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <section class="section fullscreen paralbackground parallax" style="background-image:url('upload/parallax_02.jpg');" data-img-width="1920" data-img-height="612" data-diff="100">
            <div class="container">
            </div>
        </section>



@endsection
@include('frontend.script.helps')