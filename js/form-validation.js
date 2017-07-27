/**
 * Add's ".has-error" class to ".form-group" if not valid
 * Removes ".hidden" class to make the error text visible
 * (event) parameter must be provided from the binding function
 * event.preventDefault(); stops form submitting whilst errors
 * pathname == "/ada/contact.php" for event listener to prevent console errors on other pages
**/

if (window.location.pathname == "/ada/contact.php") {

    var contactForm = document.querySelector("#the-form");
    contactForm.addEventListener( "submit", validate );

} else {
    // Do nothing
}

function validate(event) {

    // Validate name
    if (contactForm.yourName.value === "") {
        event.preventDefault();
        document.querySelector("#form-group-name").classList.add("has-error");
        document.querySelector("#error-msg-name").classList.remove("hidden");
    } else {
        document.querySelector("#form-group-name").classList.remove("has-error");
        document.querySelector("#error-msg-name").classList.add("hidden");
    }

    // Validate email
    if (contactForm.yourEmail.value === "") {
        event.preventDefault();
        document.querySelector("#form-group-email").classList.add("has-error");
        document.querySelector("#error-msg-email").classList.remove("hidden");
    } else {
        document.querySelector("#form-group-email").classList.remove("has-error");
        document.querySelector("#error-msg-email").classList.add("hidden");
    }

    // Validate message
    if (contactForm.yourMessage.value === "") {
        event.preventDefault();
        document.querySelector("#form-group-message").classList.add("has-error");
        document.querySelector("#error-msg-msg").classList.remove("hidden");
    } else {
        document.querySelector("#form-group-message").classList.remove("has-error");
        document.querySelector("#error-msg-msg").classList.add("hidden");
    }

}
