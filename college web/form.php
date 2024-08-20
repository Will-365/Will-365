<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "";    
    $dbname = "re";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $inquiry = $_POST["inquiry-type"];
    $comment = $_POST["comment"];

    

    
    $sql = "INSERT INTO info (fname, lname, gender, email, phone, inquiry,comment)
            VALUES ('$fname', '$lname', '$gender', '$email', '$phone', '$inquiry','$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
} else {
    
    echo "Form not submitted.";
}
?>
