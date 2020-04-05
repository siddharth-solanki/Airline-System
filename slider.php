
<style>
<link rel="stylesheet" href="photo.css"/>
<script type="text/javascript" script src="jquery-2.1.4.min (1).js"></script>
<script type="text/javascript" script src="jquery.cycle.all.js"></script>
<script type="text/javascript">
$('#slider').cycle({
	fx:			'scrollHorz',
	timeout:		2000,
	next:"#next",
	prev:"#prev",
	pager:"#pager";
	
	});
</script>

<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>

<body>

<div class="w3-content w3-section" style="max-width:800px">
  <img align=center class="mySlides" src="img/a.jpg" height="500" width="570">
  <img align=middle class="mySlides" src="img/b.jpg" height="500" width="570">
  <img align=middle class="mySlides" src="img/c.jpg" height="500" width="570">
  <img align=middle class="mySlides" src="img/d.jpg" height="500" width="570">
  <img align=middle class="mySlides" src="img/e.jpg" height="500" width="570">
  <img align=middle class="mySlides" src="img/f.jpg" height="500" width="570">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x=document.getElementsByClassName("mySlides");
    for (i=0; i< x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
</style>