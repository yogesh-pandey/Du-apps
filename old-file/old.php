<html>
  <head>
    <title>Simple Map</title>
    <!--Mobile View-->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <!--Title For Side Panel-->
    <title>Displaying text directions with <code>setPanel()</code></title>
     <!--uery For AutoComplete-->
<link rel="stylesheet" href="css/map_style.css" />
<script src="js/jq2.js"></script>
<script src="js/jq1.js"></script>

  <!-- Maps Api And Cluster Libraries-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl-duwjt25DCSbm3coC17-Agx-eMpROes&sensor=true"></script>
    <script type="text/javascript" src="js/data.json"></script>
    <script type="text/javascript" src="js/markerclusterer.js"></script>
<!--Database Fetching Phps-->
<?php include ('./clg_details-spa.php');?>
<?php include ('./ply_sql_fetch.php');?>
<!-- Style Sheet of Maps And Side Panel-->

<!-- Main Maps Function-->
<script type="text/javascript" src="./js/main.js"></script>
 
</head>
<body>



<?php
 include('./division.php');
 ?>
 <div id="map-canvas"></div>
  
</body>
</html>
