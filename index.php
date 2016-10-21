<html>
  <head>
    <title>Simple Map</title>
    <!--Mobile View-->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <!--Title For Side Panel-->
    <title>Displaying text directions with <code>setPanel()</code></title>
     <!--uery For AutoComplete-->
<link rel="stylesheet" href="./map.css" />

  <!-- Maps Api And Cluster Libraries-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCl-duwjt25DCSbm3coC17-Agx-eMpROes&sensor=true"></script>
    <script type="text/javascript" src="js/data.json"></script>
    <script type="text/javascript" src="js/markerclusterer.js"></script>
<!--Database Fetching Phps-->
<?php include ('./clg_details-spa.php');?>
<?php include ('./ply_sql_fetch.php');?>
<!-- Style Sheet of Maps And Side Panel-->

<!-- Main Maps Function-->
<script type="text/javascript" src="main.js"></script>
 
</head>
<body>
<div id="directions-panel">
<?php
 include('./division1.php');
 ?>
 </div>
 <div id="map-canvas"></div>
  
</body>
</html>
