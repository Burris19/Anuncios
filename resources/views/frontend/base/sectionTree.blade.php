<section class="section white">
    <div class="container">
        <div id="owl-portfolio" class="owl-custom">
            @foreach($banners as $banner)
                <div class="owl-item">
                    <div class="entry">
                        <img src="banners/{!! $banner->photo !!}" alt="">
                        <div class="magnifier">
                            <div class="visible-buttons">
                                <a title="{!! $banner->name !!}" href="{!! $banner->URL !!}" title="{!! $banner->URL !!}" target="_blank"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
