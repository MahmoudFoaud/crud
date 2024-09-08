
<?php
$server="locahost";
$user_name="root";
$password="";
$dbName="php_intern";
  
// Create connection
$conen=new mysqli($server,$user_name,$password,$dbName);

// Check connection
if ($conen ->connect_error ) {
    die("Connection_faild".$conen->connect_error);
} 

// SQL query to select data from the table
$sql = "SELECT id, name, age FROM users";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Age: " . $row["age"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
