<?php
    $host="localhost"; // Host Name
    $username="msteinmetz"; // MYSQL User
    $password="Fr0gTr!p#2298"; // MYSQL Password
    $db_name="msteinmetz_final"; // Database Name
    $tbl_name="guests"; // Table Name

// Connect to the server and select the database.
    $conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect server ");
    mysqli_select_db($conn, $db_name);

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS guests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>