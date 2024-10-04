<?php

include("connection.php");
$con = connection();

$id=0;
$nombreAlumnos = $_POST['nombreAlumnos'];
$edad = $_POST['edad'];

$sql = "INSERT INTO alumnos VALUES('$id', '$nombreAlumnos', '$edad')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: ../index.php");
}else{
    
}

?>