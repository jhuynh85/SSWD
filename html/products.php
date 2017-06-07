<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VF Products</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<p>
    <?php
    include_once('header.php');
    include_once('setLogInState.php');

    require 'stdlib.php';
    try {
        $db = new DB(); //CREATE INSTANCE OF DB CLASS

        //Get data from DB
        $query = "SELECT * FROM categories";
        $arrayParams = array();
        $results = $db->PDOquery($query, $arrayParams, true);
        $categories = $results;

    } catch (Exception $error) {
        echo $error->getMessage();
    }

    try {
        $db = new DB(); //CREATE INSTANCE OF DB CLASS

        //Get data from DB        
        $query = "SELECT * FROM featuredProducts f
        join products p
        WHERE f.productID = p.productID";
        $arrayParams = array();
        $results = $db->PDOquery($query, $arrayParams, true);
        $products = $results;

    } catch (Exception $error) {
        echo $error->getMessage();
    }
    ?>
</p>
<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h1 style="color:#900;">VF</h1>
            <div class="list-group">
                <?php foreach ($categories as $category) : $name = $category['categoryName'];
                    $id = $category['categoryID'];
                    $url = 'catalog.php?categoryID=' . $id;

                    ?>
                    <a href="<?php echo $url ?>"
                       class="list-group-item"><?php echo('Category ' . $id . ': ' . $name); ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row carousel-holder">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active"><img class="slide-image" src="images/tshirt.jpg" alt=""></div>
                            <div class="item"><img class="slide-image" src="images/hat.jpg" alt=""></div>
                            <div class="item"><img class="slide-image" src="images/jeans.jpg" alt=""></div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span
                                    class="glyphicon glyphicon-chevron-left"></span> </a> <a
                                class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span
                                    class="glyphicon glyphicon-chevron-right"></span> </a></div>
                </div>
            </div>

            <h2 style="color:#900;">Featured Products</h2>

            <div class="row">
                <?php foreach ($products as $product) :
                    $id = $product['productID'];
                    $name = $product['productName'];
                    $imagePath = $product['imagePath'];
                    $listPrice = $product['listPrice'];
                    $description = $product['description'];
                    $url = 'item.php?productID=' . $id;
                    ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail"><img src=<?php echo $imagePath; ?> alt="" height="400" width="400">
                            <div class="caption">
                                <h4 class="pull-right"><?php echo('$' . $listPrice); ?></h4>
                                <h4><a href="<?php echo $url ?>"><?php echo $name; ?></a></h4>
                                <!--                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                <p><?php echo $description; ?></p></div>
                            <div class="ratings">
                                <p class="pull-right">115 reviews</p>
                                <p><span class="glyphicon glyphicon-heart"></span> <span
                                            class="glyphicon glyphicon-heart"></span> <span
                                            class="glyphicon glyphicon-heart"></span> <span
                                            class="glyphicon glyphicon-heart"></span> <span
                                            class="glyphicon glyphicon-heart"></span></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <p>
            <?php
            include_once('footer.php');
            ?>
        </p>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/search.js"></script>
</body>
</html>
