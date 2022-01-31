<!-- landing page -->
<main class="landing-page">
  <img
    class="img__billboard" height="798" width="240" src="./assets/img/landingMobile.png"
    srcset="./assets/img/landingDesktop.png 240w,
            ./assets/img/landingMobile.png 158w"
    sizes="(min-width: 768px) 30vw,
            (min-width: 1025px) 10vw"
    alt="clarendon typeface billboard" />
  <div class="landing__img">
  </div>

  <div class="landing__text-bg">
    <div class="landing-text">
      <p class="landing__text-content" data-splitting><?php echo $landing__textContent ?></p>
      <div class="read-more">
        <p>scroll to read</p>
        <i class="fas fa-chevron-down"></i>
      </div>
    </div>
  </div>
</main>

<!-- section abt Besley -->
<div class="creator__lines"></div>

<section class="section__creator">
  <div class="creator__r-container">
    <picture>
      <source media="(min-width: 1025px)"
              srcset="../assets/img/capitalR.png"
              sizes="40vw">
      <img class="img__capital-r" src="assets/img/capitalR.png" alt="capital letter R" >
    </picture>
  </div>
  <div class="creator__title">
    <img
      class="title__img" height="185" width="1242" src="./assets/img/robertBesleyDesktop.png"
      srcset="./assets/img/robertBesleyDesktop.png 1242w,
              ./assets/img/robertBesleyMobile.png 392w"
      sizes="(min-width: 768px) 90vw,
              (min-width: 1025px) 70vw"
      alt="robert besley" />
    <p>creator of</p>
    <h1 class="title__clarendon">Clarendon</h1>
  </div>
  <p class="creator__content showMe" data-splitting><?php echo $creator__content ?></p>
  <p class="creator__registered uppercase"><?php echo $creator__registered ?></p>
  <div class="creator__banner">
    <div class="scroll-holder">
      <div class="scroll">
        <p class="banner__content"> a b c d e f g h i j k l m n o p q r s t u v w x y <span class="space">z</span></p>
        <p class="banner__content"> a b c d e f g h i j k l m n o p q r s t u v w x y <span class="space">z</span></p>
        <p class="banner__content"> a b c d e f g h i j k l m n o p q r s t u v w x y <span class="space">z</span></p>
        <p class="banner__content"> a b c d e f g h i j k l m n o p q r s t u v w x y <span class="space">z</span></p>
        <p class="banner__content"> a b c d e f g h i j k l m n o p q r s t u v w x y <span class="space">z</span></p>
      </div>
      <div class="scroll">
        <p class="banner__content"> a b c d e f g h I j k l m n o p q r s t u v w x y z <span class="space">z</span></p>
        <p class="banner__content"> a b c d e f g h i j k l m n o p q r s t u v w x y z <span class="space">z</span></p>
        <p class="banner__content"> a b c d e f g h i j k l m n o p q r s t u v w x y z <span class="space">z</span></p>
        <p class="banner__content"> a b c d e f g h i j k l m n o p q r s t u v w x y z <span class="space">z</span></p>
        <p class="banner__content"> a b c d e f g h i j k l m n o p q r s t u v w x y z <span class="space">z</span></p>
      </div>
    </div>
  </div>
</section>

<!-- section abt characteristics -->

<section class="section__characteristics">
  <div class="semi-oval"></div>
  <div class="characteristics__grid">
    <div class="grid__top-left">
      <div class="bold">bold</div>
      <div class="display">display</div>
      <div class="face">face</div>
    </div>
    <div class="grid__top-right">
      <div class="with">with a</div>
      <div class="softer">softer</div>
      <div class="side">side</div>
    </div>
    <div class="for">for</div>
    <div class="advertising"><i class="fab fa-ethereum colorMain"></i> advertising <i class="fab fa-ethereum"></i></div>
    <div class="announcements">announcements</i></div>
    <div class="displays"><i class="fab fa-ethereum"></i> display <i class="fab fa-ethereum colorMain"></i></div>
  </div>

  <div class="characteristics__container">
    <h2 class="characteristics__title"><?php echo $characteristics__title ?> <span class="border-bottom"><?php echo $borderBottom ?> </span></h2>
    <p class="characteristics__text showMe" data-splitting><?php echo $characteristics__text1 ?> </p>
    <img
      class="characteristics__img" height="124" width="314" src="./assets/img/clarendonTypography.png"
      srcset="./assets/img/clarendonTypography.png 314w"
      sizes="(min-width: 768px) 80vw,
              (min-width: 1025px) 70vw,
              (min-width: 1250px) 40vw"
      alt="clarendon typography" />
    <p class="characteristics__text showMe" data-splitting> <?php echo $characteristics__text2 ?></p>
  </div>
</section>

<div class="creator__lines"></div>

<!-- what is NFT section -->
<section class="section__nft">
  <div class="nft__quote-mobile">
    <div class="nft__text-mobile">
      <p class="nft-tab"><?php echo $nftTab1 ?></p>
      <p class="nft-tab1"><?php echo $nftTab2 ?></p>
      <p class="nft-tab2"><?php echo $nftTab3 ?></p>
    </div>
    <h3 class="nft__title"><?php echo $nft__title ?></h3>
  </div>
  <div class="nft__quote-desktop">
    <div class="vertical-oval oval-left"></div>
    <p class="nft__actual-quote"><?php echo $nft__actualQuote1?></p>
    <p class="nft__actual-quote"><?php echo $nft__actualQuote2?></p>
    <p class="quote__author"><?php echo $quote__author?></p>
    <div class="vertical-oval oval-right"></div>
  </div>

  <div class="creator__lines"></div>

  <div class="nft__container">
    <img
      class="nft__img" height="804" width="563" src="./assets/img/baycBillboardDesktop.png"
      srcset="./assets/img/baycBillboardDesktop.png 563w,
              ./assets/img/baycBillboard.png 348w"
      sizes="(min-width: 768px) 30vw,
              (min-width: 1025px) 80vw"
      alt="bayc billboard" />
    <div class="nft__text-container">
      <h2 class="nft__text-title"><?php echo $nft__textTitle ?></h2>
      <p class="nft__text showMe" data-splitting><?php echo $nft__text ?></p>
    </div>
  </div>
</section>
<!-- why an NFT section -->
<section class="section__why">
  <div class="oval"></div>
  <div class="nft-why__grid">
    <div class="why"><?php echo $why ?></div>
    <div class="clarendon"> <?php echo $clarendon ?></div>
    <div class="as-nft"><?php echo $asNft?></div>
  </div>

  <div class="why__reasons">
    <!-- <div class="nft__container"> -->
      <img
        class="reasons__img" height="900" width="633" src="./assets/img/clarendonNFTDesktop.png"
        srcset="./assets/img/clarendonNFTDesktop.png 633w,
                ./assets/img/clarendonNFTMobile.png 312w"
        sizes="(min-width: 768px) 90vw,
                (min-width: 1025px) 30vw"
        alt="clarendon NFT" />
    <!-- </div> -->

    <ol>
      <li class="showMe" data-splitting><?php echo $nftReason1?></li>
      <li class="showMe" data-splitting><?php echo $nftReason2?></li>
      <li class="showMe" data-splitting><?php echo $nftReason3?></li>
    </ol>
  </div>
</section>

<!-- Outlaw/Wanted section -->

<section class="section__outlaws">
  <div class="outlaws__container">
    <p>meet</p>
    <h2 class="outlaws__title"><?php echo $outlaws__title?></h2>
  </div>
  <div class="outlaws__wanted-poster">
    <h2 class="h2__western"><?php echo $h2__western?></h2>
    <div class="wanted__poster-border">
      <div class="wanted-poster__content">
        <h4 class="wanted__doa"><?php echo $wanted__doa?></h4>
        <img
          class="wanted__img" height="574" width="1198" src="./assets/img/wantedApesDesktop.png"
          srcset="./assets/img/wantedApesDesktop.png 1198w,
                  ./assets/img/wantedApesMobile.png 304w"
          sizes="(min-width: 768px) 90vw,
                  (min-width: 1025px) 30vw"
          alt="wanted Apes" />
        <img
          class="wanted__fonts" height="80" width="1005" src="./assets/img/derivativesDesktop.png"
          srcset="./assets/img/derivativesDesktop.png 1005w"
          sizes="(min-width: 768px) 80vw,
                  (min-width: 1025px) 80vw"
          alt="derivative fonts clarendon" />
        <h4 class="wanted__clarendon"><?php echo $wanted__clarendon?></h4>
          <p class="wanted__reward"><?php echo $wanted__reward?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bounty section -->

<section class="section__bounty">
  <h2 class="h2__western bounty__title"><?php echo $bounty__title ?></h2>
  <div class="bounty__board">
    <p class="board__rules"><?php echo $board__rules1 ?></p>
    <p class="board__rules"><?php echo $board__rules2 ?></p>
    <div class="game__end"></div>
    <div class="board__game">
    </div>
    <p class="game__text"></p>
  </div>
</section>

  <article class="end__quote">
    <p class="quote__text"><?php echo $quote__text1?></p>
    <div class="quote__middle">
      <p class="quote__text"><?php echo $quote__text2?></p>
    </div>
    <p class="quote__text"><?php echo $quote__text3?></p>
</article>

<article class="slanted">
  <div class="slanted__title">
    <p class="slanted__text"><?php echo $slanted__text1 ?></p>
  </div>
  <div class="slanted__next">
    <h4 class="slanted__subTitle"><?php echo $slanted__subTitle1?></h4>
    <p class="slanted__text uppercase"><?php echo $slanted__text2?></p>
  </div>
  <div class="slanted__previous">
    <h4 class="slanted__subTitle"><?php echo $slanted__subTitle2?></h4>
    <p class="slanted__text uppercase"><?php echo $slanted__text3?></p>
  </div>
</article>

<footer class="footer">
  <div class="oval-"></div>
  <div class="footer__container">
    <p class="footer__text"><?php echo $footer__text1?></p>
    <a href="https://www.slanted.de/" class="footer__link"><?php echo $footer__link?></a>
    <p class="footer__text"><?php echo $footer__text2?></p>
  </div>
</footer>

