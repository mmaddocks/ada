/**
 *
 * Script based on: http://stackoverflow.com/questions/7717527/smooth-scrolling-when-clicking-an-anchor-link
 * Cached $("html, body") selector, so that it doesn't run every single time an anchor is clicked
 * $navHeight retrieves the total height of <nav>
 * Scrolls to the element with the ID that matches clicked href=""
**/

var $root = $("html, body");
var $navHeight = $("nav").outerHeight();

$("a").click(function() {
    $root.animate({
        scrollTop: $( $.attr(this, "href") ).offset().top - $navHeight
    }, 500);
    return false;
});
