<section class="probootstrap-section">
    <div class="container">
        <div class="row heading">
            <h2 class="mt0 mb50 text-center">{!! $titulo !!}</h2>
        </div>
        <div class="row probootstrap-gutter10">
            @foreach($thumbnails as $thumbnail)
            <div class="col-md-{!! $thumbnail->col-md !!} col-sm-{!! $thumbnail->col-sm !!}">
                <a href="#" class="probootstrap-hover-overlay">
                    <img src="{!! $thumbnail->image !!}" alt="{!! $thumbnail->alt !!}" class="img-responsive">
                    <div class="probootstrap-text-overlay">
                        <h3>{!! $thumbnail->title !!}</h3>
                        <p>{!! $thumbnail->content !!}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- END: section -->