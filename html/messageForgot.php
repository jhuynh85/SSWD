<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Message Forgot Password</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <style type="text/css">
        body {
            margin-top: 100px;
        }

        h1 {
            text-align: left;
        }

        .navbar-brand {
            margin-top: -80px;
        }
    </style>
</head>

<body>
<div><a class="navbar-brand animated shake" href="products.php"><img src="images/VF2.png" alt="VF logo" width="40"></a>
</div>
<div class="message">
    <h1>Forgot your password?</h1>
    <p>Enter the email address for your account & we'll email you a new password.</p>
    <form id="emailForm">
        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter your email address" required/>
            <p>
                <button id="submitButton" type="button" class="btn btn-danger">Submit</button>
            </p>
        </div>
    </form>
</div>

<script type="text/javascript">

    $(document).ready(function () {
        $("#submitButton").on("click", function () {
            var v_email = $("#email").val();

            $.post("emailReset.php", {email: v_email})
                .done(function (data) {

                    // Print status code message
                    if (data == 1 ){
                        alert("1: Password has been reset. Please check your email!");
                    }
                    else if (data == 2 ){
                        alert("2: There was a problem sending the email, please try again!");
                    }
                    else if (data == 3 ){
                        alert("3: Email not found!");
                    }
                    // Other error
                    else {
                        alert("4: Error - "+data);
                    }
                });
        });
    });
</script>
</body>
</html>
