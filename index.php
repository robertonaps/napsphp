<?php
include_once 'include/header.php';


?>

    <section class="main-sec">

        <div class="container">
            <div class="main-box">
                <div class="sub">
                    <h1>SUBSCRIBER'S</h1>
                    <span class="counters">500+</span>
                </div>
                <div class="viewers">
                    <h1>VIEW'S</h1>
                    <span class="counters">19,000+</span>
                </div>
            </div>
        </div>
    </section>

    <!-- this for implementing design such us gaming purposes -->
    <section class="playoff">
        <div class="container">
            <div class="gameplayoff">
                <div class="game-text">
                    <h1 class="game-h">Let's play with us</h1>
                    <span class="gameanimtext" id="gamechngingcontent"></span>
                    <p class="game-p">
                        This game is for entertainment, socializing, making friends, and more!
                    </p>
                </div>

                <div class="game-imges">
                    <img class="pic-info" src="css/image/coverallgame.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- this for implementing design such us gaming purposes -->

    <section class="game-list" id="game">
        <div class="container">
            <h1 class="gamelisttittle">Game listed:</h1>
            <p class="gamelistpar">
                There are different games available here (based on the content creator):<br>
                Mmorpg, casual, strategy, and so on. 
            </p>

            <div class="game-box">
                <div class="gameitem" onclick="aq()">
                    <div>
                        <h3 class="gametittleitem" id="aq">
                            <a>ADVENTURE QUEST 3D</a>
                        </h3>
                    </div>
                    <div class="imgcenter">
                        <img class="gameimageitem" src="css/image/gamcoveraq3d.jpg" alt="" />
                    </div>
                </div>

                <div class="gameitem" onclick="coc()">
                    <div>
                        <h3 class="gametittleitem" id="coc">
                            <a>CLASH OF CLAN</a>
                        </h3>
                    </div>
                    <div class="imgcenter">
                        <img class="gameimageitem" src="css/image/gamecovercoc.jpg" alt="" />
                    </div>
                </div>

                <div class="gameitem" onclick="avakin()">
                    <div>
                        <h3 class="gametittleitem" id="avakin">
                            <a>AVAKIN LIFE</a>
                        </h3>
                    </div>
                    <div class="imgcenter">
                        <img class="gameimageitem" src="css/image/gamecoveravakin.jpg" alt="" />
                    </div>
                </div>

                <div class="gameitem" onclick="wom()">
                    <div>
                        <h3 class="gametittleitem" id="wom">
                            <a>WALK ONLINE MOBILE</a>
                        </h3>
                    </div>
                    <div class="imgcenter">
                        <img class="gameimageitem" src="css/image/gamecoverwalkonline.jpg" alt="" />
                    </div>
                </div>

                <span class="spar">Choose the game you want to play! Just click on it.
                </span>
            </div>
        </div>
    </section>

    <script src="js/index.js"></script>

    <?php

    include_once 'include/footer.php';


?>


    