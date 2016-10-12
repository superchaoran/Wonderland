<?php session_start();?>
<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Wonderland Real Estate</title>
  <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
  <link rel="icon" href="http://designshack.net/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="http://wonderland.web.engr.illinois.edu/style.css">
  <!--<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">-->
  <script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="/js/jquery.leanModal.min.js"></script>
  <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
</head>

<body>
  
  <div id="topbar">
    <div class="navigation">
    <div id="wixLogo"><a href="http://wonderland.web.engr.illinois.edu/index.php">Wonderland Real Estate</a></div>
    <div id="login_bar"><?php include  $_SERVER['DOCUMENT_ROOT'] . "/core/login_bar.php"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/core/loginModel.php"; ?></div>
    </div>
  </div>
    
  <div id="w">
    <div id="site_structure">
      <div id="site_header">
        <div id="header_centered">
          <div id="centered_chair">
            <img src="/images/chair.png" target="_self" >
          </div>
          <div id="yellow_bar"></div>
          <div id="header_title" ><h1 style="font-size:300%;font-family:sans-serif;">Wonderland Real Estate</h1></div>
          <div id="long_bar"></div>
          <div id="navigation_bar">
            <a href="http://wonderland.web.engr.illinois.edu/index.php" target="_self" id="button_home">
              <p>Home</p>
            </a>
            <a id="next_button" href="http://wonderland.web.engr.illinois.edu/view.php" target="_self">
              <p>View Lease</p>
            </a>
            <a id="next_button" href="http://wonderland.web.engr.illinois.edu/search/searchBackend.php" target="_self">
              <p>Search Lease</p>
            </a>
            <a id="next_button" href="http://wonderland.web.engr.illinois.edu/form.php" target="_self">
              <p>Post Lease</p>
            </a>
            <a id="next_button" href="http://wonderland.web.engr.illinois.edu/contact.php" target="_self">
              <p>Contact</p>
            </a>
          </div>
        </div>
      </div>

      <div style="margin-top:200px;left:0;width:980px;height:48px;position:absolute;background-color:black;">  
        <p style="text-align: center;font-size:250%;margin-top:5px;font-family:sans-serif;">Search Lease</p>
      </div>


      <?php include $_SERVER['DOCUMENT_ROOT'] . '/search/searchEngine.php';?>


      <div style="position: absolute;margin-top:350px;"><div id="map-canvas"></div></div>


    <style>
      #map-canvas {
        height: 700px;
        width: 980px;
        margin: 0px;
        padding: 0px;
      }
    </style>
      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
  var posts;
  
  $( document ).ready(function() {

    posts = <?php echo json_encode($posts);?>;
    // Asynchronously Load the map API 
    // var script = document.createElement('script');
    // script"http://maps.googleapis.com/maps/api/js?sensor=false";
    // document.body.appendChild(script);
    geocoderGetter(0, initialize);
  });

    var locations ={};

    function geocoderGetter(i, callback){

    var geocoder = new google.maps.Geocoder();
       //alert(i);
       var address = posts[i]['address'];
       if (geocoder) {
              geocoder.geocode({ 'address': address }, function (results, status) {
                 if (status == google.maps.GeocoderStatus.OK) {
                    var latitute = results[0].geometry.location.lat();
                    var longitute= results[0].geometry.location.lng();
                    var result=[latitute,longitute];
                    //var position = new google.maps.LatLng(latitute, longitute);
                    locations[i]=[latitute,longitute];

                    //alert(i+":"+locations[i]);
                    //alert(i+':'+locations[i]);
                    if(i< (posts.length-1)) {
                      geocoderGetter(++i,initialize);
                    }else{
                      callback();
                      return;
                    }
                 }
                 else {
                    alert("Geocoding failed: " + status);
                 }
               });
         }else{

              if(i< (posts.length-1)) {
                  geocoderGetter(++i,initialize);
                }else{
                  locations[i] = null;
                  i++;
                }
         }
    }
  


function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        scrollwheel: false,
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    map.setTilt(45);
        
    // // Multiple Markers
    // var markers = [
    //     ['London Eye, London', 51.503454,-0.119562],
    //     ['Palace of Westminster, London', 51.499633,-0.124755]
    // ];
                        
    // // Info Window Content
    // var infoWindowContent = [
    //     ['<div class="info_content">' +
    //     '<h3>London Eye</h3>' +
    //     '<p>The London Eye is a giant Ferris wheel situated on the banks of the River Thames. The entire structure is 135 metres (443 ft) tall and the wheel has a diameter of 120 metres (394 ft).</p>' +        '</div>'],
    //     ['<div class="info_content">' +
    //     '<h3>Palace of Westminster</h3>' +
    //     '<p>The Palace of Westminster is the meeting place of the House of Commons and the House of Lords, the two houses of the Parliament of the United Kingdom. Commonly known as the Houses of Parliament after its tenants.</p>' +
    //     '</div>']
    // ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;

    var infoWindowContent = [];

    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < posts.length; i++ ) {

        infoWindowContent.push(["<a href=\"/displaypost.php?id="+posts[i]['postID']+"\"><p style='color:black; font-size:auto; width:250px;'>"+posts[i]['address']+"</p><img src=\"http://wonderland.web.engr.illinois.edu/uploads/"+posts[i]['picture']+"\"height = \"250\" width = \"250\" ></a>"]);
        //alert(locations[i]);
        var latitute = locations[i][0];
        var longitute= locations[i][1];
        
        var latLong = new google.maps.LatLng(latitute,longitute);
        bounds.extend(latLong);
        marker = new google.maps.Marker({
            position: latLong,
            map: map,
            title: posts[i]['address']
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(13);
        google.maps.event.removeListener(boundsListener);
    });
    
}
    </script>
    

    <script type="text/javascript">
      $(function(){
        $('#modaltrigger1').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
        $('#modaltrigger2').leanModal({ top: 110, overlay: 0.45, closeButton: ".hidemodal" });
      });
    </script>

</body>
</html>
