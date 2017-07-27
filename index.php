<?php
    /*
     * Page title for this page for the header.php
     * Grabs config.php with the defined URL's
     * ROOT_PATH contains the server (https://localhost:8888/)
    */

    $pageTitle = "Australian Design Architects | Award Winning Australian Architects";
    $pageID = "home"; /* for adding active link class in header.php */
    require_once( "includes/config.php" );
    include( ROOT_PATH . "includes/header.php" );
?>

<!-- <body> was already opened in header.php -->

    <div id="hero-container" class="container-fluid">
        <!-- <img src="" width="2048" height="916" alt="" /> -->
        <div class="row">
            <div id="hero-brand-container" class="col-xs-12">
                <img src="images/logo-large.svg" width="182" height="90" alt="Large version of ADA logo">
                <div id="hero-title-container">
                    <h1 class="hero-title">Australian Design</h1>
                    <h1 class="hero-title">Architects</h1>
                </div>
            </div>
        </div><!-- closing .row -->
        <div class="row">
            <div id="expertise-container" class="col-xs-12">
                <ul>
                    <li>Architecture</li>
                    <li>Interior Design</li>
                    <li>Environmental Design</li>
                </ul>
            </div>
        </div><!-- closing .row -->
    </div><!-- closing #hero-container -->

    <div id="overview-container" class="container-fluid">
        <div class="row">
            <div id="overview-content-container" class="col-xs-12 col-sm-6">
                <div id="overview-content">
                    <h2>ADA</h2>
                    <p>Australian Design Architects is a team of multi-award winning architects based in Sydney, Australia.</p>
                    <p>We specialise in residential and commercial projects of high-quality finish and detail that are sensitive to context and brief. Our distinctive style is known for its classic proportion and geometric form.</p>
                    <a href="<?php echo BASE_URL;?>/about.php" class="btn btn-default" role="button">Learn More</a><!-- link to about.php -->
                </div>
            </div>
            <div id="overview-img-container" class="col-xs-12 col-sm-6">
                <img src="images/harbour-bridge-800.jpg" width="800" height="534" alt="Harbour Bridge and Sydney" >
            </div>
        </div>
    </div><!-- closing #overview-container -->


    <div id="awards-container" class="container-fluid"><!-- No .container-fluid do not want padding on #awards-title-container -->
        <div class="row">
            <div id="awards-title-content" class="col-xs-12">
                <h2>Awards</h2>
                <p>Over the past 20 years our extensive portfolio of residential and commercial projects has been recognised by our peers including the Royal Australian Institute of Architects, the Institute of Interior Designers and the Australian Design Council.</p>
            </div>
        </div><!-- closing .row -->

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-lg-4 award-container">
                <img src="images/award1-768.jpg" width="768" height="432" alt="Award 1 image">
                <div class="award-text-container">
                    <h3>NSW Excellence in Housing Award 2015</h3>
                    <h4>Stokes House Randwick</h4>
                    <a class="btn btn-default" href="<?php echo BASE_URL;?>/projects/project-1.php" role="button">View Project</a>
                </div>
            </div><!-- closing .award-container -->
            <div class="col-xs-12 col-sm-6 col-lg-4 award-container">
                <img src="images/award2-768.jpg" width="768" height="432" alt="Award 2 image">
                <div class="award-text-container">
                    <h3>NSW Excellence in Housing Award 2014</h3>
                    <h4>Blues Apartments Forestville</h4>
                    <a class="btn btn-default" href="<?php echo BASE_URL;?>/projects/project-4.php" role="button">View Project</a>
                </div>
            </div><!-- closing .award-container -->
            <div class="col-xs-12 col-sm-12 col-lg-4 award-container">
                <img src="images/award3-1200.jpg" width="1200" height="432" alt="Award 3 image">
                <div class="award-text-container">
                    <h3>NSW Excellence in Housing Award 2013</h3>
                    <h4>The Paradise Apartments</h4>
                    <a class="btn btn-default" href="<?php echo BASE_URL;?>/projects/project-2.php" role="button">View Project</a>
                </div>
            </div><!-- closing .award-container -->
        </div><!-- closing .row -->
    </div><!-- closing #awards-container -->
    <!-- <a class="btn btn-default btn-lg" href="#" role="button">Get in touch</a> -->

    <?php
        // Add the footer file
        include "includes/footer.php";
    ?>
