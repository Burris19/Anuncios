<footer class="section footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <div class="about-widget">
                        <address>
                            <i class="fa fa-envelope-o alignleft"></i>
                            <strong>Email:</strong>
                            <p><a href="{!! $principal->email !!}">{!! $principal->email !!}</a></p>
                        </address>
                        <address>
                            <i class="fa fa-phone alignleft"></i>
                            <strong>Teléfono</strong>
                            <p>{!! $principal->phone !!}</p>
                        </address>
                    </div><!-- end about-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">

                    <div class="latest-posts">
                        <div class="media">
                            <div class="media-body">
                                @foreach($column1 as $column)
                                    <h4 class="media-heading"><a href="{!! $column->URL !!}" title="{!! $column->URL !!}" target="_blank">{!! $column->name !!}</a></h4>
                                @endforeach
                            </div>
                        </div>
                    </div><!-- end latest-posts -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">

                    <div class="latest-posts">
                        <div class="media">
                            <div class="media-body">
                                @foreach($column2 as $column)
                                    <h4 class="media-heading"><a href="{!! $column->URL !!}" title="{!! $column->URL !!}" target="_blank">{!! $column->name !!}</a></h4>
                                @endforeach

                            </div>
                        </div>
                    </div><!-- end latest-posts -->
                </div><!-- end widget -->
            </div><!-- end col -->

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">

                    <div class="latest-posts">
                        <div class="media">
                            <div class="media-body">
                                @foreach($column3 as $column)
                                    <h4 class="media-heading"><a href="{!! $column->URL !!}" title="{!! $column->URL !!}" target="_blank">{!! $column->name !!}</a></h4>
                                @endforeach
                            </div>
                        </div>
                    </div><!-- end latest-posts -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer>