<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tafee Predict</title>
    <link rel="stylesheet" href="./src/css/style.css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script type="text/javascript" src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet@2.2.3/dist/esri-leaflet.js" integrity="sha512-YZ6b5bXRVwipfqul5krehD9qlbJzc6KOGXYsDjU9HHXW2gK57xmWl2gU6nAegiErAqFXhygKIsWPKbjLPXVb2g==" crossorigin=""></script>

    <!-- Load Esri Leaflet Geocoder from CDN -->
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.2.13/dist/esri-leaflet-geocoder.css" integrity="sha512-v5YmWLm8KqAAmg5808pETiccEohtt8rPVMGQ1jA6jqkWVydV5Cuz3nJ9fQ7ittSxvuqsvI9RSGfVoKPaAJZ/AQ==" crossorigin="" />
    <script src="https://unpkg.com/esri-leaflet-geocoder@2.2.13/dist/esri-leaflet-geocoder.js" integrity="sha512-zdT4Pc2tIrc6uoYly2Wp8jh6EPEWaveqqD3sT0lf5yei19BC1WulGuh5CesB0ldBKZieKGD7Qyf/G0jdSe016A==" crossorigin=""></script>
    <script type="text/javascript" src="./src/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="./src/js/app.js"></script>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="logo"><img src="./src/images/logo.png" /></a>
        <a href="about.php">ABOUT US</a>
        <a href="dataset.php">DATASET</a>
        <a href="predict.php" class="active">PREDICT</a>
        <a href="javascript:void(0);" style="font-size: 15px" class="icon" onclick="showNav()">&#9776;</a>
    </div>
    <div class="main">
        <div class="container">
            <div class="map-container">
                <div id="map"></div>
            </div>
            <div class="result-container">
                <div class="input-container">
                    <p>Note: You must enter the number of person then choose route to get the results.</p>
                    <h5>Enter no. of Persons</h5>
                    <input class="input" name="value" type="number" value="0" id="field" autocomplete="off" />
                </div>
                <!-- loader -->
                <div class="loader-container">
                    <img src="./src/images/Preloader_2.gif" alt="loader">
                </div>
                <!-- display result when request is completed -->
                <div class="result">
                    <h1>Prediction Result</h1>
                    <div class="box-wrapper">
                        <div class="box-container">
                            <div class="box-header">Total Distance</div>
                            <div class="box-body" id="distance">0</div>
                        </div>
                        <div class="box-container">
                            <div class="box-header">Estimated travel time</div>
                            <div class="box-body" id="time">0</div>
                        </div>
                    </div>
                    <p>Your Current location coordinates</p>
                    <div class="box-wrapper">
                        <div class="box-container">
                            <div class="box-header">Longitude</div>
                            <div class="box-body" id="long" style="background-color: #cf1a38;">0</div>
                        </div>
                        <div class="box-container">
                            <div class="box-header">Latitude</div>
                            <div class="box-body" id="lat" style="background-color: #cf1a38;">0</div>
                        </div>
                    </div>
                    <p>Current Location</p>
                    <div class="box-wrapper">
                        <div class="box-container">
                            <div class="box-header">Location</div>
                            <div class="box-body" id="loc" style="background-color: #cf1a38;">0</div>
                        </div>
                    </div>
                    <p>Route</p>
                    <div class="box-wrapper">
                        <div class="box-container">
                            <div class="box-header">Point A</div>
                            <div class="box-body" id="point_a" style="background-color: highlight;"></div>
                        </div>
                        <div class="box-container">
                            <div class="box-header">Point B</div>
                            <div class="box-body" id="point_b" style="background-color: highlight;"></div>
                        </div>
                    </div>
                    <div class="price-container">
                        <p>Minimal Travel fee</p>
                        <h1>&#8369 <span id="value">10000</span></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">LSPU-SPCC CSEL-302(INTELLIGENT SYSTEMS)</div>
    </div>
</body>
<script type="text/javascript">
    if (navigator.geolocation) {

        var map = L.map("map").setView([0, 0], 18);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: '© <a href="https://www.mapbox.com/about/maps/">Mapbox</a> © <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> <strong><a href="https://www.mapbox.com/map-feedback/" target="_blank">Tafee-CSEL-302</a></strong>',
            tileSize: 512,
            maxZoom: 18,
            zoomOffset: -1,
            id: 'mapbox/navigation-night-v1',
            accessToken: 'pk.eyJ1IjoiYWdlb2Fnbm90ZSIsImEiOiJja3FsMXd1b3QwbWhtMnJtdnJzbmIyMTZoIn0.DYd5ThnC8XLkxLH3Bfj7ag'
        }).addTo(map);
        // get current coordiantes
        var startingpoint, endpoint;

        var coord = map.locate({
            setView: true
        });
        var geocodeService = L.esri.Geocoding.geocodeService();
        navigator.geolocation.getCurrentPosition(function(location) {

            var latlng = new L.LatLng(
                location.coords.latitude,
                location.coords.longitude
            );
            startingpoint = L.marker(latlng, {
                dragable: true
            }).bindPopup("Current Location").addTo(map).openPopup();
            $('#lat').html(latlng.lat)
            $('#long').html(latlng.lng)
            geocodeService.reverse().latlng([latlng.lat, latlng.lng]).run(function(error, result) {
                if (error) {
                    return;
                }
                $('#loc').html(result.address.Match_addr);
            })
        });

        var distance;



        var mapOnclick = function(e) {
            endpoint = L.marker(e.latlng).addTo(map);
            let start = startingpoint.getLatLng();
            let end = endpoint.getLatLng();

            if (endpoint != undefined) {
                map.removeLayer(endpoint);
            }
            //routing config
            var routeControl = L.Routing.control({
                waypoints: [start, end],
            }).addTo(map);

            routeControl.on("routesfound", function(evt) {
                var routes = evt.routes;
                var summary = routes[0].summary;
                distance = (summary.totalDistance / 1000)

                $('#distance').html(distance.toFixed(2), 'km')
                $('#time').html(Math.round((summary.totalTime % 3600) / 60) + 'Minutes')

                if ($('#field').val() != '') {
                    var person_count = $('#field').serialize();
                    getRequest(distance, person_count);
                } else {
                    alert('Please specify the numbers of persons.')
                }

                var routes_d = new Array();

                routes_d = routeControl.getWaypoints();

                var POINT_A = [routes_d[0].latLng.lat, routes_d[0].latLng.lng];
                var POINT_B = [routes_d[1].latLng.lat, routes_d[1].latLng.lng];

                geocodeService.reverse().latlng(POINT_A).run(function(error, result) {
                    if (error) {
                        return;
                    }
                    $('#point_a').html(result.address.Match_addr);
                })
                geocodeService.reverse().latlng(POINT_B).run(function(error, result) {
                    if (error) {
                        return;
                    }
                    $('#point_b').html(result.address.Match_addr);
                })

            });
            map.off("click", mapOnclick);
        };

        //cast event
        map.on("click", mapOnclick);

    } else {
        alert('Your device doesn\'t support geolocation.')
    }

    $(document).ready(() => {
        var persons;
        if (distance == undefined) {
            distance = 0;
        }
        if ($('#field').val() == '' || $('#field').val() == 0) {
            persons = 0;
        }

        document.getElementById('field').addEventListener('keypress', function(e) {
            if (e.which < 48 || e.which > 57) {
                e.preventDefault();
            }
        })

        document.getElementById('field').addEventListener('input', function(e) {
           this.value = this.value.replace(/[e\+\-\.]/gi, "");
        })
        $('#field').on('change keyup', () => {

            persons = $('#field').serialize();

            if ($('#field').val() != '') {
                if(persons.indexOf('.') >= 0) {
                   getRequest(distance = 0, persons = 0);
                }else{
                   getRequest(distance, persons);
                }
            } else {
                alert('Please specify the numbers of persons.')
            }
        })
    })
</script>

</html>
