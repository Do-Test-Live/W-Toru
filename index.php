<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
    include("include/cdn.php");
    ?>

    <?php
    include("include/css.php");
    ?>
    <style>
        body {
            margin: 0;
            background-color: #213594;
        }

    </style>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container"><a class="logo" href="#"><img src="images/logo.png" alt="" width="200px"></a>
            <nav class="nav js-nav">
                <ul class="header-btn">
                    <li><a href="#project" style="color: #FFFFFF;">Project</a></li>
                    <li><a href="#about" style="color: #FFFFFF;">Story</a></li>
                    <li><a href="#equipment" style="color: #FFFFFF;">Utilies </a></li>
                    <li><a href="#roadmap" style="color: #FFFFFF;">Roadmap</a></li>
                    <li><a href="#team" style="color: #FFFFFF;">Team</a></li>
                    <li><a href="#faq" style="color: #FFFFFF;">Faq</a></li>
                </ul>
                <a class="btn" href="#" type="button">Mint</a>
                <a class="btn pl-4 ml-3" href="#" type="button">Magic Eden</a>
            </nav>
            <div class="burger js-burger"><span></span><span></span><span></span></div>
        </div>
    </header>
    <main class="main">
        <section class="intro-section">
            <div class="container">
                <div class="intro-links" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                    <!--<a class="link" href="#" target="_blank">EAT TO EARN</a>-->
                    <a class="link" href="https://discord.gg/WY7yAuY5my" target="_blank">discord</a>
                    <a class="link" href="https://twitter.com/ToRuToRu_World" target="_blank">twitter</a>

                </div>
                <h1 class="main-title" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true"
                    data-text="Chubb Club">TORU TORU</h1>
                <div class="info" data-aos="fade-up" data-aos-duration="1300" data-aos-once="true">
                    <center>
                        <div class="info__wrap" style="width: 250px;">
                            <p class="info__text"><a href="#" class="info__text">Mint your TORU</a></p>
                        </div>
                    </center>

                </div>
                <div class="row">
                    <img src="images/land.png" id="land">
                </div>
            </div>
        </section>

        <section id="project" class="avatar-section">
            <div class="container">
                <div class="avatar-wrap">
                    <div class="avatar-info">
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-md-6">
                                <h2 class="section-title" data-aos="fade-up" data-aos-duration="1000"
                                    data-aos-once="true">TORU TORU</h2>
                                <!--<p class="sub-text" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                                    The HangryPiggy Pre-Sale will start on 30th June 2022, 08:00pm HKT.
                                </p>-->
                            </div>
                            <div class="col-md-6">
                                <p class="map-desc scroll scroll-wrap" data-aos="fade-up" data-aos-duration="1200"
                                   data-aos-once="true">ToRuToRu! is a small clan led by the King ToRu that inhabits
                                    quietly beneath The Pond. They have lost their reign due to endless war and
                                    pollution above the ground. In order to rebuild the kingdom, they have to seek the
                                    hidden trasure called $SHRIMP.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="story-section" id="about">
            <div class="container">
                <div class="map-wrap">
                    <div class="item">
                        <div class="item__wrap">
                            <div class="item__descr">
                                <h2 class="section-title" data-aos="fade-up" data-aos-duration="1100"
                                    data-aos-once="true">
                                    The story</h2>
                                <p class="map-desc scroll scroll-wrap" data-aos="fade-up" data-aos-duration="1200"
                                   data-aos-once="true">As the biggest axolotl community in Web3. We aim at building the
                                    ‘Pond Club’ where we spread love and share benefits!
                                </p>
                            </div>
                            <div class="item__img">
                                <img src="images/story-bg.jpg" width="600px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="item-section" id="equipment" style="padding: 0 2rem;">
            <div>
                <div class="item-wrap">
                    <div class="item">
                        <div class="item__wrap">
                            <div class="item__img">
                                <div class="item-slider">
                                    <div class="item-slider js-item-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="item-img"><img src="images/1.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item-img"><img src="images/2.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item-img"><img src="images/5.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item-img"><img src="images/6.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item-img"><img src="images/7.png" alt=""></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="item-img"><img src="images/8.png" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item__descr">
                                <h2 class="item__title section-title" data-aos="fade-up" data-aos-duration="1100"
                                    data-aos-once="true">NFT Utilies:</h2>
                                <p class="item__text" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                                    Benefits As A ToRuToRu! Holder:</p>
                                <ul class="info-list" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true"
                                    style="color: black">
                                    <li>Become a member of the “Pond Club”
                                    </li>
                                    <li>Exclusive social events
                                    </li>
                                    <li>
                                        Membership perks with our partnered projects along the Metaverse production
                                        pipeline.
                                    </li>
                                </ul>

                                <a class="btn primary"
                                   href="https://discord.gg/WY7yAuY5my"
                                   target="_blank" data-aos="fade-up"
                                   data-aos-duration="1400"
                                   data-aos-once="true">Join the
                                    discord</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="instruction-section" id="instructions">
            <h2 class="section-title">Collection</h2>
            <p class="instruction-text base-text"> More info will be released shortly along with more TORU TORU!!</p>
            <div class="instr-wrap">
                <div class="instr">
                    <div class="instr__wrap">
                        <div class="instr__row" style="background-image: url('images/ss1.png');"></div>
                        <div class="instr__row" style="background-image: url('images/ss2.png');"></div>
                    </div>
                </div>
            </div>
        </section>


        <section class="map-section" id="roadmap">
            <div class="container">
                <div class="map-wrap">
                    <div class="map-block map-block_road">
                        <h2 class="section-title" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                            Roadmap</h2>
                        <p class="map-desc scroll scroll-wrap" data-aos="fade-up" data-aos-duration="1200"
                           data-aos-once="true"></p>
                        <div class="map__item" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                            <span class="map__percent">Phase One</span>
                            <!-- <p class="map-desc">Total 852 of Hungry Piggies available in the food paradise.</p>-->
                            <ul class="info-list" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true"
                                style="color: black">
                                <li>Sold Out
                                </li>
                                <li>Each ToRuToRu is served as a pass to our “Pond Club”
                                </li>
                                <li>
                                    SOL giveaway to wallets who own two ToRuToRu! NFTs
                                </li>
                            </ul>
                        </div>
                        <div class="map__item" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                            <span class="map__percent">Phase Two</span>
                            <!-- <p class="map-desc">After 852 Hungry Piggies are minted. We will try to do some membership
                                 events……
                             </p>-->
                            <ul class="info-list" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true"
                                style="color: black">
                                <li>Create our own brand
                                </li>
                                <li>
                                    Stake to earn token: $SHRIMP
                                </li>
                                <li>
                                    $SHRIMP can be used to purchase our merches
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="map-block map-block_fits">
                        <div class="map" id="third">
                            <div class="map__item" data-aos="fade-up" data-aos-duration="1100" data-aos-once="true">
                                <span class="map__percent">Phase Three</span>
                                <!--<p class="map-desc"> Having collaboration with Cha chaan teng and restaurants to its NFT
                                    holder.</p>-->
                                <ul class="info-list" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true"
                                    style="color: black">
                                    <li>51% of the revenue goes to the community treasury
                                    </li>
                                    <li>
                                        Airdrop BabyToRu
                                    </li>
                                </ul>
                            </div>

                            <!--<div class="map__item" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                                <span class="map__percent">Phase Four - Branded items and more!</span>
                                <p class="map-desc"> We will be creating physical collectible items for our dinosaur and
                                    gifting them to its NFT holder.</p>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="team" class="avatar-section">
            <div class="container">
                <h2 class="section-title text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    Team Members</h2>
                <div class="avatar-img">
                    <div class="card-wrap">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                                    <div class="card__wrap">
                                        <div class="card__img-wrap">
                                            <div class="card__img"><img src="images/o01.png" alt=""></div>
                                        </div>
                                        <button class="card__link btn secondary" type="button" style="font-size: 16px;">
                                            Leroy Bubbly-Founder/Artist
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="card" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                                    <div class="card__wrap">
                                        <div class="card__img-wrap">
                                            <div class="card__img"><img src="images/o11.png" alt=""></div>
                                        </div>
                                        <button class="card__link btn secondary" type="button" style="font-size: 16px;">
                                            Keis Senor -Project Director
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="card" data-aos="fade-up" data-aos-duration="1400" data-aos-once="true">
                                    <div class="card__wrap">
                                        <div class="card__img-wrap">
                                            <div class="card__img"><img src="images/o31.png" alt=""></div>
                                        </div>
                                        <button class="card__link btn secondary" type="button" style="font-size: 16px;">
                                            Stephanie -Marketing Lead
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="avatar-img">
                    <div class="card-wrap">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                                    <div class="card__wrap">
                                        <div class="card__img-wrap">
                                            <div class="card__img"><img src="images/o41.png" alt=""></div>
                                        </div>
                                        <button class="card__link btn secondary" id="fifth-button" type="button"
                                                style="font-size: 16px;">
                                            ELEVATE PR COMPANY<br>(Paris Chan)- Marketing<br> Director
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </section>


        <section class="faq-section" id="faq">
            <div class="container">
                <h2 class="section-title">FAQ</h2>
                <div class="accordion">
                    <div class="accordion__item">
                        <div class="accordion__title-wrap">
                            <h3 class="accordion__title">What is an NFT?</h3>
                            <div class="accordion__icon"></div>
                        </div>
                        <div class="accordion__content">
                            <p class="accordion__desc">Non-Fungible Token (NFT) is a unique and non-interchangeable unit
                                of data on the blockchain stored on a digital ledger. Its purpose is to establish the
                                proof of ownership of digital assets such as jpg, videos, gifs and more.
                            </p>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title-wrap">
                            <h3 class="accordion__title">What is ToRuToRu?</h3>
                            <div class="accordion__icon"></div>
                        </div>
                        <div class="accordion__content">
                            <p class="accordion__desc">We aim at building the ‘Pond Club’ where we spread love and share
                                benefits!
                                Members enjoy exclusive benefits perks in real life.
                            </p>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title-wrap">
                            <h3 class="accordion__title">How can I get a ToRuToRu?</h3>
                            <div class="accordion__icon"></div>
                        </div>
                        <div class="accordion__content">
                            <p class="accordion__desc">In order to get a ToRuToRu, all you need is a Solana wallet with
                                some Solana in it, You can mint through our minting site when launches. You can also buy
                                in the second-hand market Magic Eden once it is sold out.</p>
                        </div>
                    </div>
                    <div class="accordion__item">
                        <div class="accordion__title-wrap">
                            <h3 class="accordion__title"> When can I get my ToRuToRu?</h3>
                            <div class="accordion__icon"></div>
                        </div>
                        <div class="accordion__content">
                            <p class="accordion__desc">July</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="bottom-section">
            <div class="container"><img src="images/bottom-bg.png" alt="">
                <!--<div class="bot-content">
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb">Weee!!</span></div>
                    </div>
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb">Roarrr!!</span></div>
                    </div>
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb">YEEET!!</span></div>
                    </div>
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb">Meh!!</span></div>
                    </div>
                    <div class="bot-block">
                        <div class="bot-block-wrap"><span style="font-family: chubb"> Brrr!!</span></div>
                    </div>
                </div>-->
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-head"><a class="logo" href="#"><img src="images/logo.png" alt=""></a>
                <nav class="nav"><span class="nav-title mr-3">Menu</span>
                    <ul>
                        <li><a href="#project" style="color: #FFFFFF;">Project</a></li>
                        <li><a href="#about" style="color: #FFFFFF;">Story</a></li>
                        <li><a href="#equipment" style="color: #FFFFFF;">Utilies </a></li>
                        <li><a href="#roadmap" style="color: #FFFFFF;">Roadmap</a></li>
                        <li><a href="#team" style="color: #FFFFFF;">Team</a></li>
                        <li><a href="#faq" style="color: #FFFFFF;">FAQ</a></li>
                    </ul>
                </nav>
            </div>
            <p class="copyright">COPYRIGHT © TORU TORU. <br> ALL RIGHTS RESERVED</p>
        </div>
    </footer>
    <div class="mask js-mask"></div>
    <div class="popup js-popup">
        <div class="popup__wrap">
            <h3 class="popup__title">Mint error</h3>
            <button class="popup__close js-popup-close" type="button"></button>
            <div class="popup__body">
                <p class="insufficient-funds">Insufficient funds. Check your wallet balance.</p>
                <p class="funds-need"></p>
                <p class="wallet-address"></p>
            </div>
        </div>
    </div>
</div>

<?php
include("include/js.php");
?>
</body>

</html>