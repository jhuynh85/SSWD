<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contact VF</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/custom.css" rel="stylesheet" type="text/css">
  <style type="text/css">
body {
		background: url(images/bg04.jpg) no-repeat;
		background-size: cover;		 
}
#contact h1 {
		text-align:left;
		color:#900;
}
</style>
</head>

<body>
<p>
  <?php
    include_once('header.php');    
?>
</p>
  <div id="contact">
    <form  method="POST" action="">
      <h1>Feel free to contact us! </h1>
      <h4 class="intro"> What do you like about our products? What products do you want in the future? Contact us and let us know! </h4>
      <p class="inputfield">
        <label for="name">Name</label>
      </p>
      <input type="text" id="name" name="name" placeholder="Your first and last name" style="color: #fff;" onfocus="if (this.value == '90') {this.value=''; this.style.color='#000';}" required tabindex="3" />
      <p class="inputfield">
        <label for="email">Email</label>
      </p>
      <input type="text" id="email" name="email" placeholder="Your email" required tabindex="4" />
      <p class="inputfield">
        <label for="subject">Subject</label>
      </p>
      <input type="text" id="name" name="name" placeholder="What's this about?" style="color: #fff;" onfocus="if (this.value == '90') {this.value=''; this.style.color='#000';}" required tabindex="1" />
      <p class="inputfield">
        <label for="message">Message</label>
      </p>
      <textarea name="message" id="message" placeholder="Your message" required tabindex="2"></textarea>
      <br>
      <input name="submit" type="submit" id="submit" tabindex="5" value="Submit" />
    </form>
  </div>
  
  <p>
<?php
    include_once('footer.php');
?>
</p>
   
</body>
</html>
