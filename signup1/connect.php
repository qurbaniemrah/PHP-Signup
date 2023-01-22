<?php 
$HOSTNAME = 'localhost';
$USERNAME='root';
$PASSWORD='';
$DATABaSE='signupforms';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);


if($con){
    echo "Connection successful";
}else {
    die(mysqli_error($con));
}







?>