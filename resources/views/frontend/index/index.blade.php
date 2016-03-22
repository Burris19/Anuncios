@extends('frontend.base.layout')

@section('content')
    <div class="wrapper">

        @include('frontend.base.header')
        @include('frontend.base.nav')
        @include('frontend.base.slider')

        @include('frontend.base.sectionOne')

        @include('frontend.base.sectionTwo')


        <section class="section fullscreen paralbackground parallax" style="background-image:url('assets-frontend/upload/parallax_01.jpg');" data-img-width="1920" data-img-height="504" data-diff="100">
            <div class="container">
                <hr class="invis">
            </div>
        </section>


        @include('frontend.base.sectionTree')

        @include('frontend.base.sectionFor')


        <section class="section fullscreen paralbackground parallax" style="background-image:url('assets-frontend/upload/parallax_02.jpg');" data-img-width="1920" data-img-height="612" data-diff="100">
            <div class="container">
            </div>
        </section>

        @include('frontend.base.footer')
        @include('frontend.base.copyright')


    </div>
@endsection