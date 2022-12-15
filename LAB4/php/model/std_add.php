<?php

use LDAP\Result;

$id = $_GET['std_id'];
$id = $_GET['std_name'];
$id = $_GET['std_sname'];


require "condb.php";

try {
    $sql = "INSERT INTO  tb_student 
            VALUES('$std_id','$std_name','$std_sname')";
    mysqli_query($link,$sql);
    echo "Affected : " . mysqli_affected_rows($link);
} catch(Exception $e){
    echo $e . "Error no : " . mysqli_errno($link);
}
?>