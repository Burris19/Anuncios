@extends('frontend.base.layout')

@section('content')
    <section class="panel form-wizard">
        <div class="tabs container">
            <ul class="nav nav-tabs nav-justified">
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
@endsection