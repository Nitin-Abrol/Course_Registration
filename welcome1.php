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

        #container {
            position: fixed;
            left: 10%;
            top: 60%;
        }

        a {
            color: red;
            text-decoration: none;
        }

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        */ body {
            width: 90%;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        nav a:hover {
            border-style: solid;
        }

        .navbar {
            height: 60px;
            width: 100%;
            background: white;
        }

        .navbar ul {
            float: right;
            margin-right: 20px;
        }

        .navbar ul li a {
            font-size: 20px;
            font-family: 'Roboto', sans-serif;
            padding: 6px 13px;
            transition: .4s;
        }

        .logo {
            width: 150px;
            height: 55px;
        }

        .jumbotron {
            padding-top: 48px;
            padding-bottom: 48px;
            background-color: #eee;
            border-style: double;
            border-radius: 5px;
            margin-top: 110px;
            width: fit-content;
        }

        #demo {
            font-family: 'Times New Roman', Times, serif;
            overflow: hidden;
            /* Ensures the content is not revealed until the animation */
            border-right: .15em solid orange;
            /* The typwriter cursor */
            white-space: nowrap;
            /* Keeps the content on a single line */
            margin: 0 auto;
            /* Gives that scrolling effect as the typing happens */
            /* Adjust as needed */
            animation:
                typing 3s steps(40, end),
                blink-caret .75s step-end infinite;
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

        /* The typing effect */
        @keyframes typing {
            from {
                width: 0
            }

            to {
                width: 100%
            }
        }

        /* The typewriter cursor effect */
        @keyframes blink-caret {

            from,
            to {
                border-color: transparent
            }

            50% {
                border-color: black;
            }
        }
        
        
  
@import url('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

  .success-msg {
  color: #270;
  background-color: #DFF2BF;
 
}


    </style>

<body
    style="font-size: 20px; background-image: linear-gradient(41deg, rgba(107, 107, 107, 0.04) 0%, rgba(107, 107, 107, 0.04) 8%,rgba(31, 31, 31, 0.04) 8%, rgba(31, 31, 31, 0.04) 100%),linear-gradient(9deg, rgba(228, 228, 228, 0.04) 0%, rgba(228, 228, 228, 0.04) 62%,rgba(54, 54, 54, 0.04) 62%, rgba(54, 54, 54, 0.04) 100%),linear-gradient(124deg, rgba(18, 18, 18, 0.04) 0%, rgba(18, 18, 18, 0.04) 37%,rgba(233, 233, 233, 0.04) 37%, rgba(233, 233, 233, 0.04) 100%),linear-gradient(253deg, rgba(201, 201, 201, 0.04) 0%, rgba(201, 201, 201, 0.04) 55%,rgba(47, 47, 47, 0.04) 55%, rgba(47, 47, 47, 0.04) 100%),linear-gradient(270deg, rgba(172, 172, 172, 0.04) 0%, rgba(172, 172, 172, 0.04) 33%,rgba(26, 26, 26, 0.04) 33%, rgba(26, 26, 26, 0.04) 100%),linear-gradient(64deg, rgba(11, 11, 11, 0.04) 0%, rgba(11, 11, 11, 0.04) 38%,rgba(87, 87, 87, 0.04) 38%, rgba(87, 87, 87, 0.04) 100%),linear-gradient(347deg, rgba(199, 199, 199, 0.04) 0%, rgba(199, 199, 199, 0.04) 69%,rgba(4, 4, 4, 0.04) 69%, rgba(4, 4, 4, 0.04) 100%),linear-gradient(313deg, rgba(36, 36, 36, 0.04) 0%, rgba(36, 36, 36, 0.04) 20%,rgba(91, 91, 91, 0.04) 20%, rgba(91, 91, 91, 0.04) 100%),linear-gradient(90deg, rgb(10, 17, 72),rgb(35, 148, 228));">

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
            <div class="container">
                <div class="jumbotron">
                    <h1 style="text-align: center;" class="display-2" id='demo'>Course Registration successful.</h1>
                    <div class="abc" style="margin-top: 15px;">
                    <image src="https://www.pngkit.com/png/full/132-1328992_12-months-blue-check-mark-icon-png.png" width="100" height="100"></div>
                    <div class="center" style="margin-top: 75px;">

                   
    <div class="loading">
    <p><span id="timer"></span></p>
    <script type="text/javascript">
        var count = 10;
        var redirect = "index.html";
         function countDown(){
         var timer = document.getElementById("timer");
        if(count > 0){
        count--;
       timer.innerHTML ="This page will redirect in "+count+" seconds.";
        setTimeout("countDown()", 1000);
         }
        else{
         window.location.href = redirect;
        }
        }
        countDown();
    </script>
    <h4><strong>You will be logged out.</strong><h4>
     </div>
    <div class="footer">
        <p>????? 2021 Copyrights @ DSATM.  All rights reserved.</p>
    </div>
    
        
</body>

</html>

