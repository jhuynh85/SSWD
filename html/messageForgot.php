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
    <p>Enter the email address for your account & we'll email you a link to reset your password.</p>
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

                    var result = JSON.parse(data);
                    // Print status code message
                    if (result.id === 1 || result.id === 2 || result.id === 3) {
                        alert(result.id + ": "+result.message);
                    }
                    // Other error
                    else {
                        alert(result.id + ": "+result.message);
                    }
                });
        });
    });
</script>
</body>
</html>
