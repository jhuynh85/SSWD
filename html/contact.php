<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contact VF</title>
  <style type="text/css">
body {
    margin: 0;
    padding: 0;
}
#topImg {
    background: url(images/bg03.jpg) no-repeat center center;
    background-size: cover;
    height: 350px;
    margin: -100px auto 50px;
}
#contact {
    width: 90%;
    margin: 0 auto 100px;
    text-align: center;
    color: #000;
}
#contact h1 {
    color: #900;
}
#contact h4:nth-of-type(2) {
    margin-bottom: 100px;
}
#datatable {
    margin: 40px auto;
    border: 1px solid #666;
    background-color: #FFC;
    text-align: center;
}
#datatable th {
    padding: 5px 20px;
}
</style>
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
    <h1>Feel free to contact us!</h1>
    <h4>Phone: 123-456-7890</h4>
    <h4>Email: <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">customerservice@vf.com</a></h4>
    <div id="container" style="width:80%;min-width:310px;height:400px;margin:0 auto"></div>
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
          <th>First Quater</th>
          <td>230</td>
          <td>309</td>
          <td>264</td>
        </tr>
        <tr>
          <th>Second Quater</th>
          <td>367</td>
          <td>411</td>
          <td>298</td>
        </tr>
        <tr>
          <th>Third Quater</th>
          <td>255</td>
          <td>347</td>
          <td>312</td>
        </tr>
        <tr>
          <th>Fourth Quater</th>
          <td>719</td>
          <td>593</td>
          <td>921</td>
        </tr>
      </tbody>
    </table>
  </div>
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
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
		</script>
  <p>
    <?php
        include_once('footer.php');
        ?>
</p>

</body>
</html>
