document.addEventListener('DOMContentLoaded', function() {  /* ローカルスコープ */
        var MyLatLng = new google.maps.LatLng(35.71046924468737, 139.80967178529042);
        var Options = {
        zoom: 14,      //地図の縮尺値
        center: MyLatLng,    //地図の中心座標
        mapTypeId: 'roadmap'   //地図の種類
        }
        var map = new google.maps.Map(document.getElementById('map'), Options);

        // var mapOptions = {
        //     center: {lat: 35.71046924468737, lng: 139.80967178529042}, 
        //     zoom: 13,
        //     mapTypeId: google.maps.MapTypeId.ROADMAP
        // };
        // var map = new google.maps.Map(document.getElementById('map'), mapOptions);
});