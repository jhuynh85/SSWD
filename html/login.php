<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body {
            margin-top: 100px;
        }

        .navbar-brand {
            margin-top: -80px;
        }

        #loader {
            position: absolute;
            bottom: 10%;
            left: 40%;
            background-image: url('images/ellipsis.svg');
            width: 198px;
            height: 198px;
        }
    </style>
</head>

<body>
<div><a class="navbar-brand animated shake" href="products.php"><img src="images/VF2.png" alt="VF logo" width="40"></a>
</div>
<div id="login">
    <form action="#" method="POST">
        <h2>Please Login</h2>
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username"
               required>
        <br>
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password"
               required>
        <br>
        <p>
            <button type="button" class="btn btn-primary" id="login_button">Login</button>
            <a href="messageForgot.php" target="_blank">Forgot Password?</a></p>
    </form>
    <br>
    <div> New To VF.com? <a href="register.php" class="btn btn-primary" target="_blank">Register</a></div>
</div>

<div id="loader"></div>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>


<?php
// Get lastPage session variable
session_start();
if (isset($_SESSION["lastPage"])) {
    $uri = $_SESSION["lastPage"];
} else {
    $uri = "index.php";
}
?>

<script type="text/javascript">
    $(document).ready(function () {
        // Hide loader image
        $("#loader").hide();

        $("#login_button").click(function () {
            // Show loading image
            $("#loader").show();

            // Validate credentials
            var v_username = $("#username").val();
            var v_pass = $("#password").val();

            $.post("auth.php", {username: v_username, pass: v_pass})
                .done(function (data) {
                    // Hide loader again after processing done
                    $("#loader").hide();
                    // User found, password matches
                    if (data == 1) {
                        console.log(data + ": User found. Password match!");
                        // Load most recent page
                        window.location.href = "<?php echo $uri; ?>";
                    }
                    // User found, password does not match
                    else if (data == 2) {
                        alert(data + ": Wrong password!");
                    }
                    // User not found
                    else if (data == 3) {
                        alert(data + ": User not found!");
                    }
                    // Other error
                    else {
                        alert("Error: " + data);
                    }

                });
        });
    });
</script>

<p>
    <?php
    include_once('footer.php');
    ?>
</p>
</body>
</html>
