<?php
    /*
     * Page title for this page for the header.php
     * Grabs config.php with the defined URL's
     * ROOT_PATH contains the server (https://localhost:8888/)
    */

    $pageTitle = "Australian Design Architects | Projects";
    $pageID = "projects"; /* for adding active link class in header.php */
    require_once( "includes/config.php" );
    include( ROOT_PATH . "includes/header.php" );
?>

<!-- <body> was already opened in header.php -->

    <div id="projects-container" class="container-fluid">
        <div class="row">
            <div id="slides" class="col-xs-12">
                <a href="projects/project-1.php">
                    <div class="slide show-slide">
                        <img src="images/slide1-1920.jpg" width="1920" height="1080" alt="Project 1 image" >
                        <h2>Projects / Project 1</h2>
                    </div>
                </a>
                <a href="projects/project-2.php">
                    <div class="slide hide-slide">
                        <img src="images/slide2-1920.jpg" width="1920" height="1080" alt="Project 2 image" >
                        <h2>Projects / Project 2</h2>
                    </div>
                </a>
                <a href="projects/project-3.php">
                    <div class="slide hide-slide">
                        <img src="images/slide3-1920.jpg" width="1920" height="1440" alt="Project 3 image" >
                        <h2>Projects / Project 3</h2>
                    </div>
                </a>
                <a href="projects/project-4.php">
                    <div class="slide hide-slide">
                        <img src="images/slide4-1920.jpg" width="1920" height="1276" alt="Project 4 image" >
                        <h2>Projects / Project 4</h2>
                    </div>
                </a>
                <button class="btn slide-controls" id="previous">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </button>
                <button class="btn slide-controls" id="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>


    <?php
        // Add the footer file
        include "includes/footer.php";
    ?>

<!-- </body> is closed opened in footer.php -->
