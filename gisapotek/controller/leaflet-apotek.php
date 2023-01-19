<script type="text/javascript" src="assets/geojson/jkt-apotek.js"></script>
<script>
    var centerLatLng = [-6.172064426851854, 106.82797304774769];
    var mapOptions = {
        center: centerLatLng,
        zoom: 12
    }
    var map = L.map('map', mapOptions);

    var tileLayer = new L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    });
    tileLayer.addTo(map);

    var geojson;

    var geojsonMarkerOptions = {
        radius: 6,
        fillColor: "#f28482",
        color: "#000",
        weight: 1,
        opacity: 1,
        fillOpacity: 0.8,
    };

    function setCircleMarker(feature, latlng) {
        return L.circleMarker(latlng, geojsonMarkerOptions);
    }

    function getDescription(feature, layer) {
        var popupContent = "";
        if (feature.properties && feature.properties.NAMOBJ) {
            popupContent += feature.properties.NAMOBJ;
        }
        layer.bindPopup(popupContent);
    }

    var showCenturyOnly = false;

    function filterCentury(feature, layer) {
        var showOnMap = false;
        if (showCenturyOnly && feature.properties && feature.properties.NAMOBJ) {
            if (feature.properties.NAMOBJ == "Century AEON Cakung") {
                showOnMap = true;
            }            
        } else {
            showOnMap = true;
        }
        return showOnMap; 
    }

    geojson = L.geoJSON(data, {
        pointToLayer: setCircleMarker,
        onEachFeature: getDescription,
        filter: filterCentury
    }).addTo(map);
</script>