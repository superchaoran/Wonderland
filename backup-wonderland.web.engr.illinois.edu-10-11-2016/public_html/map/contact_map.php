<?php session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      html, body, #map-canvas {
        height: 150px;
        width: 980px;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
    var myLatlng;
<?php echo "function getCoor(){"; ?>
  <?php echo 'var address = \''.$_GET['address'].'\';';?>
 //var address = '203 S 6th St, Urbana, IL';
   var geocoder = new google.maps.Geocoder();
   if (geocoder) {
          geocoder.geocode({ 'address': address }, function (results, status) {
             if (status == google.maps.GeocoderStatus.OK) {
                console.log("ok");
                //console.log(results[0].geometry.location)
              
                latitute = results[0].geometry.location.lat();
                longitute = results[0].geometry.location.lng();  
                console.log(latitute);
                console.log(longitute);
                myLatlng = new google.maps.LatLng(latitute,longitute);
                initialize();
             }
             else {
                console.log("Geocoding failed: " + status);
             }
           });
        } 

}
function initialize() {

  var mapOptions = {
    zoom: 16,
    center: myLatlng,
    scrollwheel: false,
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'UIUC Siebel Center'
  });
  var infoWindow = new google.maps.InfoWindow();
  var contentLabel = "<p style='color:black;'>Siebel Center (Computer Science, UIUC, Champaign, IL</p>";
          // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(contentLabel);
                infoWindow.open(map, marker);
            }
        })(marker, 0));
}


google.maps.event.addDomListener(window, 'load', getCoor());

    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>



