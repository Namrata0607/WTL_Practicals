<?php
// 1. Database connection
$conn = new mysqli("localhost", "root", "", "studentDB");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Handle form submission (Insert)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $age      = $_POST['age'];

    $sql = "INSERT INTO registrations (name, email, password, age)
            VALUES ('$name', '$email', '$password', '$age')";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>✔️ Registration Successful!</h3>";
    } else {
        echo "Error: " . $conn->error;
    }
}

// 3. Handle delete
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM registrations WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<h4>🗑️ Record deleted successfully</h4>";
    } else {
        echo "Delete Error: " . $conn->error;
    }
}

// 4. Display all records
$sql = "SELECT * FROM registrations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Registered Users</h2>";
    echo "<table border='1' cellpadding='10'>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Age</th><th>Action</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["age"]."</td>
                <td><a href='register.php?delete_id=".$row["id"]."' onclick='return confirm(\"Delete this record?\")'>Delete</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No records found.</p>";
}

$conn->close();
?>
