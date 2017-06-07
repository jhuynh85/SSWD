<?php
require 'stdlib.php';

try {
    $db = new DB(); //CREATE INSTANCE OF DB CLASS

    $productID = filter_input(INPUT_GET, 'productID', FILTER_VALIDATE_INT);

    //Get data from DB
    $query = "SELECT * FROM products p
        WHERE p.productID=:productID";
    $arrayParams = array(':productID' => $productID);
    $results = $db->PDOquery($query, $arrayParams, true);
    $products = $results;
//       echo "<pre>";  print_r($products);echo "</pre>";
} catch (Exception $error) {
    echo $error->getMessage();
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Item Details</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="css/custom.css" rel="stylesheet" type="text/css">-->
    <link href="css/item.css" rel="stylesheet" type="text/css">
    <style>
        body {
            background-color: #eee;
        }

        h2 {
            padding: 10%;
        }

        #item {
            margin-top: 5%;
            padding-top: 20px;
        }

        #item h3 {
            color: #666;
        }

        #item img {
            max-width: 100%;
            min-width: 200px;
            height: auto;
        }
    </style>
</head>

<body>
<p>
    <?php
    include_once('header.php');
    ?>
</p>
<div id="item">
    <div class="row">
        <?php foreach ($products as $product) :
            $id = $product['productID'];
            $name = $product['productName'];
            $imagePath = $product['imagePath'];
            $listPrice = $product['listPrice'];
            $description = $product['description'];
            $catId = $product['categoryID'];
//       echo "<pre>";  print_r($product);echo "</pre>";
        try {

    //Get data from DB
    $query = "SELECT color FROM colorAttributes
        WHERE categoryID=:categoryID";
    $arrayParams = array(':categoryID' => $catId);
    $results = $db->PDOquery($query, $arrayParams, true);
//      echo "<pre>";  print_r($results); echo "</pre>";
            foreach($results as $row):
                $colors[] = $row['color'];
            endforeach;
//      echo "<pre>";  print_r($colors); echo "</pre>";
} catch (Exception $error) {
    echo $error->getMessage();
}
        
        try {

    //Get data from DB
    $query = "SELECT size FROM sizeAttributes
        WHERE categoryID=:categoryID";
    $arrayParams = array(':categoryID' => $catId);
    $results = $db->PDOquery($query, $arrayParams, true);
            foreach($results as $row):
                $sizes[] = $row['size'];
            endforeach;
} catch (Exception $error) {
    echo $error->getMessage();
}
?>
<?php 
/*    echo "<pre>";print_r($sizes);echo "</pre>";
    foreach ($sizes as $size) :      
    print_r($size); 
    endforeach;*/
?>
            <div class="col-xs-4 item-photo"><img style="min-width:80%;" src="<?php echo $imagePath; ?>" alt=""></div>
            <div class="col-xs-5" style="border:0px solid #eee">
                <h3><?php echo $name; ?></h3>
                <h5 style="color:#337ab7">Availability: in stock</h5>
                <div class="ratings">
                    <p><span class="glyphicon glyphicon-heart"></span><span
                                class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart"></span><span
                                class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart"></span>
                        &nbsp;115 reviews</p>
                </div>
                <h6 class="title-price">
                    <small>Price</small>
                </h6>
                <h3 style="margin-top:0px;"><?php echo('$' . $listPrice); ?></h3>
                
                <form action="cart.php" method="post">
                
                <?php   if (!empty($colors)) { ?>  
                <div class="section">
                    <h6 class="title-attr">
                        <small>Color</small>
                    </h6>

                     <div>
                     	<?php $checked="checked"; foreach ($colors as $color) : ?>
                       		<div class="color" style=color:<?php echo ($color=='black') ? 'white' : 'black'; ?>;>
                            	<input type="radio" id="<?php echo $color; ?>" name="color" value="<?php echo $color; ?>" <?php echo $checked; ?>>
                            	<label for="<?php echo $color; ?>" title="<?php echo ucfirst($color); ?>" style=background:<?php echo $color; ?>;><i class="glyphicon glyphicon-ok"></i></label>
                        	</div>
                        <?php $checked=""; endforeach; ?>
                    </div>

                </div>              
                <?php        }; ?>

               <?php   if (!empty($sizes)) { ?>             
                <div class="section">
                    <h6 class="title-attr">
                        <small>Size</small>
                    </h6>
                    
                    <div class="size">
                    	<?php $checked="checked"; foreach ($sizes as $size) : ?>
                    		<input type="radio" name="size" id="<?php echo $size; ?>" value="<?php echo $size; ?>" <?php echo $checked; ?>>
                    		<label for="<?php echo $size; ?>" title="<?php echo ucfirst($size); ?>"><?php echo ucfirst($size); ?></label>
                    	<?php $checked=""; endforeach; ?>
                    </div>
                </div>
                <?php        }; ?>

                <div class="section">
                    <h6 class="title-attr">
                        <small>Quantity</small>
                    </h6>
                    <input type="number" name="quantity" value="1" min="1" max="99" style="width: 3em"/>
               </div>
                <div class="section">
    				<label for="mySubmit" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-shopping-cart"></i> Add to Cart</label>
    				<input id="mySubmit" type="submit" value="Go" class="hidden" />

                    <h6><a href="#"><span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;"></span> Write a review</a></h6>
                </div>
                <input type="hidden" name="productID" value="<?php echo $id; ?>">
                <input type="hidden" name="productName" value="<?php echo $name; ?>">
                <input type="hidden" name="imagePath" value="<?php echo $imagePath; ?>">
                <input type="hidden" name="listPrice" value="<?php echo $listPrice; ?>">
			</form>
                
            </div>
            <div class="col-xs-10">
                <ul class="menu-items" style="padding: 15px 40px;">
                    <li class="active">Description</li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
                <div style="width:100%;border-top:1px solid silver;margin-left:40px;">
                    <p style="padding:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mauris
                        sem, finibus et quam vel, placerat condimentum tellus. Nunc vehicula dolor metus, vitae
                        condimentum justo iaculis ac. Curabitur porta enim sed arcu congue scelerisque. Nam eget eros
                        ullamcorper, eleifend est in, posuere lectus.</p>
                    <ul style="padding: 15px 40px;">
                        <li>Orci varius natoque penatibus et magnisurient</li>
                        <li>Mauris non diam non lacus ornare sodales</li>
                        <li>Class aptent taciti sociosqu ad litora</li>
                        <li>Aenean id varius ex</li>
                        <li>Fusce ut bibendum enim</li>
                        <li>Vestibulum magna ipsum et nisl</li>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
</div>
<p>
    <?php
    include_once('footer.php');
    ?>
</p>
<script src="js/item.js"></script>
</body>
</html>
