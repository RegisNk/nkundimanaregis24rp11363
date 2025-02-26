<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO tbl_users (user_firstname, user_lastname, user_gender, user_email, user_password) VALUES ('$firstname', '$lastname', '$gender', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Registration successful! You will be redirected to the login page.');
                window.location.href = 'login.php';
              </script>";
    } else {
        echo "<script>
                alert('Registration failed! Please try again.');
                window.history.back();
              </script>";
    }
}
?>
