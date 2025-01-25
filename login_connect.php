<html>
<head>
    <style>
        body {
            background-image: url('lg2.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.6);
            max-width: 400px;
            margin: 100px auto;/*top*/
            text-align: center;
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
            background-color: rgba(7, 10, 71, 0.9);/*transparency*/
            color: #fff;
            padding: 10px 20px;/*height width*/
            border-radius: 5px;
			margin:20px 0px;
        }

        .login-form button:hover {
            background-color: rgba(117, 0, 117, 0.9);
        }
    </style>
</head>

<body>
    <div class="login-container">
        <br>
        <form class="login-form" method="post" action="">
            <h1><u>LOGIN</u></h1>
            <img class="logo" src="uname.png" style="margin: 10px 20px;">
			<input type="text" name="username" placeholder="Username" style="margin: -95px 20px;"><br><br>
            <img class="logo" src="pass.png" style="margin: 10px 20px;">
            <input type="password" name="password" placeholder="Password" style="margin: -95px 20px;"><br>
			<button type="submit" >Login</button>
        </form>
    </div>




   <?php
session_start(); // Start or resume the session
$errors = array();

if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        if ($username == "") {
            $errors[] = "Username is required";
        }
        if ($password == "") {
            $errors[] = "Password is required";
        }
    } else {
        // Establish database connection (replace your database credentials here)
        $conn = new mysqli("localhost", "root", "", "cpp");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Use prepared statement to prevent SQL injection
        $sql = "SELECT * FROM test WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $hashed_password = $row['password'];

            if (password_verify($password, $hashed_password)) {
                // Password is correct, set session
                $_SESSION['userId'] = $row['user_id'];
                header("Location: dashboard.php"); // Redirect to dashboard
                exit();
            } else {
                $errors[] = "Incorrect username/password combination";
            }
        } else {
            $errors[] = "Username does not exist";
        }

        $stmt->close();
        $conn->close();
    }
}
?>



</body>
</html>