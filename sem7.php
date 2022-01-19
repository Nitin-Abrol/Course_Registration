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
            background-image: radial-gradient(circle at 32% 12%, rgba(229, 229, 229, 0.05) 0%, rgba(229, 229, 229, 0.05) 50%, rgba(101, 101, 101, 0.05) 50%, rgba(101, 101, 101, 0.05) 100%), radial-gradient(circle at 49% 59%, rgba(113, 113, 113, 0.05) 0%, rgba(113, 113, 113, 0.05) 50%, rgba(240, 240, 240, 0.05) 50%, rgba(240, 240, 240, 0.05) 100%), radial-gradient(circle at 16% 86%, rgba(118, 118, 118, 0.05) 0%, rgba(118, 118, 118, 0.05) 50%, rgba(207, 207, 207, 0.05) 50%, rgba(207, 207, 207, 0.05) 100%), linear-gradient(252deg, rgb(34, 85, 150), rgb(117, 220, 202));
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
   
    <body>
        <center>
        <table>
        <div class="center" style="margin-top: 100px">
            <h1><strong>SEMESTER-7</strong></h1>
            <form method="POST" action="a1.php">
    <body><table>
        <tr><th>COURSE CODE</th>
        <th>COURSE NAME</th>
    <TH>CREDITS</TH></tr>
    <?php
    $conn = mysqli_connect("localhost","root","root","COURSE_REGISTRATION");
    $sql = "SELECT * FROM COURSE where SEM=7 AND (COURSE_CODE='18CS71' OR COURSE_CODE='18CS72' OR COURSE_CODE='18CSL76' OR COURSE_CODE='18CSP77')";
    $sql1 = " SELECT COURSE_CODE FROM COURSE where SEM=7 and (COURSE_CODE='18CS731' OR COURSE_CODE='18CS732' OR COURSE_CODE='18CS733' OR COURSE_CODE = '18CS734')";
    $sql2 = " SELECT COURSE_NAME FROM COURSE where SEM=7 and (COURSE_CODE='18CS731' OR COURSE_CODE='18CS732' OR COURSE_CODE='18CS733' OR COURSE_CODE='18CS734')";
    $sql3 = " SELECT COURSE_CODE FROM COURSE where SEM=7 and (COURSE_CODE='18CS741' OR COURSE_CODE='18CS742' OR COURSE_CODE='18CS743' OR COURSE_CODE='18CS744' OR COURSE_CODE='18CS745')";
    $sql4 = " SELECT COURSE_NAME FROM COURSE where SEM=7 and (COURSE_CODE='18CS741' OR COURSE_CODE='18CS742' OR COURSE_CODE='18CS743' OR COURSE_CODE='18CS744' OR COURSE_CODE='18CS745')";
    $sql5 = " SELECT COURSE_CODE FROM COURSE where SEM=7 and (COURSE_CODE='18CS751' OR COURSE_CODE='18CS752' OR COURSE_CODE='18CS753' OR COURSE_CODE='18CS754')";
    $sql6 = " SELECT COURSE_NAME FROM COURSE where SEM=7 and (COURSE_CODE='18CS751' OR COURSE_CODE='18CS752' OR COURSE_CODE='18CS753' OR COURSE_CODE='18CS754')";
    
    $result = $conn-> query($sql);
    $result1 = $conn-> query($sql1);
    $result2 = $conn-> query($sql2);
    $result3 = $conn-> query($sql3);
    $result4 = $conn-> query($sql4);
    $result5 = $conn-> query($sql5);
    $result6 = $conn-> query($sql6);

    if($result-> num_rows >0){
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>". $row["COURSE_CODE"]."</td><td>". $row["COURSE_NAME"]."</td><td>". $row["CREDITS"]."</td></tr>";
        }
        }
        else{
            echo "No results";
        }?>
        <tr><td><select name="electives1cc"> <?php
            while($row = $result1-> fetch_assoc()){
            $course_code = $row["COURSE_CODE"];
            echo "<option value='$course_code'>$course_code</option>";}
        ?>
        </select></td>
        <td><select name="electives1cn"> <?php
            while($row = $result2-> fetch_assoc()){
            $COURSE_NAME = $row["COURSE_NAME"];
            echo "<option value='$COURSE_NAME'>$COURSE_NAME</option>";}
        ?>
        </select></td>
        <td>3</td></tr>
        <tr><td><select name="electives2cc"> <?php
            while($row = $result3-> fetch_assoc()){
            $course_code = $row["COURSE_CODE"];
            echo "<option value='$course_code'>$course_code</option>";}
        ?>
        </select></td>
        <td><select name="electives2cn"> <?php
            while($row = $result4-> fetch_assoc()){
            $COURSE_NAME = $row["COURSE_NAME"];
            echo "<option value='$COURSE_NAME'>$COURSE_NAME</option>";}
        ?>
        </select></td>
        <td>3</td></tr>
        <tr><td><select name="electives3cc"> <?php
            while($row = $result5-> fetch_assoc()){
            $course_code = $row["COURSE_CODE"];
            echo "<option value='$course_code'>$course_code</option>";}
        ?>
        </select></td>
        <td><select name="electives3cn"> <?php
            while($row = $result6-> fetch_assoc()){
            $COURSE_NAME = $row["COURSE_NAME"];
            echo "<option value='$COURSE_NAME'>$COURSE_NAME</option>";}
        ?>
        </select></td>
        <td>3</td></tr>
        <?php
        $conn->close();?>
        </table></body>
    <div class="form-check form-switch" style="margin-left: 425px;  margin-top: 7px;">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault" style="margin-left: -475px; ">I accept that
                    these are the courses I am registering for.</label>
            </div>
            <a href="a2.php">
                <button class="btn btn-primary"
                    style="margin-top: 7px; margin-bottom: 9px; padding-top: 10px; padding-bottom: 10px; padding-left: 20px; padding-right: 20px;"
                    input type="submit" id="accept" name="sb" value="SUBMIT"><strong>SUBMIT</strong></button></a>

         <h5><strong>NOTE:</strong> In case of any problems/doubts/queries, contact your proctor immediately.</h5>
        </center>
    </div>


    <div class="footer">
        <p>©️ 2021 Copyrights @ DSATM.  All rights reserved.</p>
    </div>
            </center>
    
</html>