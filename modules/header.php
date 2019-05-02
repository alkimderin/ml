<?php
    class Header{
        function __construct()
        {
        }
        public function getHeader(){
            ?>
            <header class="masthead text-center text-white d-flex">
                <div class="container my-auto">
                    <div class="row">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="first-slide" src="img/slider/sl1.jpg" alt="Meltaş Türkiye,Endüstriyel Malzemeler">
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <h1><b>Endüstriyel Malzemeler</b></h1>
                                            <h4>Güvenilir Markalar & Güvenilir Ürünler</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="second-slide" src="img/slider/sl2.jpg" alt="Meltaş Türkiye,Lider Tedarikçiniz">
                                    <div class="container">
                                        <div class="carousel-caption">
                                            <h1><b>Lider Tedarikçiniz</b></h1>
                                            <h4>Binlerce Marka ve Ürün </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="third-slide" src="img/slider/sl3.jpg" alt="Meltaş Türkiye,Hizmetinizdeyiz">
                                    <div class="container">
                                        <div class="carousel-caption text-right">
                                            <h1><b>Hizmetinizdeyiz</b></h1>
                                            <h4>Tüm Tedarik İşinizi Biz Yapıyoruz.</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="fourth-slide" src="img/slider/sl4.jpg" alt="Meltaş Türkiye,Yüksek Kalite">
                                    <div class="container">
                                        <div class="carousel-caption text-left">
                                            <h1><b>Yüksek Kalite</b></h1>
                                            <h4>Piyasadaki En İyi Markalar ve Ürünler</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>
            </header>
            <?php
        }
    }
    ?>