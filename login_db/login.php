<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname ='login_db';
    $conn = mysqli_connect($host,$user,$pass,$dbname);
    $sql = "INSERT INTO aksu(name,email,mobile,city) value ('$name','$email','$mobile','$city')";
    mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News App</title>
    <style>
        /* Apply a colorful background */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        /* Style the form container */
        form {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        /* Style the input fields */
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="submit"] {
            width: calc(100% - 20px);
            margin-bottom: 15px;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        /* Add specific styles to the submit button */
        input[type="submit"] {
            background-color: #ff5f6d;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease;
        }

        /* Change submit button color on hover */
        input[type="submit"]:hover {
            background-color: #ffc371;
        }

        /* Adjust form fields for mobile responsiveness */
        @media (max-width: 480px) {
            form {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <form action="#" method="POST">
        <h2>Submit Your Details</h2>
        Name: <input type="text" name="name" placeholder="Enter your name" required><br>
        Email: <input type="email" name="email" placeholder="Enter your email" required><br>
        Mobile: <input type="number" name="mobile" placeholder="Enter your mobile number" required><br>
        City: <input type="text" name="city" placeholder="Enter your city" required><br>
        <input type="submit" name="submit" value="Send Data">
    </form>
</body>
</html>

