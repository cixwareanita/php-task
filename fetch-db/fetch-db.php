<?php
$localhost='127.0.0.1';
$username='root';
$password='';
$dbname='todo-db';

$conn = new mysqli($localhost, $username, $password, $dbname); 
if($conn->connect_error) {
    die("connection failed : " . $conn->connect_error);
} else {
     echo "Successfully Connected"."<br>";
}

$sql ='SELECT id, user_id, subject, description, date FROM notes';
$result =$conn -> query($sql);
if($result->num_rows > 0){
    echo "<table border=1><tr><th>ID</th><th>User_id</th><th>Subject</th><th>Description</th><th>Date</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["user_id"]."</td><td>".$row["subject"]."</td><td>" .$row["description"]."</td><td>".$row["date"]."</td>"."<br>";
    }

    echo "<table>";
} else {
    echo "0 results";
}
$conn->close();

?>