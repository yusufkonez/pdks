<html>
<head>
    <title>Add Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style>
        /* Set the size of the div element that contains the map */
        #map {
            height: 750px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
            border-radius: 7px;
            padding: 30px 30px 35px;
        }
    </style>
    <script>
        // Initialize and add the map
        function initMap() {
            // The map, centered at Arnavutkoy
            const arnavutkoy = {lat: 41.186399883042625, lng: 28.738882330462065};
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 13,
                center: arnavutkoy
            });
            @foreach($parks as $val)
            new google.maps.Marker({ // I just removed these codes from line BEFORE : const marker = new google.maps.Marker({
                    position: { lat: {{$val -> loc_x}}, lng: {{$val -> loc_y}} }, // I just removed these codes from line BEFORE : position: park1; // const park1 = {lat: 41.180560036652366, lng: 28.749927523977902};;
                    map: map
                });
            @endforeach
        }

        window.initMap = initMap;
    </script>
</head>
<body>
<!--The div element for the map -->
<div id="map"></div>
<!--
 The `defer` attribute causes the callback to execute after the full HTML
 document has been parsed. For non-blocking uses, avoiding race conditions,
 and consistent behavior across browsers, consider loading using Promises
 with https://www.npmjs.com/package/@googlemaps/js-api-loader.
-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9HcisR08bp63knPBfr-i-XawExSXmEeQ&callback=initMap&v=weekly" defer></script>

</body>
</html>
