
<?php
include 'core/init.php';
include 'includes/overall/header.php';
include 'includes/widgets/admin_page.php';
include 'users.php';?>

<?php include('slider.php');?>
 <style>
body {
    background-image: url("back.jpg");
	background-repeat: repeat;
	background-size: 1520px 1520px;
}

 * {
    box-sizing: border-box;
}

.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

.row::after {
    content: "";
    clear: both;
    display: table;
}
 </style>
	



<?php include 'includes/overall/footer.php';
?>