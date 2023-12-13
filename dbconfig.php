
<?php
function db_connect(){ 


$server = '103.171.181.11:3306'; // this may be an ip address instead
    $user = 'devmedaapi_devmedaapi';
    $pass = '1INqu9RZDTt$';
    $database = 'devmedaapi_medalohadb';

      // Create connection
  $conn= mysqli_connect($server,$user,$pass,$database);
  return $conn;
  if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}
}

?>
