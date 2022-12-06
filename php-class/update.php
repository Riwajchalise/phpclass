<?php
include 'db.php';

$sql = "UPDATE MyGuests SET lastname='Ale' WHERE lastname='Doe'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
