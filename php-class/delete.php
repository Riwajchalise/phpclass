<?php
include 'db.php';

// $sql = "DELETE * FROM myguests WHERE lastname='Ale'";
$sql = "DELETE FROM MyGuests WHERE id='Ale'";


if ($conn->query($sql) === TRUE) {
  echo "Record Deleted successfully";
} else {
  echo "Error Deleted record: " . $conn->error;
}

$conn->close();
?>
