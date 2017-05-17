<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Information</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <style type="text/css">
        body {
            margin: 0;
        }

        #info {
            width: 50%;
            margin: 0 auto;
        }

        form h2 {
            margin: 40px auto;
            color: #900;
        }

        input[type="text"] {
            min-width: 100%;
            padding: 0 40px 10px;
        }

        input.form-control {
            padding: 0 20px;
        }
    </style>
</head>

<body>
<p>
    <?php
    include_once('header.php');
    ?>
</p>
<div id="info">
    <form class="form-horizontal" method="post" action="#">

        <div class="row">
            <h2>Do you need to change your information?</h2>
        </div>
        <!--SHIPPING METHOD-->
        <div class="panel panel-info">
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-md-12"><strong>First Name:</strong></div>
                    <div>
                        <input type="text" name="first_name" class="form-control" value=""/>
                    </div>
                    <div class="col-md-12"><strong>Last Name:</strong></div>
                    <div>
                        <input type="text" name="last_name" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12"><strong>Address:</strong></div>
                    <div class="col-md-12">
                        <input type="text" name="address" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12"><strong>City:</strong></div>
                    <div class="col-md-12">
                        <input type="text" name="city" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12"><strong>State:</strong></div>
                    <div class="col-md-12">
                        <input type="text" name="state" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                    <div class="col-md-12">
                        <input type="text" name="zip_code" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12"><strong>Phone Number:</strong></div>
                    <div class="col-md-12">
                        <input type="text" name="phone_number" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12"><strong>Email Address:</strong></div>
                    <div class="col-md-12">
                        <input type="text" name="email_address" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12"><strong>New Password:</strong></div>
                    <div class="col-md-12">
                        <input type="text" name="password" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12"><strong>Old Password:</strong></div>
                    <div class="col-md-12">
                        <input type="text" name="password" class="form-control" value="" required/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <button type="submit" class="btn btn-danger btn-lg">Submit</button>
                </div>
            </div>
        </div>

    </form>
</div>
<p>
    <?php
    include_once('footer.php');
    ?>
</p>
</body>
</html>
