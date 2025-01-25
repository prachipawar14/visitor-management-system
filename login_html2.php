<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* Your existing CSS styles */
        body {
            background-image: url('lg2.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.6);
            max-width: 400px;
            margin: 100px auto;
            text-align: center;
            border-radius: 25px;
        }

        .logo {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin-right: 10px;
            vertical-align: middle;
        }

        .login-form input {
            width: 160px;
            height: 40px;
            border: 1px solid #ccc;
            border-radius: 5px;
            vertical-align: middle;
        }

        .login-form button {
            background-color: rgba(7, 10, 71, 0.9);
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            margin:20px 0px;
        }

        .login-form button:hover {
            background-color: rgba(117, 0, 117, 0.9);
        }

        /* Popup box styles */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            border-radius: 10px;
            z-index: 9999;
            text-align: center;
        }

        .popup h2 {
            margin-top: 0;
        }

        .popup .close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <br>
        <form class="login-form" action="" method="post">
            <h1><u>LOGIN</u></h1>
            <img class="logo" src="uname.png" style="margin: 10px 20px;">
            <input type="text" name="username" placeholder="Username" style="margin: -95px 20px;" required><br><br>
            <img class="logo" src="pass.png" style="margin: 10px 20px;">
            <input type="password" name="password" placeholder="Password" style="margin: -95px 20px;" required><br>
            <button type="submit">Login</button>
        </form>
    </div>

    <!-- Popup box for success message -->
    <div id="popup-success" class="popup">
        <span class="close" onclick="closePopup('popup-success')">x</span>
        <h2>Login Successful!</h2>
        <p>You have successfully logged in.</p>
    </div>

    <!-- Popup box for error message -->
    <div id="popup-error" class="popup">
        <span class="close" onclick="closePopup('popup-error')">x</span>
        <h2>Login Failed!</h2>
        <p>Invalid username or password.</p>
    </div>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your PHP code for handling form submission and validation
    // Example: Check if username and password match
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Your validation logic goes here
    // For simplicity, I'm assuming a successful login if username and password are not empty
    $conn = new mysqli("localhost", "root", "", "cpp");
    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    } else {
        // Query the database to check if the credentials are valid
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Redirect user if credentials are valid
            echo "<script>document.getElementById('popup-success').style.display = 'block';</script>";
        } else {
            // Failed login
            // Show the error popup box
            echo "<script>document.getElementById('popup-error').style.display = 'block';</script>";
        }
    }
}
?>

    <!-- JavaScript to control the popup -->
    <script>
        // Function to close the popup
        function closePopup(popupId) {
            var popup = document.getElementById(popupId);
            if (popup) {
                popup.style.display = "none";
            }
        }
    </script>
</body>
</html>
