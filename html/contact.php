<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact VF</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }

        #topImg {
            background: url(images/bg03.jpg) no-repeat center center;
            background-size: cover;
            height: 350px;
            margin: -100px auto 50px;
        }

        #contact {
            width: 60%;
            margin: 0 auto;
            text-align: center;
        }

        #contact h1 {
            color: #900;
        }
    </style>
</head>

<body>
<p>
    <?php
    include_once('header.php');
    include_once('setLogInState.php');
    ?>
</p>
<div id="topImg"></div>
<div id="contact">
    <h1>Feel free to contact us!</h1>
    <h4>Phone: 123-456-7890</h4>
    <h4>Email: contact@vf.com</h4>
    <h4>Address: 1234 University Ave, San Diego, CA 92123</h4>
    <p>
        <?php
        include_once('footer.php');
        ?>
    </p>
</div>
</body>
</html>
