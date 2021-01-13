<?php
    $host="localhost"; // Host Name
    $username="msteinmetz"; // MYSQL User
    $password="Fr0gTr!p#2298"; // MYSQL Password
    $db_name="msteinmetz_final"; // Database Name
    $tbl_name="guests"; // Table Name

// Connect to the server and select the database.
    $conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect server ");
    mysqli_select_db($conn, $db_name);

$sql = "SELECT id, firstname, lastname FROM guests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

//Check Query Success
if($result){
  echo "Successful";
  echo "<BR>";
// Link View Guestbook Page
echo "<a href='info.php'>View Previous Guests</a>";
}

else {
echo "ERROR";
}

mysqli_close($conn);
?>
