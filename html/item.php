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
                <?php } else { ?>
                    <input type="hidden" name="color" value=null>
               <?php  } ; ?>

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
                <?php } else { ?>
                    <input type="hidden" name="size" value=null>
               <?php  } ; ?>
               
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
              <div class="menu-items">
                <ul>
                <li><a href="#part1">Description</a></li>
                <li><a href="#part2">Shipping</a></li>
                <li><a href="#part3">Returns</a></li>
                <li><a href="#part4">Specials</a></li>
                </ul>
            </div>
              <hr>
              <div id="part1" class="textpart">
                <h4>Description:</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mauris sem, finibus et quam vel, placerat condimentum tellus. Nunc vehicula dolor metus, vitae condimentum justo iaculis ac. Curabitur porta enim sed arcu congue scelerisque.
                  Nam eget eros ullamcorper, eleifend est in, posuere lectus.</p>
                <ul>
                        <li>Orci varius natoque penatibus et magnisurient</li>
                        <li>Mauris non diam non lacus ornare sodales</li>
                        <li>Class aptent taciti sociosqu ad litora</li>
                  <li>Aenean id varius exy</li>
                        <li>Fusce ut bibendum enim</li>
                        <li>Vestibulum magna ipsum et nisl</li>
                  <li>Suspendisse tristique placerat</li>
                  <li>Donec posuere eros id leo</li>
                  <li>Cras sed libero et nibh</li>
                    </ul>
                </div>
              <div id="part2" class="textpart">
                <h4>Shipping:</h4>
                <p>Etiam aliquam, lectus ac sollicitudin varius, metus magna rhoncus turpis, ut fermentum nisl sem sit amet nisl. Fusce pharetra leo ac odio interdum efficitur. Pellentesque volutpat, ipsum sit amet ornare mollis, enim libero faucibus lectus,
                  malesuada fringilla purus massa et enim. Nam id nisi arcu. Ut feugiat vestibulum venenatis. Cras sed libero et nibh venenatis maximus.</p>
                <p>Vivamus vel scelerisque risus, ut viverra erat. Etiam ac accumsan sapien. Vestibulum nec scelerisque lectus, dapibus scelerisque tortor. Suspendisse tristique placerat dui sit amet volutpat.</p>
                <p>Duis non nulla hendrerit, viverra urna vitae, tincidunt urna. Vestibulum id est purus. Donec posuere eros id leo vehicula eleifend. In hac habitasse platea dictumst. Pellentesque sed risus quam. Aenean venenatis lectus non libero dictum
                  dictum. Donec nunc mi, cursus at neque id, venenatis pellentesque felis.</p>
              </div>
              <div id="part3" class="textpart">
                <h4>Returns:</h4>
                <p>Phasellus mollis justo arcu, sed aliquam mauris dignissim id. Nunc id gravida elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec non vestibulum risus, ornare facilisis diam. Pellentesque
                  risus purus, pharetra viverra ante a, aliquam finibus magna. Vivamus vitae tortor sit amet lacus imperdiet blandit ut eget ante. Maecenas metus orci, molestie quis risus eu, facilisis rutrum tellus. Etiam rhoncus commodo massa vitae pellentesque.
                  Quisque gravida convallis vestibulum. Morbi placerat dolor eu nisi placerat congue. Maecenas auctor elementum urna non ultricies. Sed sit amet erat efficitur leo dapibus faucibus nec sed ligula. Pellentesque tempor aliquet nibh eu molestie.</p>
                <p>Nunc scelerisque diam sed interdum volutpat. Vestibulum gravida, velit sed tincidunt rutrum, ligula neque tincidunt odio, eu pellentesque neque metus at metus. Aliquam non mattis nibh, nec aliquam eros. Vestibulum pharetra odio ut tellus
                  rhoncus consectetur. Quisque efficitur facilisis consectetur. Nullam finibus eros eget nibh varius, vitae volutpat augue volutpat.</p>
              </div>
              <div id="part4" class="textpart">
                <h4>Specials:</h4>
                <p>Pellentesque vulputate massa vel est molestie luctus. In finibus, turpis eu iaculis malesuada, diam massa molestie lectus, ac congue purus neque a massa. Aenean nisi diam, eleifend sed nisl in, rhoncus dapibus velit. Fusce non augue scelerisque libero ultricies commodo. Suspendisse et magna in diam mollis accumsan. Nulla lorem lectus, ultricies a enim sit amet, gravida gravida dui. Donec in velit ac neque maximus faucibus. Nunc condimentum ante sit amet augue pellentesque, vel suscipit orci tristique. Pellentesque pellentesque sapien sollicitudin ultricies vehicula.                Suspendisse convallis vulputate ipsum, in lobortis nisi imperdiet a. Suspendisse potenti. Aliquam aliquam turpis sit amet massa volutpat fringilla. Nunc suscipit felis orci, ut tincidunt quam tristique sed. Morbi imperdiet iaculis gravida. Proin posuere purus nisl, quis varius libero pulvinar vitae. Donec elementum mauris vitae vehicula lacinia. Praesent vitae sapien erat.</p>
              </div>

            </div>
        <?php endforeach; ?>

    </div>
</div>
</div>
<div class="top"><a href="#top">&#9650;Top</a></div>
<p>
    <?php
    include_once('footer.php');
    ?>
</p>
<script src="js/item.js"></script>
</body>
</html>
