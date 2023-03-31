<?php include('./config/db.php') ?>

<?php

$query = 'SELECT *  FROM clients';    
$results = mysqli_query($conn, $query);



?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0037)http://www.milliondollarhomepage.com/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link type="text/css" rel="stylesheet" href="./assets/banner-styles.css">

<title>Γίνε Vοσκός oriuepa </title>

<meta name="ROBOTS" content="ALL">
<link rel="stylesheet" type="text/css" href="./assets/style.css">


</head><body data-feedly-mini="yes">

<div id="d" style="position: absolute; z-index: 99; left: 78px; top: 305px; border: 1px solid rgb(255, 0, 0); background: rgb(255, 255, 255); display: none;">
<span id="xcoord">Your next two clicks could help feed someone</span><span id="ycoord"></span>
</div>

<center>

<table style="position:relative; LEFT: 0; TOP: 0; z-index: 0;" border="0"  cellpadding="0" cellspacing="0" width="1002">
<tbody><tr><td id="tablebreak" width="1"></td><td>

<div id="toplogo">
	<a target="_self" href="#">
    <img src="./assets/logo-tm.png" border="0"  alt="" style="position:absolute; LEFT: 11; TOP: 7px; z-index: 1;"></a>
	<div style="position:absolute; LEFT: 405; TOP: 0px; z-index: 1; height:36px;width:428px;">
		<img src="./assets/logo.png" width="360" height="52" border="0" alt="1,000,000 pixels - $1 per pixel - Own a piece of internet history!">
		<table cellpadding="0" cellspacing="0" border="0">
	<tbody><tr></tr>
	<tr><td style="text-align: center"></td></tr>
	</tbody></table>
	</div>

	<div id="stats"><!--<font id="stat1">Sold:</font> <font id="statgreen">1,000,000</font><br><font id="stat1">Available:</font> <font id="statred">None!</font>--></div>
</div>

</td><td id="tablebreak" width="1"></td></tr>
<tr><td id="tablebreak" width="1"></td><td bgcolor="#d9ab22" background="./assets/navbg.gif" height="20">


<!-- navbar style="color: #ffffff;" -->

<table border="0" cellpadding="0" cellspacing="0" width="1000" height="20" style="background-color:#000 !important">
<tbody><tr>
<td>&nbsp;
	<!-- <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="./assets/follow_button.a64cf823bcb784855b86e2970134bd2a.en.html" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="position: static; visibility: visible; width: 175px; height: 20px;" kwframeid="1"></iframe> -->
<style>
	.nav{
		background-color: #000 !important;
	    color: #fff !important;
	}
</style>
<script src="./assets/widgets.js" type="text/javascript"></script></td><td>
<a class="nav" href="./index.php">Homepage</a> &nbsp;|&nbsp; <a class="nav" href="#"></a> &nbsp;|&nbsp; <a class="nav" href="./list.php">Lamb list</a> &nbsp;|&nbsp; <a class="nav" href="./UserLogin">Make Payment</a> &nbsp;|&nbsp; <a class="nav" href="./routes/contact.php">Contact us</a>

</td>
</tr>
</tbody></table>

<!-- /navbar -->


</td><td id="tablebreak" width="1"></td></tr>
<tr><td id="tablebreak" colspan="3"></td></tr>


<!-- end header file -->
<!-- <script type="text/javascript" src="./assets/gsc3.js"></script> -->
<!-- Start of StatCounter Code -->
<script type="text/javascript" language="javascript">
var sc_project=927854;
var sc_invisible=1;
var sc_partition=7;
var sc_security="3dbf1565";
var sc_remove_link=1;
</script>


    <?php
         while ($row = mysqli_fetch_assoc($results))

         
    {


    ?>

    <style type="text/css">
        img[title] {
  position: relative;
  /* Other styling properties */
}

img[title]:hover:after {
  content: attr(title);
  position: absolute;
  /* Other styling properties */
}
    </style>

<!-- <script type="text/javascript" language="javascript" src="./assets/counter.js"></script> -->
<!-- End of StatCounter Code -->
<tr><td id="tablebreak" width="1"></td>
  <td width="1000" height="1000" background="./assets/10.png" style="glyph-orientation-horizontal: auto;">

 <a href="<?php echo $row['url']; ?>"><img width="50" height="50" src="./requests/uploads/<?php echo $row['file']; ?>" title="<?php echo $row['url']; ?>"></a>


<!--  <style>
  canvas{
    background-image:url('./assets/imagesheet.jpeg');

  }
 </style>


 -->



 <canvas id="myCanvas" width="1000" height="1000"></canvas>

  
 <script type="text/javascript">

  //global declaration

  var canvas = document.getElementById('myCanvas');
  var context = canvas.getContext('2d');
  var lambs = new Image();

  lambs.addEventListener('load',eventLoad,false);
  lambs.src = './assets/red.png';

   //get squares   
	 function getSquare(canvas, evt){
       var rect = canvas.getBoundingClientRect();

    return {
        x: 1 + (evt.clientX - rect.left) - (evt.clientX - rect.left)%10,
        y: 1 + (evt.clientY - rect.top) - (evt.clientY - rect.top)%10
    };
}



// draw grid
function drawGrid(context) {

    for (var x = 0.5; x < 1001; x += 10) {
      context.moveTo(x, 0);
      context.lineTo(x, 1000);
      
      // context.drawImage(lambs,x, y,1000,1000);
    }
    
    for (var y = 0.5; y < 1001; y += 10) {
      context.moveTo(0, y);
      context.lineTo(1000, y);
      // context.drawImage(lambs,x, y,1000,1000);
    }
    
   
}


function fillSquare(context, x, y){

    // context.fillStyle = "white"
    // context.fillRect(x,y,9,9);
    context.drawImage(lambs,x, y,10,10);

}


//load the event ..
function eventLoad(){

	drawScreen();

}


function drawScreen(){

  for (var x = 0.5; x < 1001; x += 1) {

   }
    
    for (var y = 0.5; y < 1001; y+=1) {

      context.moveTo(0, y);
    

    }

}

 eventLoad();

    canvas.addEventListener('click', function(evt) {
    var mousePos = getSquare(canvas, evt);
    var count;

  
  
    fillSquare(context, mousePos.x, mousePos.y);

})

    //localstorage count
    var counter = 0;
    var price = 100;

    canvas.addEventListener('click',increment);


       function increment() {
        
            counter++;
            console.log(counter);

            cost = price * counter;

            localStorage.setItem('Value', counter);
            localStorage.setItem('Cost', cost);

        }

        const myImageData = context.createImageData(50, 50);

        const ImageData = context.getImageData();

        



</script>
 <?php

      }

      ?>
</td>
<!-- end actual page content -->
<tr>

<td style="background-color: #fff !important;" id="note" height="24" colspan="6">

  <img scrolling="no" frameborder="0" allowtransparency="true" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/BBC_Logo_2021.svg/320px-BBC_Logo_2021.svg.png"  title="Twitter Follow Button" data-twttr-rendered="true" style="visibility: visible; width: 175px; height: 50px;">

  <img scrolling="no" frameborder="0" allowtransparency="true" src="https://cdn.shopify.com/s/files/1/0249/5892/6941/products/Nintendo-Logo-1977-1983stickeriron-on_3840x.png"  title="Twitter Follow Button" data-twttr-rendered="true" style="visibility: visible; width: 88px; height: 50px;">

  <img scrolling="no" frameborder="0" allowtransparency="true" src="https://c.yell.com/t_smallRect,f_auto/9e63fe63-2667-480f-b820-f044ad6924b1_image_png.png"  title="Twitter Follow Button" data-twttr-rendered="true" style="visibility: visible; width: 100px; height: 50px;">

  <img scrolling="no" frameborder="0" allowtransparency="true" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/BBC_Logo_2021.svg/320px-BBC_Logo_2021.svg.png"  title="Twitter Follow Button" data-twttr-rendered="true" style="visibility: visible; width: 175px; height: 50px;">

  <img scrolling="no" frameborder="0" allowtransparency="true" src="https://cdn.shopify.com/s/files/1/0249/5892/6941/products/Nintendo-Logo-1977-1983stickeriron-on_3840x.png"  title="Twitter Follow Button" data-twttr-rendered="true" style="visibility: visible; width: 88px; height: 50px;">

  <img scrolling="no" frameborder="0" allowtransparency="true" src="https://c.yell.com/t_smallRect,f_auto/9e63fe63-2667-480f-b820-f044ad6924b1_image_png.png"  title="Twitter Follow Button" data-twttr-rendered="true" style="visibility: visible; width: 100px; height: 50px;">

</td>





</tr><br>
<tr>
	<td style="background-color: #fff !important; color: #000; font-weight: bold;" id="note" height="24" colspan="3">© 2023 by OVOSKOS

<br>


</td></tr>
<tr>
	<td style="background-color: #fff !important; color: #000; font-weight: bold;" id="note" height="24" colspan="3">Η αρχική σελίδα του Γίνε Vοσκός ΣΗΜΕΡΑ © 2023 OVOSKOS..  Ολα τα δικαιώματα διατηρούνται. Δεν είμαι υπεύθυνος για το περιεχόμενο των εξωτερικών ιστότοπων. Οι εικόνες που εμφανίζονται στην αρχική σελίδα είναι © του αντίστοιχου ιδιοκτήτη τους.

<br>


</td></tr>
</tbody></table>
</center>

<!-- footer ends -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-976192-1', 'auto');
  ga('send', 'pageview');

</script>
</body></html>
