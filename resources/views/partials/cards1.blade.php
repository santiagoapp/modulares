<section class="probootstrap-section probootstrap-section-lighter">
    <div class="container">
        <div class="row">
            @foreach($cards1 as $card)
            <div class="col-md-4">
                <div class="probootstrap-card text-center probootstrap-animate">
                    <div class="probootstrap-card-media svg-sm colored">
                        <img src="img/flaticon/svg/001-prize.svg" class="svg" alt="Free HTML5 Template by uicookies.com">
                    </div>
                    <div class="probootstrap-card-text">
                        <h2 class="probootstrap-card-heading">{!! $card->title !!}</h2>
                        <p>{!! $card->content !!}</p>
                        <p><a href="#">Saber más</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- END: section -->