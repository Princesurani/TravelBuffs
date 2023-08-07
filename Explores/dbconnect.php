<?php


function getcon()
{
    $con=mysqli_connect("localhost","root","","travelbuffs");
    if(!$con)
    {
        die ("Connection Unsucess".mysqli_connect_error());
    }
    return $con;
}
?>