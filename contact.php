<?php $pageTitle = 'Contact Us'; ?>
<?php include('meta.php') ?>
<body class="contact">
    <?php include('header.php') ?>
    <section id="contactSec1" class="bg1 h-auto" data-float="hide" data-theme="dark">
        <div class="container-fluid pos-rel h-max no-padding">
            <div class="secrow1 d-table d-sm-block d-xs-block h-max">
                <div class="w-g-md-7 w-g-12 cell no-padding">
                    <div class="secImage animate left">
                        <img src="assets/images/Contact-img1.png" class="i-fit m-left">
                    </div>
                </div>
                <div class="w-g-md-5 w-g-12 cell">
                    <div class="formSec w-g-lg-8 w-g-md-9 w-g-sm-6 m-auto animate right">
                        <form id="contactForm" autocomplete="off">
                            <div class="formTitle hs3 fw6">Say hello to us!</div>
                            <div class="input-wrapper">
                                <input type="text" class="form-control" id="name" placeholder="Name" name="pichkaari_contact_name" required>
                                <div class="error">required</div>
                            </div>
                            <div class="input-wrapper">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="pichkaari_contact_email" required>
                                <div class="error">required</div>
                            </div>
                            <div class="input-wrapper">
                                <input type="phone" class="form-control phoneInput" minlength="10" maxlength="10" id="phone" placeholder="Phone number" name="pichkaari_contact_phone" required>
                                <div class="error">required</div>
                            </div>
                            <div class="input-wrapper">
                                <textarea rows="4" class="form-control" id="message" placeholder="Message" name="pichkaari_contact_message" required></textarea>
                                <div class="error">required</div>
                            </div>
                            <button type="submit" class="btn btn-red-black">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute-bg sec-bg">
            <img src="assets/images/Portfolio-bg1.svg">
        </div>
    </section>
    <?php include('footer.php') ?>
</body>
<?php include('scripts.php') ?>