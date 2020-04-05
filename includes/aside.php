<aside>
   <?php 
	include 'core/functions/users.php';
	if(logged_in() === true){
	   include 'includes/widgets/logged_in.php'; 
	
	}
	else{
		include 'includes/widgets/login.php';
	}
		include 'includes/widgets/user_count.php';
   
    if (is_admin($session_user_id) === true) {
		include 'includes/widgets/admin_page.php';	   
	}
   ?> 
<?php   
	if ((basename($_SERVER['PHP_SELF'])) === 'searched.php'){
		include('search_panel.php');
}
 ?> 
<?php   
	if ((basename($_SERVER['PHP_SELF'])) === 'book.php'){
		include 'book_includes.php'; 
}
?>
<?php
echo basename($_SERVER['PHP_SELF'])
?>

function logged_in() {
	return (isset($_SESSION['user_id'])) ? true : false;
}
</aside>