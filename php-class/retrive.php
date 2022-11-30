<?php

include 'db.php';

$sql = "SELECT id, firstname, lastname FROM MyGuests";
// $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'"; // Where claus to get only 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
