<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Responsive Shopping Cart</title>
    <link rel="stylesheet" href="css/cart.css">
    <style type="text/css">
        body {
            margin-top: 60px;
        }

        .navbar-brand {
            margin-left: 10px;
        }

        h1 {
            margin: 50px;
        }
    </style>
</head>

<body>
<?php
session_start();
include_once('header.php');

// Populate test shopping cart
$_SESSION["cart"] = array(
    array(
        "productName" => "T-shirt_01",
        "productID" => "1",
        "quantity" => "2",
        "listPrice" => "49.99",
        "description" => "Test description 1",
        "imagePath" => "images/JPEG/T-shirt_01.jpg"
    ),
    array(
        "productName" => "T-shirt_02",
        "productID" => "2",
        "quantity" => "3",
        "listPrice" => "39.99",
        "description" => "Test description 2",
        "imagePath" => "images/JPEG/T-shirt_02.jpg"
    )
);

// Get cart session variable
if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
} else {
    $cart = [];
}
?>

<div><a class="navbar-brand" href="products.php"><img src="images/VF2.png" alt="VF logo" width="40"></a></div>
<div class="shopping-cart">
    <h1>Shopping Cart</h1>
    <div class="column-labels">
        <label class="product-image">Image</label>
        <label class="product-details">Product</label>
        <label class="product-price">Price</label>
        <label class="product-quantity">Quantity</label>
        <label class="product-removal">Remove</label>
        <label class="product-line-price">Total</label>
    </div>
    <div id="products">
        <div class="product">
            <div class="product-image"><img src="images/JPEG/T-shirt_01.jpg"></div>
            <div class="product-details">
                <div class="product-title">T-shirt 1</div>
                <p class="product-description">Curabitur varius leo et purus fringilla, a luctus nulla fermentum. Donec
                    nec
                    neque rutrum, ultricies nisl vel, sagittis nibh.</p>
            </div>
            <div class="product-price">59.99</div>
            <div class="product-quantity">
                <input type="number" value="2" min="1">
            </div>
            <div class="product-removal">
                <button class="remove-product">Remove</button>
            </div>
            <div class="product-line-price">119.98</div>
        </div>
        <div class="product">
            <div class="product-image"><img src="images/JPEG/T-shirt_03.jpg"></div>
            <div class="product-details">
                <div class="product-title">T-shirt 3</div>
                <p class="product-description">Nullam maximus fermentum ultricies. Nulla at cursus tellus. Morbi
                    tincidunt
                    tellus sed imperdiet pellentesque.</p>
            </div>
            <div class="product-price">44.99</div>
            <div class="product-quantity">
                <input type="number" value="1" min="1">
            </div>
            <div class="product-removal">
                <button class="remove-product">Remove</button>
            </div>
            <div class="product-line-price">44.99</div>
        </div>
    </div>
    <div class="totals">
        <div class="totals-item">
            <label>Subtotal</label>
            <div class="totals-value" id="cart-subtotal">164.97</div>
        </div>
        <div class="totals-item">
            <label>Tax (8%)</label>
            <div class="totals-value" id="cart-tax">13.20</div>
        </div>
        <div class="totals-item">
            <label>Shipping</label>
            <div class="totals-value" id="cart-shipping">15.00</div>
        </div>
        <div class="totals-item totals-item-total">
            <label>Grand Total</label>
            <div class="totals-value" id="cart-total">193.17</div>
        </div>
    </div>
    <button class="checkout">
        <a href="checkout.php">Checkout</a>
    </button>
</div>
<p>
    <?php
    include_once('footer.php');
    ?>
</p>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script>
    $(document).ready(function () {
        // Load cart contents
        var cart = JSON.parse('<?php echo json_encode($cart) ?>');

        // Loop through cart and print out each item
        for (var i in cart) {
            var amt = parseFloat(cart[i].listPrice) * parseInt(cart[i].quantity);
            var elem = $("<div>").addClass("product");
            var image = $("<div>").addClass("product-image")
                .append($("<img>").attr("src", cart[i].imagePath));
            var details = $("<div>").addClass("product-details")
                .append($("<div>").addClass("product-title").text(cart[i].productName))
                .append($("<p>").addClass("product-description").text(cart[i].description));
            var price = $("<div>").addClass("product-price").text(cart[i].listPrice);
            var quantity = $("<div>").addClass("product-quantity")
                .append($("<input>").attr({
                    type: "number",
                    value: cart[i].quantity,
                    min: "1"
                }));
            var removeBtn = $("<div>").addClass("product-removal")
                .append($("<button>").addClass("remove-product").text("Remove"));
            var linePrice = $("<div>").addClass("product-line-price").text(amt);

            elem.append(image, details, price, quantity, removeBtn, linePrice);
            $("#products").append(elem);
        }

        console.log(cart);

        /* Set rates + misc */
        var taxRate = 0.08;
        var shippingRate = 15.00;
        var fadeTime = 300;

        /* Assign actions */
        $('#products').on('change', '.product-quantity input', function () {
            updateQuantity(this);
        });

// $('.product-quantity input').change( function() {
//   updateQuantity(this);
// });

        $('#products').on('click', '.product-removal button', function () {
            removeItem(this);
        });

// $('.product-removal button').click( function() {
//   removeItem(this);
// });

        /* Recalculate cart */
        function recalculateCart() {
            var subtotal = 0;

            /* Sum up row totals */
            $('.product').each(function () {
                subtotal += parseFloat($(this).children('.product-line-price').text());
            });

            /* Calculate totals */
            var tax = subtotal * taxRate;
            var shipping = (subtotal > 0 ? shippingRate : 0);
            var total = subtotal + tax + shipping;

            /* Update totals display */
            $('.totals-value').fadeOut(fadeTime, function () {
                $('#cart-subtotal').html(subtotal.toFixed(2));
                $('#cart-tax').html(tax.toFixed(2));
                $('#cart-shipping').html(shipping.toFixed(2));
                $('#cart-total').html(total.toFixed(2));
                if (total == 0) {
                    $('.checkout').fadeOut(fadeTime);
                } else {
                    $('.checkout').fadeIn(fadeTime);
                }
                $('.totals-value').fadeIn(fadeTime);
            });
        }

        /* Update quantity */
        function updateQuantity(quantityInput) {
            /* Calculate line price */
            var productRow = $(quantityInput).parent().parent();
            var price = parseFloat(productRow.children('.product-price').text());
            var quantity = $(quantityInput).val();
            var linePrice = price * quantity;

            /* Update line price display and recalc cart totals */
            productRow.children('.product-line-price').each(function () {
                $(this).fadeOut(fadeTime, function () {
                    $(this).text(linePrice.toFixed(2));
                    recalculateCart();
                    $(this).fadeIn(fadeTime);
                });
            });
        }

        /* Remove item from cart */
        function removeItem(removeButton) {
            /* Remove row from DOM and recalc cart total */
            var productRow = $(removeButton).parent().parent();
            productRow.slideUp(fadeTime, function () {
                productRow.remove();
                recalculateCart();
            });
        }
    });
</script>

</body>
</html>
