<script type="text/javascript" src="assets/geojson/jkt-kota.js"></script>
<style>
    .info {
        padding: 6px 8px;
        font: 14px/16px Arial, Helvetica, sans-serif;
        background: white;
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    .info h4 {
        margin: 0 0 5px;
        color: #777;
    }

    .legend {
        line-height: 18px;
        color: #555;
    }

    .legend i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 0.7;
    }
</style>
<script>
    var centerLatLng = [-6.172064426851854, 106.82797304774769];
    var mapOptions = {
        center: centerLatLng,
        zoom: 11
    }
    var map = L.map('map', mapOptions);

    var tileLayer = new L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 15,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    });
    tileLayer.addTo(map);

    var geojson;
    var info = L.control();

    info.onAdd = function (map) {
        this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
        this.update();
        return this._div;
    };

    // method that we will use to update the control based on feature properties passed
    info.update = function (props) {
        this._div.innerHTML = '<h4>Jumlah Apotek di DKI Jakarta</h4>' + (props ?
            '<b>' + props.NAMOBJ + '</b><br />' + props.populasi + ' apotek'
            : 'Hover over a city');
    };

    info.addTo(map);

    function getColor(d) {
        return d > 2589589 ? '#BD0026' :
            d > 1865647 ? '#E31A1C' :
                d > 1105731 ? '#FC4E2A' :
                    d > 29719 ? '#FD8D3C' :
                        '#FEB24C';
    }

    function setStyle(feature) {
        return {
            fillColor: getColor(feature.properties.populasi),
            weight: 2,
            opacity: 1,
            color: 'white',
            dashArray: '3',
            fillOpacity: 0.7
        };
    }

    function highlightFeature(e) {
        var layer = e.target;

        layer.setStyle({
            weight: 5,
            color: '#666',
            dashArray: '',
            fillOpacity: 0.7
        });

        layer.bringToFront();
        info.update(layer.feature.properties);
    }

    function resetHighlight(e) {
        geojson.resetStyle(e.target);
        info.update();
    }

    function zoomToFeature(e) {
        map.fitBounds(e.target.getBounds());
    }

    function onEachFeature(feature, layer) {
        layer.on({
            mouseover: highlightFeature,
            mouseout: resetHighlight,
            click: zoomToFeature
        });
    }

    geojson = L.geoJSON(data, {
        style: setStyle,
        onEachFeature: onEachFeature
    }).addTo(map);



</script>