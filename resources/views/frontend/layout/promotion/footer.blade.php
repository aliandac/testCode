<div class="container-fluid">
    <div class="row bg-light">
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" title="Anasayfa" href="{{route('home')}}">Anasayfa</a>
                <a class="p-2 text-muted" title="Firmalar" href="{{route('companies')}}">Firmalar</a>
                <a class="p-2 text-muted" title="İhaleler" href="{{route('bids')}}">İhaleler</a>
                <a class="p-2 text-muted" title="Talepler" href="{{route('demands')}}">Talepler</a>
                <a class="p-2 text-muted" title="Firma Haberleri" href="{{route('blogs')}}">Firma Haberleri</a>
                <a class="p-2 text-muted" title="Etkinlikler" href="{{route('events')}}">Etkinlikler</a>
                <a class="p-2 text-muted" title="Fuar Tarihleri" href="{{route('fairs')}}">Fuar Tarihleri</a>
                <a class="p-2 text-muted" title="Sıfır & İkinci El Makineler" href="{{route('machines')}}">Sıfır & İkinci El Makineler</a>
            </nav>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <a href="{{ route('home') }}" title="Tradeey" class="return">Tradeey.com'a Dön</a>
        <ul class="footer-socials">
            <li><a href="{!!  setting('facebook') !!}" title="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="{{ setting('twitter') }}" title="twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a title="whatsapp" href="https://api.whatsapp.com/send?phone={{ replace(' ','',setting('contact-phone')) }}&text=Merhaba, hizmetleriniz hakkında bilgi almak istiyorum!"><i class="fa fa-whatsapp"></i></a></li>
        </ul>
    </div>
</footer>


<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{asset('css/promotion/assets/js/vendor/jquery-slim.min.js')}}"><\/script>')</script>
<script src="{{asset('css/promotion/assets/js/vendor/popper.min.js')}}"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148345414-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-148345414-3');
</script>

@yield('footer')

</body>
</html>
