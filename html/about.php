<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>About VF</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body {
            background: url(images/bg02.jpg) no-repeat center center fixed;
            background-size: cover;
        }

        #about {
            width: 50%;
            color: #000;
            margin: 0 auto;
            border: 1px solid #666;
            border-radius: 4px;
            box-shadow: 4px 4px 10px #000;
            padding: 20px 50px;
            background-color: rgba(255, 255, 255, .4);
        }

        #about h2 {
            margin: 40px auto 20px;
            color: #900;
        }

        p {
            margin: 10px auto 50px;
        }

        strong {
            font-size: 1.5em;
        }

        @media screen and (max-width: 800px) {
            #about {
                width: 80%;
            }
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
<div id="about">
    <h2>About VF</h2>
    <p><strong>We loVe Fashion!</strong>&nbsp;&nbsp;Fusce nibh quam, cursus elementum interdum sit amet, elementum ac
        ex. Nullam et velit ultrices, egestas nisi vel, viverra felis. Suspendisse et accumsan Aenean tempus enim vel
        tempus pulvinar.</p>
    <h2>About VF Design</h2>
    <p><strong>We have best design!</strong>&nbsp;&nbsp;Nulla ac sapien accumsan, maximus mauris at, scelerisque nulla.
        Nam vehicula, eros non ultricies viverra, orci leo ultrices leo, ut tempor odio purus non quam. Morbi cursus
        dolor eget tortor varius, sit amet bibendum lorem ornare. Phasellus condimentum luctus metus, vel dapibus
        libero. Ut nec eros sit amet lacus ultrices rutrum ullamcorper sed leo. Fusce posuere pharetra felis,
        quisvulputate nulla laoreet id. Pellentesque ut vehicula risus.</p>
    <h2>About VF Products</h2>
    <p><strong>We have best products!</strong>&nbsp;&nbsp;Mauris iaculis justo et facilisis semper. Duis vel
        sollicitudin libero. Morbi at porttitor elit. Etiam nec molestie magna. Curabitur non turpis nisl. Quisque at
        lacinia lacus, non condimentum elit.Aliquam maximus sapien sit amet ipsum facilisis, in tristique enim
        porttitor.</p>
    <h2>About VF Team</h2>
    <p><strong>We have best team!</strong>&nbsp;&nbsp;Nulla pulvinar eleifend ligula, at tincidunt tellus elementum nec.
        Nullam interdum erat eu turpis efficitur cursus. Etiam elementum, mi sit amet molestie ornare, nunc lacus
        iaculis quam, et finibus sem enim sed lectus. In faucibus elementum turpis, sed lacinia nibh. Fusce quis
        consectetur massa.</p>
</div>
<p>
    <?php
    include_once('footer.php');
    ?>
</p>

</body>
</html>
