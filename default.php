<?php
/**
 * Created by IntelliJ IDEA.
 * User: Saurabh
 * Date: 3/5/2018
 * Time: 12:30 AM
 */
$con = mysqli_connect("localhost", "root", "", "restaurant_reservation");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>