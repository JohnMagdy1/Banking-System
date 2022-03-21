<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "JMB_BANK");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$from = $_GET['id'];
// Attempt delete query execution
$sql = "DELETE FROM users WHERE id=$from";
if(mysqli_query($link, $sql)){
    echo "<script> alert('Deleted Successful'); window.location='transfermoney.php';</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>