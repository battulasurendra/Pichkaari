<?php $pageTitle = 'Portfolio'; ?>
<?php include('meta.php') ?>
<body class="portfolio">
    <?php include('header.php') ?>
    <section id="portfolioSec1" class="bg3 h-auto" data-float="hide" data-nav="transparent">
        <div class="container-fluid pos-rel">
            <div class="secrow1 animate explode">
                <div class="bannerContent cell">
                    <div class="hs3 fc1 fw8 text-center w-g-md-8 w-g-12 m-auto">
                        Read less of what we say and See more of <span class="fc7">what we’ve done</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute-bg sec-bg">
            <img src="assets/images/Portfolio-bg1.svg">
        </div>
    </section>
    <section id="portfolioSec2" class="h-auto">
        <div class="container-fluid">
            <div class="secrow1 row controls">
                <ul id="portfolioFilters" class="col w-g-12 text-center"></ul>
            </div>
            <div class="secrow2 row fc3 targets">
                <div class="grid text-center" id="portfolioCards">
                    <div class="gap"></div>
                </div>
            </div>
            <div class="secrow3 row text-center">
                <button class="btn btn-red-black d-inline" id="loadMoreCards">Load More</button>
            </div>
        </div>
    </section>
    <section id="portfolioSec3" class="zero-padding h-auto" data-theme="dark">
        <div class="container-fluid pos-rel bg9 hideflow">
            <div class="secrow1 row text-center animate up pos-rel">
                <h4 class="hs4 fc1 fw8 secHeader">Liked what you saw? <br> Hit us up</h4>
                <button class="btn btn-red-white d-inline">Plan a project</button>
            </div>
            <div class="absolute-bg sec-bg">
                <img src="assets/images/Portfolio-bg2.svg">
            </div>
        </div>
    </section>
    <?php include('footer.php') ?>
</body>
<?php include('scripts.php') ?>