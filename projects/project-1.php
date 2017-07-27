<?php
    /*
     * Page title for this page for the header.php
     * Grabs config.php with the defined URL's
     * ROOT_PATH contains the server (https://localhost:8888/)
    */

    $pageTitle = "Australian Design Architects | Project 1";

    require_once( "../includes/config.php" );
    include( ROOT_PATH . "includes/header.php" );
?>

<!-- <body> was already opened in header.php -->

    <div id="project-container" class="container-fluid">
        <div class="row">
            <div id="slides" class="col-xs-12">
                <div class="slide">
                    <img src="<?php echo BASE_URL;?>/images/slide1-1920.jpg" width="1920" height="1080" alt="Project 1 image" >
                    <h2>Projects / Project 1</h2>
                </div>
            </div>
        </div>
        <div id="tables-container" class="row">
            <div class="col-xs-12 col-sm-6 col-lg-4 col-lg-offset-2 project-info-container">
                <table>
                    <tr>
                        <th>Type/Project</th><td>Residential</td>
                    </tr>
                    <tr>
                        <th>Location</th><td>Sydney, NSW</td>
                    </tr>
                    <tr>
                        <th>Area</th><td>100 sqm</td>
                    </tr>
                </table>
            </div>
            <div class="col-xs-12 col-sm-6 col-lg-4 project-info-container">
                <table>
                    <tr>
                        <th>Award</th><td>NSW Excellence in Housing 2015</td>
                    </tr>
                    <tr>
                        <th>Services</th><td>Full Architectural Services</td>
                    </tr>
                    <tr>
                        <th>Sustainability</th><td>5 Star Green Star Rating</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <?php
        // Add the footer file
        include( ROOT_PATH . "includes/footer.php");
    ?>

<!-- </body> is closed opened in footer.php -->
