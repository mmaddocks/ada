<?php

    /*
     * Config file to set relative URL's:
            -- Pages
            -- CSS
            -- Images
            -- Scripts
     * DEFINE() Constants (variables that cannot change)
     * "BASE_URL" value = "/ada/"
            -- This is for CSS file linking in header.php
     * "ROOT_PATH" value = "http://localhost:8888 . /ada/"
            -- This is for "INCLUDES" file linking regardless
               of the page/file's location in the directory
    */

    define( "BASE_URL", "/ada");
    define( "ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/ada/");

 ?>
