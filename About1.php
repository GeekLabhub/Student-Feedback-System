<!--
    Hielo by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Faculty Feedback System</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/main.css" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#loginDropdown').click(function() {
                    $('#loginOptions').toggle();
                });
            });
        </script>
       <style>
            .center-content {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 70vh;
                flex-direction: column;
            }
            .contact-button {
                padding: 20px 40px;
                background-color: #4CAF50;
                color: white;
                font-size: 18px;
                border: none;
                cursor: pointer;
                border-radius: 5px;
            }
            .contact-button:hover {
                background-color: white;
            }
            .contact-details {
                margin-top: 20px;
                color: white; /* Set the contact details text color to white */
            }
            .contact-details p {
                margin: 5px 0;
            }
            .social-icons {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 10px; /* Adjust the margin as per your preference */
            }
            .social-icons a {
                color: #000000; /* Set the other text color to black */
                margin: 0 5px; /* Adjust the margin as per your preference */
                font-size: 24px;
            }
        </style>    



</head>

<body>

<header id="header" class="alt">
    <div class="logo"><a href="index.php">Welcome to <span> Online Feedback System</span></a></div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li style="color:#FFFFFF">
            <a style="color:#FFFFFF" href="index.php"><i class="fa fa-index fa-fw"></i>Home</a>
        </li>
        <li style="color:#FFFFFF">
            <a style="color:#FFFFFF" href="About1.php"><i class="fa fa-index fa-fw"></i>About</a>
        </li>
        <li style="color:#FFFFFF">
            <a style="color:#FFFFFF" href="Registration1.php"><i class="fa fa-index fa-fw"></i>Registration</a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #FFFFFF; font-weight: bold;" id="loginDropdown"><i class="fa fa-sign-in fa-fw"></i>Login
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" id="loginOptions" style="display: none;">
                <li><a href="Login1.php" style="color: #FFFFFF; font-weight: bold;">Student</a></li>
                <li><a href="Faculty_login1.php" style="color: #FFFFFF; font-weight: bold;">Faculty</a></li>
                <li><a href="admin_login.php" style="color: #FFFFFF; font-weight: bold;">Admin</a></li>
            </ul>
        </li>
    </ul>
</nav>

<!-- One -->
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p>About US</p>
            <h2>Online Faculty-Feedback System</h2>
        </header>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
    <div class="inner">
        <div class="box">
            <div class="content" style="color: black; font-size: 18px;">
                <p> Here we have developed a faculty feedback system, which is used for colleges to rate the faculty based on their performance.</p>
                <p>
                    The 'Feedback System' is all about institutional practices and processes that take into consideration the students' concerns regarding the level of knowledge they receive. The Faculty Feedback System is a management information system for educational institutions to manage student data. An Online Student Feedback System is an automatic feedback generation system that provides proper feedback to teachers based on categories like always, poor, usually, very often, and sometimes.
                </p>
                <div class="center-content">
                
                    <h3 style="color: black; font-weight: bold;">Contact Details</h3>
                        <!-- <p>
                            Solapur aharashtra<br>Thoothukudi(Dt), TamilNadu-628702<br>
                        </p>
                        <p><i class="fa fa-phone"></i>
                            <abbr title="Phone">Phone</abbr>: 8940379384</p> -->
                        <p><i class="fa fa-envelope-o"></i>
                            <abbr title="Email">Email</abbr>: <a href="mailto:jjvetri2@gmail.com">satputepuja2015@gmail.com</a>
                        </p>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/puja._986/"><i class="fa fa-instagram fa-2x"></i></a>
                            <a href="https://www.linkedin.com/in/pooja-satpute-045bb9266/"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            <a href="https://www.facebook.com/satpute.puja.9"><i class="fa fa-facebook-square fa-2x"></i></a>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrollex.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/util.js"></script>
<script src="js/main.js"></script>

</body>
</html>
