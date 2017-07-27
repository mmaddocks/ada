<?php
    /*
     * Page title for this page for the header.php
     * Grabs config.php with the defined URL's
     * ROOT_PATH contains the server (https://localhost:8888/)
    */

    $pageTitle = "Australian Design Architects | Strategy";
    $pageID = "strategy"; /* for adding active link class in header.php */
    require_once( "includes/config.php" );
    include( ROOT_PATH . "includes/header.php" );
?>

<!-- <body> was already opened in header.php -->

    <div id="strategy-container" class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                <div id="strategy-title" class="content-container">
                    <h1>Strategy</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                <div class="content-container">
                    <h4>Schematic design</h4>
                    <p>We gain an understanding of your requirements and aspirations, followed by an assessment of the opportunities and constraints offered by the building site. A preliminary of regulations and restrictions is undertaken followed by a number of sketch design options to reach your preferred design.</p>
                    <p>These drawings have a level of detail suitable for obtaining cost estimates at the completion of this stage.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                <div class="content-container">
                    <h4>Detailed Design Development</h4>
                    <p>Depending on the cost outcomes from the first stage, the preferred and approved design is developed into the final design for Development Application (DA) submission to Council. Pre-application meetings are organised with Council and adjoining neighbours to facilitate the planning process and assist in obtaining approval.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                <div class="content-container">
                    <h4>Construction Documentation</h4>
                    <p>The DA is developed into detailed drawings, specifications and schedules to ensure the design vision is not lost during construction. The work is also co-ordinated and integrated with the drawings suitable for the Construction Certificate with Council and tendering for builders.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                <div class="content-container">
                    <h4>Contract Administration</h4>
                    <p>Following the tender process and negotiations with the preferred builder, the construction documentation is developed into Contract documents between you and the builder. The administration of the contract between you and the builder is provided to ensure design quality is maintained throughout the construction process. This stage includes regular site visits, site meetings and certification processes.</p>
                </div>
            </div>
        </div>

    </div>

    <?php
        // Add the footer file
        include "includes/footer.php";
    ?>

<!-- </body> is closed opened in footer.php -->
