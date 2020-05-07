<?php
$conix = new mysqli("localhost","root","","air_plane");

if($conix->connect_error){
    die("Could not connect to the database" .$conix->connect_error);
}

?>