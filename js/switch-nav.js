/**
 * Script to change navbar colour IF page "strategy.php" is opened
 * Variable "i" declared outside of loop for reuse
*/

var navbar = document.querySelector(".navbar");
var logo = document.querySelector("#nav-logo");
var navbarItems = document.querySelectorAll(".navbar-item");
var hamburgerBars = document.querySelectorAll(".icon-bar");
var i;
var hamburger = document.querySelector(".navbar-toggle");

function switchNav() {

    if (window.location.pathname === "/ada/strategy.php" || window.location.pathname === "/ada/privacy-policy.php") {
        navbar.classList.add("navbar-scrolled");
        logo.src = "images/logo-scrolled.svg";
        loopClassAddLinksClass();
        loopClassAddHamburgerClass();
    } else {
        return false;
    }
}

window.onload = function () {
    switchNav();
};
