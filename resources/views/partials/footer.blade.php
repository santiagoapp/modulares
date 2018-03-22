<footer class="probootstrap-footer probootstrap-bg" style="background-image: url(img/slider_3.jpg)">
    <div class="container">
        <div class="row mb60">
            <div class="col-md-3">
                <div class="probootstrap-footer-widget">
                    <h4 class="heading">Sobre Modulares Multimueble</h4>
                    <p>{!! $general->address !!} </p>
                    <p><a href="#">Leer más...</a></p>
                </div> 
            </div>
            <div class="col-md-3">
                <div class="probootstrap-footer-widget probootstrap-link-wrap">
                    <h4 class="heading">Páginas</h4>
                    menu('main', 'menus.categories-menu');
                </div>
            </div>
            <div class="col-md-3">
                <div class="probootstrap-footer-widget">
                    <h4 class="heading">Categorías</h4>
                    menu('main', 'menus.categories-menu');
                </div> 
            </div>
            <div class="col-md-3">
                <div class="probootstrap-footer-widget probootstrap-link-wrap">
                    <h4 class="heading">Suscribete</h4>
                    <p>Recibe descuentos especiales.</p>
                    <form action="#">
                        <div class="form-field">
                            <input type="text" class="form-control" placeholder="Escribe tu correo">
                            <button class="btn btn-subscribe">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row copyright">
            <div class="col-md-6">
                <div class="probootstrap-footer-widget">
                    <p>&copy; 2018 <a href="{!! config('app.url') !!}">{!! setting('site.title') !!}</a>. Designed by <a href="https://uicookies.com/">uicookies.com</a></p>
                </div>
            </div>
            <div class="col-md-6">
                menu('main', 'menus.social-footer-menu');
            </div>
        </div>
    </div>
</footer>