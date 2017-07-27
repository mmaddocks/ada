/**
 * Script to change navbar background colour, navigation links & swap logo
 * This occurs base on:
        -- Scroll event
        -- Click event (hamburger)
        -- Click event (dropdown navigation link)
 * Variable "i" declared outside of loop for reuse
*/

var navbar = document.querySelector(".navbar");
var logo = document.querySelector("#nav-logo");
var navbarItems = document.querySelectorAll(".navbar-item");
var hamburgerBars = document.querySelectorAll(".icon-bar");
var i;
var hamburger = document.querySelector(".navbar-toggle");
var dropdown = document.querySelector(".dropdown-toggle");
var mobileNav = document.querySelector(".navbar-collapse");
var activeNavLink = document.querySelector(".active");
var overflowWrapper = document.querySelector("#overflow-wrapper");

/* ==================================================================================================== */
/**
 * If scrolled to the top, check which page pathname
 * If this page is strategy.php or privacy-policy.php, add some classes
 * If at the top, but not strategy.php, remove any classes
 * Else, scrolled greater than 1, add some classes
 * Don't use "scrollY" (Not supported in IE)
**/

window.addEventListener("scroll", function() {

    if (window.pageYOffset <= 1) {
        if (window.location.pathname === "/ada/strategy.php" || window.location.pathname === "/ada/privacy-policy.php") {
            navbar.classList.add("navbar-scrolled");
            logo.src = "/ada/images/logo-scrolled.svg";
            loopClassAddLinksClass();
            loopClassAddHamburgerClass();
        } else {
            navbar.classList.remove("navbar-scrolled");
            navbar.classList.remove("hamburger-clicked"); // insure navbar is always transparent at the top
            logo.src = "/ada/images/logo.svg";
            loopClassRemoveLinksClass();
            loopClassRemoveHamburgerClass();
        }
    } else {
        navbar.classList.add("navbar-scrolled");
        logo.src = "/ada/images/logo-scrolled.svg";
        loopClassAddLinksClass();
        loopClassAddHamburgerClass();
    }
});


/* ==================================================================================================== */
/**
 * Seperate functions for adding and removing class
 * Adds/removes class on each element with the class ".navbar-item"
 * Adds/removes class on each element with the class ".icon-bar"
**/

function loopClassAddLinksClass() {
    for (i = 0; i < navbarItems.length; i++) {
        navbarItems[i].classList.add("navbar-scrolled");
    }
}

function loopClassRemoveLinksClass() {
    for (i = 0; i < navbarItems.length; i++) {
        navbarItems[i].classList.remove("navbar-scrolled");
    }
}
/* ---------------------------------------------------------------------------------------------------- */

function loopClassAddHamburgerClass() {
    for (i = 0; i < hamburgerBars.length; i++) {
        hamburgerBars[i].classList.add("navbar-scrolled");
    }
}

function loopClassRemoveHamburgerClass() {
    for (i = 0; i < hamburgerBars.length; i++) {
        hamburgerBars[i].classList.remove("navbar-scrolled");
    }
}

/* ==================================================================================================== */
/**
 * Function to swap logo based on whether .navbar background is white or transparent
**/
function selectLogo() {

    if (navbar.classList.contains("hamburger-clicked") || navbar.classList.contains("navbar-scrolled")) {
        logo.src = "/ada/images/logo-scrolled.svg";
    } else {
        logo.src = "/ada/images/logo.svg";
    }
}


/* ==================================================================================================== */
/**
 * Seperate function for click event of hamburger
 * Onclick, if mobileNav already has ".in" (nav must be open) - so remove the class.
        -- Else, add the class (when you have transparent nav and click)
 * Call "selectLogo()" function to swap logo
 * Add and remove functions used to prevent "toggle glitch" on hamburger
**/

hamburger.addEventListener("click", function() {

    if (mobileNav.classList.contains("in")) {
        navbar.classList.remove("hamburger-clicked");

    } else {
        navbar.classList.add("hamburger-clicked");
    }

    selectLogo();

    if (navbar.classList.contains("hamburger-clicked") || navbar.classList.contains("navbar-scrolled")) {
        loopClassAddHamburgerClass();
    } else {
        loopClassRemoveHamburgerClass();
    }

});


/* ==================================================================================================== */
/**
 * Seperate function for click event of "Projects" dropdown
 * If statement checks if ".navbar" does NOT contain ".hamburger-clicked" or ".navbar-scrolled"
   AND if ".navbarItems" contains ".navbar-scrolled" (therefore white links with transparent background)
 * So toggle ".hamburger-clicked" on (adds white background)
 * Call "loopClassAddClass()" function to change ".navbarItems" colour to dark
 * Call "selectLogo()" function to swap logo
**/

dropdown.addEventListener("click", function() {

    if (!navbar.classList.contains("hamburger-clicked") || !navbar.classList.contains("navbar-scrolled") && !navbarItems[i].classList.contains("navbar-scrolled")) {

        navbar.classList.add("hamburger-clicked"); // background-color white

        loopClassAddLinksClass();
        loopClassAddHamburgerClass(); // Required to prevent "undefined error"

        selectLogo(); // As ".hamburger-clicked" has now been toggled. Call function to select logo

    } else {
        // Do nothing
    }
});

/**
 * Onload event
 * If navbar has been scrolled (white background)
 * Grab the active nav link and add the class to change to a black underline
**/
window.addEventListener("load", function() {

    if ( navbar.classList.contains("navbar-scrolled") ) {
        activeNavLink.classList.add("navbar-scrolled");
    } else {
    }
});

/**
 * Hamburger click event
 * Toggles class to prevent the rest of the document from scrolling in the background
 * Scroll event to be fired when click event occurs, to prevent
 * Add white background to nav when clicked and at the top
**/
hamburger.addEventListener("click", function() {

    if (mobileNav.classList.contains("in")) {
        overflowWrapper.classList.remove("nav-is-open");
    }
    else {
        overflowWrapper.classList.add("nav-is-open");
    }

    window.addEventListener("scroll", function() {
        if (window.pageYOffset <= 1) {
    		if (window.screen.width >= 768) {
    			navbar.classList.remove("hamburger-clicked"); // Prevent glitch on desktop
    		} else {
        		navbar.classList.add("hamburger-clicked");
        		selectLogo();
        		loopClassAddHamburgerClass();
    		}
    	} else {
    		navbar.classList.remove("hamburger-clicked");
    	}
    });
});

/* OLD on scroll conditional
    if (window.scrollY >= 1) {
        navbar.classList.add("navbar-scrolled");
        logo.src = "/ada/images/logo-scrolled.svg";
        loopClassAddLinksClass();
        loopClassAddHamburgerClass();
    }

    else {
        navbar.classList.remove("navbar-scrolled");
        navbar.classList.remove("hamburger-clicked"); // insure navbar is always transparent at the top
        logo.src = "/ada/images/logo.svg";
        loopClassRemoveLinksClass();
        loopClassRemoveHamburgerClass();
    }
*/
