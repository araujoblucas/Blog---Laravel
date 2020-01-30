<div class="parallax d-flex flex-row justify-content-center" style="z-index:0;position:absolute; width:100%; height:100%; background-image: url('https://images.unsplash.com/photo-1514286969571-5142af56b991?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <p class="align-self-center justify-content-center" style="color: #ffffff; text-align: center;">
        <span style="font-size: 2em; text-shadow: 3px 5px 2px #474747,3px 5px 2px #474747,3px 5px 2px #474747,3px 5px 2px #474747;">Nosso compromisso com você</span><br style="font-size: 2px">
        <span  style="font-size: 4em;  margin-top: -2em; text-shadow: 3px 5px 2px #474747,3px 5px 2px #474747,3px 5px 2px #474747,3px 5px 2px #474747;" >Sempre com você</span>
    </p>
</div>

<!--Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent" style="z-index:1;">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Hidden brand</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fab fa-facebook-f"></i> Facebook
                <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fab fa-instagram"></i> Instagram</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fab fa-patreon"></i> Patreon</a>
        </li>
        </ul>

    </div>
</nav>
<!--/.Navbar -->


<script>
    $(function(){
        $(window).scroll(function(){
            var window_scrolltop = $(this).scrollTop();
            $('.parallax').each(function(){
                var obj = $(this);
                if ( window_scrolltop >= obj.position().top - obj.height()
                    && window_scrolltop <= obj.position().top + obj.height()) {

                    var divisor = typeof obj.attr('data-divisor') == 'undefined' ? 4 : obj.attr('data-divisor');

                    if ( obj.is(':first-child') ) {
                        var bg_pos = ( window_scrolltop - obj.position().top ) / divisor;
                    } else {
                        var bg_pos = ( window_scrolltop - obj.position().top + ( obj.height() - 100 ) ) / divisor;
                    }
                    obj.css({
                        'background-position' : '50% -' + bg_pos + 'px'
                    });
                    obj.children('.text').css({
                        'bottom' : ( window_scrolltop - obj.position().top + 100 ) + 'px'
                    });

                }
            });
        });
    });
</script>

