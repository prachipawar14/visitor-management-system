<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Visitor's Registration</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>

<h1>Visitor's Registration</h1>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_input(INPUT_POST, "name");
    $city = filter_input(INPUT_POST, "city");
    $mob = filter_input(INPUT_POST, "mn");
    $vhno = filter_input(INPUT_POST, "vn");
    $gender = filter_input(INPUT_POST, "gender");
    $category = filter_input(INPUT_POST, "category");
    $selfie = filter_input(INPUT_POST, "selfie");

    $currentdate = date("Y-m-d");
    $currenttime = date("h:i:s A");

    $conn = new mysqli("localhost", "root", "", "cpp");

    if ($conn->connect_error) {
        die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
    } else {
        $sql = "INSERT INTO visitors_management (V_Name, Gender, City, Category, Mobile, Vehicle_no, Entry_type, Image, Date, Arr_Time, Flag) VALUES ('$name','$gender','$city','$category','$mob','$vhno','In','$selfie','$currentdate','$currenttime',1)";

        if ($conn->query($sql)) {
            $lastInsertedID = $conn->insert_id; // Get the last inserted ID
            echo "New record is inserted. ID: " . $lastInsertedID;
            // Redirect to another page after successful registration
            echo "<script>window.location.href = 'another-page.html';</script>";
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required="true"><br>

    <label for="gender">Gender:</label>
    <input type="radio" value="Male" id="m" name="gender">Male
    <input type="radio" value="Female" id="fm" name="gender">Female
    <input type="radio" value="Other" id="o" name="gender">Other<br>

    <label for="city">Village:</label>
    <input type="text" name="city" id="city" required="true"><br>

    <label for="category">Category:</label>
    <select name="category" required="true">
        <option value="Parents">Parents</option>
        <option value="Visiting_faculty">Visiting Faculty</option>
        <option value="Other">Other</option>
    </select><br>

    <label for="mobile">Mobile:</label>
    <input type="text" name="mn" id="mobile" required="true"><br>

    <label for="vehicle">Vehicle No:</label>
    <input type="text" name="vn" id="vehicle" required="true"><br>

    <label for="selfie">Upload selfie:</label><br>
    <input type="file" name="selfie" required="true"><br>

    <button type="submit">SUBMIT</button>
</form>

</body>
</html>
