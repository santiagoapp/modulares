<section class="probootstrap-section probootstrap-section-lighter">
    <div class="container">
        <div class="row heading">
            <h2 class="mt0 mb50 text-center">{!! $title !!}</h2>
        </div>
        <div class="row">
            @foreach($team as $member)
            <div class="col-md-3">
                <div class="probootstrap-card probootstrap-person text-left">
                    <div class="probootstrap-card-media">
                        <img src="{!! $member->image !!}" class="img-responsive" alt="{!! $member->alt !!}">
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading mb0">{!! $member->name !!}</h2>
                        <p><small>{!! $member->job !!}</small></p>
                        <p><a href="#">Ver detalles</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>