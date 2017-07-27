/**
 * Google Map function is called in the API call (located footer.php)
**/

function initMap() {
    var ada = {lat: -33.858931, lng: 151.203553};
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: ada
    });
    var marker = new google.maps.Marker({
        position: ada,
        map: map
    });
}
