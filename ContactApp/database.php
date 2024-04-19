<?php
$host= 'localhost';
$username = 'root';
$password = '';
$database = 'db_contact';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
// echo "Koneksi sukses";

// $result = $conn->query("SELECT*FROM contact");
// // $row = mysqli_fetch_assoc($result);
// // var_dump($row);
// $arr = array();
// if ($result-> num_rows > 0){
//   while($row = mysqli_fetch_assoc($result)){
//     foreach ($row as $key => $value){
//       $arr[$key][]= $value;
//     }
//   }
// }

?>