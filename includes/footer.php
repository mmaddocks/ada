<?php
    /**
     * FOOTER TEMPLATE
     * PHP function to get current year > date("Y")
    */
?>

        <footer >
            <div class="section-break"></div><!-- break before footer -->

            <div id="membership-container" class="container-fluid">
                <div id="membership-img-row" class="row">
                    <div class="col-xs-12 col-sm-4 col-md-3 membership-img-container">
                        <img src="<?php echo BASE_URL;?>/images/mba-nsw.svg" width="219" height="80" alt="Master Builders Association NSW logo">
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 membership-img-container">
                        <img src="<?php echo BASE_URL;?>/images/mba-vic.svg" width="80" height="80" alt="Master Builders Association Victoria logo">
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 membership-img-container">
                        <img src="<?php echo BASE_URL;?>/images/mba-act.svg" width="115" height="80" alt="Master Builders Association ACT logo">
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 membership-img-container">
                        <img src="<?php echo BASE_URL;?>/images/mba-tas.svg" width="76" height="80" alt="Master Builders Association Tasmania logo">
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 membership-img-container">
                        <img src="<?php echo BASE_URL;?>/images/mba-nt.svg" width="105" height="80" alt="Master Builders Association Northern Territory logo">
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 membership-img-container">
                        <img src="<?php echo BASE_URL;?>/images/mba-sa.svg" width="76" height="80" alt="Master Builders Association South Australia logo">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 membership-img-container">
                        <img src="<?php echo BASE_URL;?>/images/mba-qld.svg" width="127" height="80" alt="Master Builders Association Queensland logo">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 membership-img-container">
                        <img src="<?php echo BASE_URL;?>/images/mba-wa.svg" width="200" height="80" alt="Master Builders Association Western Australia logo">
                    </div>
                </div>
            </div>

            <div id="footer-container" class="container-fluid">
                <div id="footer-row-container" class="row">
                    <div class="col-xs-12 col-sm-4 footer-item-container">
                        <a href="<?php echo BASE_URL;?>/privacy-policy.php" class="small">Privacy</a>
                    </div>
                    <div class="col-xs-12 col-sm-4 footer-item-container">
                        <p class="small">&copy; <?php echo date("Y");?> Australia Design Architects</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 footer-item-container">
                        <a href="#instagram">
                            <img src="<?php echo BASE_URL;?>/images/social-instagram.svg" width="25" height="25" alt="Instagram logo">
                        </a>
                        <a href="#twitter">
                            <img src="<?php echo BASE_URL;?>/images/social-twitter.svg" width="31" height="25" alt="Twitter logo">
                        </a>
                        <a href="#facebook">
                            <img src="<?php echo BASE_URL;?>/images/social-facebook.svg" width="13" height="25" alt="Facebook logo">
                        </a>
                    </div>
                </div>
            </div>

        </footer>

        <!-- Bootstrap's JS and jQuery dependency -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- My JS Scripts -->
        <script src="<?php echo BASE_URL;?>/js/navbar-event.js"></script>
        <script src="<?php echo BASE_URL;?>/js/slideshow.js"></script><!-- Slideshow on projects.php -->
        <script src="<?php echo BASE_URL;?>/js/switch-nav.js"></script> <!-- For strategy.php & privacy-policy.php -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0_7rLfm7UpT12EucsV_TDCIEN5iWlVWA&callback=initMap">
        </script><!-- Google Map call key = AIzaSyA0_7rLfm7UpT12EucsV_TDCIEN5iWlVWA -->
        <script src="<?php echo BASE_URL;?>/js/google-map.js"></script><!-- Google Map for contact.php -->
        <script src="<?php echo BASE_URL;?>/js/form-validation.js"></script><!-- contact.php -->
        <script src="<?php echo BASE_URL;?>/js/smooth-scroll.js"></script><!-- contact.php -->

        </div><!-- closing #overflow-wrapper -->
    </body>
</html>
