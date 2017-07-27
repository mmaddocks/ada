/*
 * Automatic slideshow with controls
 * Tutorial https://www.sitepoint.com/make-a-simple-javascript-slideshow-without-jquery/
 * Only executes on projects.php (prevent console errors on other pages)
*/

if (window.location.pathname == "/ada/projects.php") {

    /*
     * Get each .slide that sits within container #slides
     * Set variable to keep track of the current slide
     * setinterval() method to call the nextSlide() function every 8 seconds
    */
    var slides = document.querySelectorAll( ".slide" );
    var currentSlide = 0;
    var slideInterval = setInterval( nextSlide, 8000 );

    /* ---------------------------------------------------------------------------------------------------------------

        Slideshow manual controls (next/previous)

    --------------------------------------------------------------------------------------------------------------- */
    /*
     * Fetch controls and store in variables
     * Setup event listeners
     * Click event instigates anonymous function which calls next or previous slide function
    */
    var next = document.getElementById("next");
    var previous = document.getElementById("previous");

    next.addEventListener( "click", function() {
        nextSlide();
    });
    previous.addEventListener( "click", function() {
        //clearInterval(slideInterval);
        previousSlide();
    });

} else {
    //return false;
}


/*
 * setInterval() within conditional calls nextSlide()
 * nextSlide() calls goToSlide() with the value of "currentSlide + 1" as the argument
 * previousSlide() calls goToSlide() with the value of "currentSlide - 1" as the argument
*/
function nextSlide() {
    goToSlide(currentSlide+1);
}
function previousSlide() {
    goToSlide(currentSlide-1);
}

/*
 * goToSlide(n) receives the value of (currentSlide + 1 or currentSlide -1) from nextSlide() or previousSlide()
 * This becomes the value in "n" and is the "next" or "previous" slide
 * 1st line hides the currentSlide via class with a css style
 * 2nd line alters the currentSlide value:
        > currentSlide + 1 or currentSlide -1 value is added to total length of slideshow
        > E.g: currentSlide value is 0 (slide 0 is then hidden) on call to goToSlide(). The next slide is (0 + 1 = 1), 1 + 5 (total slide length) = 6. 6 modulus (%) 5 = remainder 1. This value is passed into currentSlide.
        > Last slide would be 11 % 5 = remainder 1 (returns to the first slide)
 * 3rd line changes the class of the (next or previous) element by adding two classes > .showing class shows slide
*/
function goToSlide(n) {
    slides[currentSlide].className = "slide hide-slide";
    currentSlide = (n+slides.length)%slides.length;
    slides[currentSlide].className = "slide show-slide";
}
