<?php
    class arama{
        function __construct()
        {
        }
        public function getArama(){
      ?>
            <section class="arama" id="about">
                <div class="container">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-lg-2 secenekler">
                                <select name="arama" class="selectpicker">
                                    <optgroup label="Seçim Yapın">
                                        <option value="model">Model</option>
                                        <option value="marka">Marka</option>
                                    </optgroup>
                                </select>

                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <input type="text" class="form-control aramainput" name="bul" aria-describedby="emailHelp" placeholder="Marka & Model Ara.">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <button type="submit" class="btn btn-arama">ARA <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <?php
        }
    }
?>