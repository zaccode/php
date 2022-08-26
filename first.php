<?php 

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed :".mysqli_connect_errno());

$sql = "SELECT * FROMs personal";
// $result = mysqli_query($conn,$sql) or die("Query failed :".mysqli_error($conn));
$result = mysqli_query($conn,$sql);
print_r(mysqli_error_list($conn));

  die();

// $row = mysqli_fetch_assoc($result);  // this is used to store associative array in the variable
// $row = mysqli_fetch_row($result);  //this function is make the fetched the data in index form
// $row = mysqli_fetch_array($result); //this will return the associative array and index 
// $row = mysqli_fetch_all($result); //it fetch all data in the table and return in multidimension array
// $row = mysqli_fetch_field($result); //it is used to fetch the information in the table

echo "Total Record :" . mysqli_affected_rows($conn);    //this function return the number of rows in the table

// echo "<pre>";
// print_r($row);
// echo "</pre>";

?>