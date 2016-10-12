<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      html, body, #map-canvas {
        height: 450px;
        width: 450px;
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
                initialize(address);
             }
             else {
                console.log("Geocoding failed: " + status);
             }
           });
        } 

}
function initialize(address) {

 // var myLatlng = new google.maps.LatLng(parseFloat(latitute),parseFloat(longitute));

console.log("here");
 //var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
 console.log("after");
  var mapOptions = {
    zoom: 16,
    center: myLatlng  
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div><p>'+address+
      '</p></div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString,
    maxWidth: 200
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: address
  });

  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

}


google.maps.event.addDomListener(window, 'load', getCoor());

    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>



