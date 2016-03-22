<section class="section white">
    <div class="container">
        <div id="owl-portfolio" class="owl-custom">
            @foreach($banners as $banner)
                <div class="owl-item">
                    <div class="entry">
                        <img src="{!! $banner->photo !!}" alt="">
                        <div class="magnifier">
                            <div class="visible-buttons">
                                <a title="{!! $banner->name !!}" href="{!! $banner->URL !!}"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

