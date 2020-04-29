<?php
include("includes/config.php");
include("includes/classes/Artist.php");
include("includes/classes/Album.php");
include("includes/classes/Song.php"); 

if(isset($_SESSION['userLoggedIn'])){
    $userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
    header("Location: register.php");
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Octave</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
    <script>
        var audioElement = new Audio();
        audioElement.setTrack("assets/music/bensound-acousticbreeze.mp3");
        audioElement.audio.play();
    </script>
     <div id="mainContainer">
        <div id="topContainer">
         
          <?php include("includes/navBarContainer.php"); ?>
          
           
           <div id="mainViewContainer">
                <div id="mainContent">