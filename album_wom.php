<?php

include_once 'include/header.php';

?>

    <section class="album-wom">
        <div class="container">
            <h2 class="h-alb-wom">Walkonline Online Mobile</h2>

            <div class="img-alb-wom">
        
                <div>
                    <img
                    class="img-pic-wom"
                    src="css/image/wom/315531880_678452873851621_1555938114759322233_n.jpg"
                    onclick="openfullimageswom(this.src)"
                    alt=""
                    />
                    <span class="tittle-img-alb-wom">Fairy Emerald</span>
                </div>
       


            </div>

            <div class="full-images-wom" id="fullimagesbox-wom">
                <img class="full-pic-wom" src="css/image/312814137_429115246056727_5419235129846380708_nwom1.jpg" alt="" id="fullpic-wom" />
                <span class="closebtn" onclick="closefullimages()">x</span>
            </div>
        </div>
    </section>

    <!---endimagegame-->

    <script src="js/wom_album.js"></script>
    <?php
    include_once 'include/footer.php';
    ?>