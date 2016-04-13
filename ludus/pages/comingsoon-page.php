<?php
/*
* comingsoon-page.php
*/
	$return_location = 'home'; 

if (isset($_GET['return_location'])) {
	$return_location = $_GET['return_location']; 
}

?>
<div class="phone-container">
<div class="phone-container__inner">


<!-- Top Bar -->
<div class="top-bar">

	<div class="top-bar__left-button">
		<a href="?page=<?php echo $return_location; ?>" class="ludus-icon-left-open"></a>
	</div>

	<div class="top-bar__center">
		<span class="top-bar__center-text">
			Coming Soon
		</span>
	</div>

	<div class="top-bar__right-button" style="text-align: right;">

	</div>

</div>
<!-- Top Bar END-->

<div class="coming-soon clearfix">
	<div class=" clearfix">
		<div class="coming-soon__text clearfix">
			Unfortunatly, this section is coming soon. <br><br><a class="button button--secondary" href="?page=<?php echo $return_location; ?>">Please go back</a> 
		</div>
	</div>
</div>



</div><!--phone-container__inner-->
</div><!--phone-container-->
