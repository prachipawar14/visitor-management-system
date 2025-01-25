<?php
$vid = filter_input(INPUT_POST, "v_id");
$currenttime = date("H:i:s");
$vid=(int)$vid;

$conn = new mysqli("localhost", "root", "", "cpp");

if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
} else {
    // Assuming $Out is defined somewhere in your code
    $sql = "UPDATE visitors_management SET Entry_type='Out', Dept_Time='$currenttime', Flag=0 WHERE V_Id=$vid";

    // Execute the query
    $conn->query($sql);

    $conn->close();
}
?>
