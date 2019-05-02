<?php
    class navbar{
        function __construct()
        {
        }
        public function getNavbar(){
            ?>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="index-2.html"><img src="img/logo.png" alt="" /></a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index-2.html">Ana Sayfa</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="hakkimizda.html">Hakkımızda</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="urunler.html">Ürünler</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="markalar.html">Markalar</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">|</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="iletisim.html">İletişim</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
<?php
        }
    }
    ?>