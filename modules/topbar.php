<?php
    class topbar{
        function __construct(){
        }
        public function getTopbar(){
            ?>
            <div class="top-bar gray-bg- visible-md visible-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="top-social-link">
                                <a href="https://tr.linkedin.com/company/meltaş-i̇ç-ve-dış-ticaret-ltd-şti" Target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <ul class="top-link">
                                <li><i class="far fa-envelope"></i><a href="mailto:info@meltas.com" class="js-scroll-trigger __cf_email__">info@meltas.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
