<?php
    /*
     * Page title for this page for the header.php
     * Grabs config.php with the defined URL's
     * ROOT_PATH contains the server (https://localhost:8888/)
    */

    $pageTitle = "Australian Design Architects | Contact";
    $pageID = "contact"; /* for adding active link class in header.php */
    require_once( "includes/config.php" );
    include( ROOT_PATH . "includes/header.php" );

?>

<!-- <body> was already opened in header.php -->

    <div id="contact-container" class="container-fluid">

        <div class="row">
            <div id="contact-hero-background" class="col-xs-12"><!-- background img -->

                <div id="contact-hero-container" class="row">
                    <div class="col-xs-12 col-sm-6 contact-hero-content">
                        <h1>We should talk.</h1>
                        <h3>Either by phone for the more adventurous or email for convenience. We even prepared a handy form to write a message.</h3>
                        <a href="#form-container" class="btn btn-default contact-hero-btn" role="button">Contact Us</a>
                    </div>
                    <div class="hidden-xs col-sm-6 address-hero-content"><!-- hidden on mobile -->
                        <h1>55 Kent St</h1>
                        <h1>Sydney</h1>
                        <h1>NSW 2000</h1>
                        <h1>Australia</h1>
                        <a href="#meet-us-container" class="btn btn-default contact-hero-btn" role="button">Meet Us</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div id="form-container" class="col-xs-12 ">
                <h3>Write us a message...</h3>
                <form id="the-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="row">
                        <div id="form-group-name" class="col-sm-6 form-group">
                            <label class="sr-only" for="name-input">Name</label><!-- visible only to screen reader -->
                            <input id="name-input" class="form-control" type="text" name="yourName" placeholder="Name *">
                            <span id="error-msg-name" class="help-block hidden">Please enter your name</span>
                        </div>
                        <div id="form-group-email" class="col-sm-6 form-group">
                            <label class="sr-only" for="email-input">Email</label>
                            <input id="email-input" class="form-control" type="email" name="yourEmail" placeholder="Email *">
                            <span id="error-msg-email" class="help-block hidden">Please enter your email</span>
                        </div>
                    </div>

                    <div class="row">
                        <div id="form-group-phone" class="col-sm-6 form-group">
                            <label class="sr-only" for="phone-input">Phone</label>
                            <input id="phone-input" class="form-control" type="tel" name="yourPhone" placeholder="Phone">
                        </div>
                        <div id="form-group-company" class="col-sm-6 form-group">
                            <label class="sr-only" for="company-input">Company</label>
                            <input id="company-input" class="form-control" type="text" name="yourCompany" placeholder="Company">
                        </div>
                    </div>

                    <div id="form-group-message" class="form-group">
                        <label class="sr-only" for="message-input">Message</label>
                        <textarea id="message-input" class="form-control" rows="4" name="yourMessage" placeholder="Message *"></textarea>
                        <span id="error-msg-msg" class="help-block hidden">Please enter a message</span>
                    </div>
                    <button type="submit" class="btn btn-default" name="submit">Submit</button>
                </form>

            </div><!-- closing #form-container -->

        </div><!-- closing .row -->

        <div id="meet-us-container" class="row">
            <div class="col-xs-12 col-sm-6">
                <h1>Where are we?</h1>
                <h3>We're a friendly bunch that can usually be found in this spot.</h3>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 meet-us-address">
                        <h4>55 Kent St</h4>
                        <h4>Sydney</h4>
                        <h4>NSW 2000</h4>
                        <h4>Australia</h4>
                    </div>
                    <div class="col-xs-12 col-sm-6 email-tel-container">
                        <h5>e: hello@ada.com.au</h5>
                        <h5>t: 02 1234 5678</h5>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-6">
                <div id="mac-os-btn-container">
                    <div class="mac-btn close-btn"></div>
                    <div class="mac-btn minimise-btn"></div>
                    <div class="mac-btn fullscreen-btn"></div>
                </div>
                <div id="map"></div>
            </div>
        </div>

    </div><!-- closing #contact-container -->


<?php
    /**
     * Process form data (validated by form-validation.js)
     * Must go before "modal" to set SUPER GLOBAL variables for echoing in modal
    **/
    if ( isset($_POST["submit"]) || ($_SERVER["REQUEST_METHOD"] == "POST") ) {
        $name = $_POST["yourName"];
        $email = $_POST["yourEmail"];
        $phone = $_POST["yourPhone"];
        $company = $_POST["yourCompany"];
        $message = $_POST["yourMessage"];

        $_SESSION["formSubmitted"] = true; // Sets session once form is submitted

        // File for mail configuration to send email on submit
        require( "mail-config.php" );
    }
?>

    <!-- Modal (Hidden and only initialised by form being submit)-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                    <h4 class="modal-title" id="myModalLabel">Message sent</h4>
                </div>
                <div class="modal-body">
                    <p>Thank you for submitting a message <?php echo $name.".";?> We will be in touch within 24 hours.</p>
                </div>
            </div>
        </div>
    </div><!-- closing .modal -->

<?php
    // Add the footer file
    include "includes/footer.php";

    /**
     * Displaying "modal" must go after footer because bootstrap "modal" needs the footer (jQuery call)
     * If session is set (form submitted), show the "modal" (thank you message)
     * Then clear the session variable for reuse
    **/
    if ( isset($_SESSION["formSubmitted"]) && $_SESSION["formSubmitted"] === true) {
        echo "<script>$('#myModal').modal('show'); </script>"; // Show modal
        unset( $_SESSION["formSubmitted"] ); // IMPORTANT - this will unset the value of $_SESSION['formSubmitted']
    }
?>

<!-- </body> is closed in footer.php -->
