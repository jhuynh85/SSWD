<?php
if($_POST){
	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$file = fopen("comment.html","a");
	fwrite($file, "<b>$name</b>:<br><i>&nbsp;&nbsp;$comment</i><br><br>");
	fclose($file);
}
?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact VF</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?cp0z2c">
  <link href="css/contact.css" type="text/css" rel="stylesheet">
  <script src="code4charts/highcharts.js"></script>
  <script src="code4charts/modules/data.js"></script>
  <script src="code4charts/modules/exporting.js"></script>
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
    <h1>Contact VF</h1>
    <p> <span class="socicon    
            socicon-twitter"></span> <span class="socicon socicon-facebook"></span> <span class="socicon socicon-instagram"></span> <span class="socicon socicon-googleplus"></span> </p>
    <div id="info">
      <h4><span class="material-icons">&#xE0CF;</span>Phone: 800-123-4567</h4>
      <h4><span class="material-icons">&#xE0D0;</span>Email: <a href="mailto:customerservice@vf.com" target="_top">customerservice@vf.com</a></h4>
      <h4><span class="material-icons">&#xE7F1;</span>Address: 8355 Aero Drive<br>
        <span class="city">San Diego, CA 92123</span> </h4>
      <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13417.37570012929!2d-116.9793553!3d32.7831389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dbffdc4c211c7f%3A0x13aed8e9e22d0b3b!2s8355+Aero+Dr%2C+San+Diego%2C+CA+92123!5e0!3m2!1sen!2sus!4v1496621788021" width="600" height="360" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div id="graph">
    <div id="container"></div>
    <div id="table">
      <table id="datatable">
        <thead>
          <tr>
            <th></th>
            <th>Category 1</th>
            <th>Category 2</th>
            <th>Category 3</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1st Quater</th>
            <td>230</td>
            <td>309</td>
            <td>264</td>
          </tr>
          <tr>
            <th>2nd Quater</th>
            <td>567</td>
            <td>611</td>
            <td>498</td>
          </tr>
          <tr>
            <th>3rd Quater</th>
            <td>255</td>
            <td>347</td>
            <td>312</td>
          </tr>
          <tr>
            <th>4th Quater</th>
            <td>719</td>
            <td>593</td>
            <td>921</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div id="comment" class="clearfix">
    <h2>Please Comment:</h2>
    <form action="" method="POST">
      <div>
        <input type="text" name="name" placeholder="Please enter your name" required>
      </div>
      <div>
        <textarea cols="66" rows="6" name="comment" placeholder="Please leave your comment here..."></textarea>
        <br>
        <input type="submit" value="POST">
      </div>
    </form>
    <div class="comtext">
    <h2>All Comments:</h2>
    <?php include "comment.html"; ?>
  </div>
  </div>
  <p>
    <?php
    include_once('footer.php');
    ?>
</p>
<script type="text/javascript">
        Highcharts.chart('container', {
            data: {
                table: 'datatable'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: '2016 Quaterly Report: <br> Number of Customers Shopping on VF.com'
            },
            subtitle: {
                text: 'Source: VF.com'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'Number of Customers'
                }
            },
            tooltip: {
                formatter: function() {
                    return '<b>' + this.series.name + '</b><br/>' +
                        this.point.y + ' ' + this.point.name.toLowerCase();
                }
            }
        });
    </script>
</body>
</html>
