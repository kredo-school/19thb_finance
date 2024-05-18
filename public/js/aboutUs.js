function initMap() {
    var mapOptions = {
        center: {lat: 35.71046924468737, lng: 139.80967178529042}, 
        zoom: 13,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
}
