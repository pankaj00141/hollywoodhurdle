<!DOCTYPE HTML>
<html>
<head>
    <script src="http://www.webglearth.com/v2/api.js"></script>
    <script>
        function initialize() {

            var bounds = [[35.98245136, -112.26379395], [36.13343831, -112.10998535]];
            var earth = new WE.map('earth_div');
            earth.setView([36.057944835, 112.18688965], 1);
            var osm = WE.tileLayer('http://otile1.mqcdn.com/tiles/1.0.0/map/{z}/{x}/{y}.jpg', {
                attribution: 'Tiles Courtesy of MapQuest'
            }).addTo(earth);

            var grandcanyon = WE.tileLayer('http://tileserver.maptiler.com/grandcanyon/{z}/{x}/{y}.png', {
                bounds: bounds,
                minZoom: 10,
                maxZoom: 16
            });
            grandcanyon.addTo(earth);
            earth.panInsideBounds(bounds);
        }
    </script>
    <style>
        html, body{padding: 0; margin: 0;}
        #earth_div{top: 0; right: 0; bottom: 0; left: 0; position: absolute !important;}
    </style>
    <title>WebGL Earth API: Maps rendered with MapTiler</title>
</head>
<body onload="initialize()">
<div id="earth_div"></div>
</body>
</html>