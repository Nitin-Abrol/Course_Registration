<html>
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <title>Transparent Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            /* background: url(https://image.freepik.com/free-photo/black-white-bamboo-surface-merge-background_7182-2053.jpg); */
            background-image: linear-gradient(56deg, rgba(254, 254, 254, 0.05) 0%, rgba(254, 254, 254, 0.05) 69%,rgba(160, 160, 160, 0.05) 69%, rgba(160, 160, 160, 0.05) 100%),linear-gradient(194deg, rgba(102, 102, 102, 0.02) 0%, rgba(102, 102, 102, 0.02) 60%,rgba(67, 67, 67, 0.02) 60%, rgba(67, 67, 67, 0.02) 100%),linear-gradient(76deg, rgba(169, 169, 169, 0.06) 0%, rgba(169, 169, 169, 0.06) 89%,rgba(189, 189, 189, 0.06) 89%, rgba(189, 189, 189, 0.06) 100%),linear-gradient(326deg, rgba(213, 213, 213, 0.04) 0%, rgba(213, 213, 213, 0.04) 45%,rgba(66, 66, 66, 0.04) 45%, rgba(66, 66, 66, 0.04) 100%),linear-gradient(183deg, rgba(223, 223, 223, 0.01) 0%, rgba(223, 223, 223, 0.01) 82%,rgba(28, 28, 28, 0.01) 82%, rgba(28, 28, 28, 0.01) 100%),linear-gradient(3deg, rgba(20, 20, 20, 0.06) 0%, rgba(20, 20, 20, 0.06) 62%,rgba(136, 136, 136, 0.06) 62%, rgba(136, 136, 136, 0.06) 100%),linear-gradient(200deg, rgba(206, 206, 206, 0.09) 0%, rgba(206, 206, 206, 0.09) 58%,rgba(6, 6, 6, 0.09) 58%, rgba(6, 6, 6, 0.09) 100%),linear-gradient(304deg, rgba(162, 162, 162, 0.07) 0%, rgba(162, 162, 162, 0.07) 27%,rgba(24, 24, 24, 0.07) 27%, rgba(24, 24, 24, 0.07) 100%),linear-gradient(186deg, rgba(166, 166, 166, 0.04) 0%, rgba(166, 166, 166, 0.04) 5%,rgba(210, 210, 210, 0.04) 5%, rgba(210, 210, 210, 0.04) 100%),linear-gradient(90deg, rgb(26,60,118),rgb(32,129,207),rgb(7,128,191));
            background-size: cover;
            color: white;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;

            background-color: white;
            color: black;
            text-align: center;
        }

        .logo {
            width: 150px;
            height: 55px;
        }

        .navbar {
            height: 60px;
            width: 100%;
            background: white;
        }

        .navbar ul li a:hover {
            border-style: solid;
            border-radius: 2px;
        }

        table,
        tr,
        td {

            border: 2px double black;

            border-collapse: collapse;

        }

        th,
        td {
            padding: 5px;
        }
    </style>

<body style="font-size: 20px;">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html" style="border-style: none;">
                <img class="logo"
                    src="https://img.collegedekhocdn.com/media/img/institute/logo/dsi_logo.png">

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.dsatm.edu.in/about/about-dsatm"
                            target="_blank">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://dsatm.edu.in/index.php/faq"
                            target="_blank">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://dsatm.edu.in/" target="_blank">DSATM Website</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://dsatm.edu.in/contact"
                            target="_blank">Contact Us</a>
                    </li>
                    <a href="index.html"><button type="button" style="margin-left: 680px;"
                        class="btn btn-dark">Logout</button></a>
                </ul>
            </div>
        </div>
    </nav>
<center>
        <table>
        <div class="center" style="margin-top: 110px">
            <h1><strong>SEMESTER-5</strong></h1>
<tr>
<table>
<tr>
<th>STUDENT ID</th>
<th>STUDENT USN</th>
<th>SEMESTER</th>
<th>COURSE NAMES OF THE ELECTIVES CHOSEN</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "root", "COURSE_REGISTRATION");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql5="CREATE VIEW SEM5 AS SELECT * FROM FINAL_LIST WHERE SEM='5th sem' ";
$sql6="SELECT * FROM SEM5";
$result5 = $conn->query($sql5);
$result6 = $conn->query($sql6);
if (!empty($result6) && $result6->num_rows > 0) {
while($row = $result6->fetch_assoc()) {
echo "<tr><td>" . $row["STUDENT_ID"]. "</td><td>" . $row["USN"] . "</td><td>"
. $row["SEM"]. "</td><td>". $row["ELECTIVE_CN"]. "</td></tr>";
}
echo "</table>";
} 
 else { echo "0 results"; }
$conn->close();
?>
<div class="footer">
        <p>©️ 2021 Copyrights @ DSATM. All rights reserved.</p>
    </div>
            </center>  
</table>
</body>
</html>