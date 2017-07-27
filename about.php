<?php
    /*
     * Page title for this page for the header.php
     * Grabs config.php with the defined URL's
     * ROOT_PATH contains the server (https://localhost:8888/)
    */

    $pageTitle = "Australian Design Architects | About";
    $pageID = "about"; /* for adding active link class in header.php */
    require_once( "includes/config.php" );
    include( ROOT_PATH . "includes/header.php" );
?>

<!-- <body> was already opened in header.php -->

    <div id="about-container" class="container-fluid">
        <div class="row">
            <div id="about-hero-container" class="col-xs-12"><!-- background img -->
                <div class="about-hero-content">
                    <h3>Established in 2001, Australian Design Architects believe contemporary Australian architecture should capture the spirit and culture of our land.</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="about-section-1" class="col-xs-12"><!-- background img -->
                <div class="row">
                    <div class="col-xs-12 col-sm-6 about-p-content">
                        <p class="lead">We believe homes should provide a refuge from the outside world and that workplaces should have the ability to inspire.</p>

                        <p>The buildings we create are sustainable, finely crafted in durable materials and are highly valued by our clients and the community, enabling them to serve with integrity for generations.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="about-section-2" class="col-xs-12"><!-- background img -->
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-6 about-p-content">
                        <p class="lead">Working with your ideas, we can nurture your project from conception to completion.</p>

                        <p>Our innovative and inter-disciplinary skill-set, and extensive network of suppliers, means we can take a project from the first sketch right through to construction.</p>

                        <p>Our team can help you make the right decisions and guide you through the process by bringing our creativity and can-do expertise to the table. Our work-style is collaborative, open and driven by our passion for good design.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="about-section-3" class="col-xs-12"><!-- background img -->
                <div class="row">
                    <div class="col-xs-12 col-sm-6 about-p-content">
                        <p class="lead">Our role is to understand you, the client, allowing you to realise your vision.</p>

                        <p>We create homes that reflect and celebrate your personalities while nurturing you and your families. We believe contemporary Australian residential design, whether house or apartment, should be sophisticated and relaxed, able to delight the senses. It should respect its climate, sheltering from the sun in summer and from the cold in winter.</p>

                        <p>Over the past 20 years our extensive portfolio of residential and commercial projects has been recognised by our peers including the Royal Australian Institute of Architects, the Institute of Interior Designers and the Australian Design Council.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row person-container">
            <div class="col-xs-12 col-sm-6">
                <img class="person-img" src="images/person-1.jpg" width="2000" height="1333" alt="Architect 1 ADA"/>
            </div>
            <div class="col-xs-12 col-sm-6 person-content-container">
                <h2>Person 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed ante id massa sagittis pharetra. Maecenas rutrum eros dolor, nec sollicitudin mi lacinia nec. Etiam et libero justo. Integer congue ante et auctor elementum. Donec turpis quam, congue ac bibendum vitae, rhoncus eleifend quam. Donec posuere porttitor massa, eget accumsan libero convallis eget.</p>
                <ul class="person-social-links">
                    <li><a href="#linkedIn" class="small">LinkedIn</a></li>
                    <li><a href="#twitter" class="small">Twitter</a></li>
                </ul>
            </div>
        </div>

        <div class="row person-container">
            <div class="col-xs-12 col-sm-6 person-content-container">
                <h2>Person 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed ante id massa sagittis pharetra. Maecenas rutrum eros dolor, nec sollicitudin mi lacinia nec. Etiam et libero justo. Integer congue ante et auctor elementum. Donec turpis quam, congue ac bibendum vitae, rhoncus eleifend quam. Donec posuere porttitor massa, eget accumsan libero convallis eget.</p>
                <ul class="person-social-links">
                    <li><a href="#linkedIn" class="small">LinkedIn</a></li>
                    <li><a href="#twitter" class="small">Twitter</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6">
                <img class="person-img" src="images/person-2.jpg" width="2000" height="1333" alt="Architect 2 ADA"/>
            </div>
        </div>

        <div class="row">
            <div id="contact-on-about" class="col-xs-12 col-sm-6 col-sm-offset-3">
                <h3>Ready to learn more? Contact us for a free consultation.</h3>
                <a href="<?php echo BASE_URL; ?>/contact.php" class="btn btn-default" role="button">Contact Us</a>
            </div>
        </div>

    </div>


    <?php
        // Add the footer file
        include "includes/footer.php";
    ?>

<!-- </body> is closed opened in footer.php -->
