<?php
 
 if(mysqli_connect("localhost","root","","interior_project")) {
    echo "Connection successfull";
    mysqli_select_db($con, 'your_database_name');
 }
 else {
    echo "Connection failed";
 }


?>