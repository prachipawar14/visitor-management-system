<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Custom CSS for table styling */
        .container {
            padding: 2rem 0rem;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .table .table {
            background-color: #fff;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .btn {
            font-size: 1rem;
            width: 50px;
            height: 30px;
            border-radius: 0.3rem;
            background-color: transparent;
            border: none;
            cursor: pointer;
            background-repeat: no-repeat;
            background-size: contain;
        }

        .btn-success {
            color: #fff;
            background-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-success.edit {
            background-image: url('edit-icon.png');
        }

        /* Popup List */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            display: none;
        }

        .popup ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .popup ul li {
            padding: 5px 0;
        }

        .close-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <center><h1>Incomplete Entries/ अपूर्ण नोंदी !</h1></center>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">V_Id</th>
                            <th scope="col">Visitor Name</th>
                            <th scope="col">City</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Arr_Date</th>
                            <th scope="col">Arr_Time</th>
                        </tr>
                    </thead>
                     
                    <?php
                        // Include the database connection code
                        $conn = new mysqli("localhost", "root", "", "cpp");

                        if ($conn->connect_error) {
                            die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error);
                        }

                        // Construct the SQL query to fetch data for the current date
                        $currentdate = date("Y-m-d");
                        $sql = "SELECT V_Id, V_Name, City, Mobile, Date, Arr_Time FROM visitors_management WHERE Date = '$currentdate' AND Flag=1";
                        $result = $conn->query($sql);

                        if ($result === false) {
                            die('Error executing the query: ' . $conn->error);
                        }

                        if ($result->num_rows > 0) {
                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                // Output table row with data from each fetched row
                                echo '<tr>';
                                echo '<center><td><b><center>' . $row["V_Id"] . '</center></b></td>';
                                echo '<td>' . $row["V_Name"] . '</td>';
                                echo '<td>' . $row["City"] . '</td>';
                                echo '<td>' . $row["Mobile"] . '</td>';
                                echo '<td>' . $row["Date"] . '</td>';
                                echo '<td>' . $row["Arr_Time"] . '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="7">No results found</td></tr>';
                        }

                        $conn->close();
                    ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Your JavaScript code -->
    <script>
        function showPopup() {
            var popup = document.querySelector('.popup');
            popup.style.display = 'block';
        }

        function hidePopup() {
            var popup = document.querySelector('.popup');
            popup.style.display = 'none';
        }
    </script>
</body>
</html>
