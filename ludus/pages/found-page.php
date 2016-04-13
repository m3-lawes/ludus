<?php
/*
* found-page.php
*/
?>
<div class="phone-container">
<div class="phone-container__inner">


<!-- Top Bar -->
<div class="top-bar">

	<div class="top-bar__left-button">
		<a href="?page=myprofile" class="ludus-icon-left-open"></a>
	</div>

	<div class="top-bar__center">
		<span class="top-bar__center-text">
			Players Found
		</span>
	</div>

	<div class="top-bar__right-button">
	<a href="?page=message">
		<a href="?page=matches" class="ludus-icon-chat"></a>
	</a>
	</div>

</div>
<!-- Top Bar END-->

<div class="found-users">
	<?php	if ( !isset($_GET['user']) || (isset($_GET['user']) && $_GET['user'] == 'alex')) { ?>

	<a href="?page=found&user=will" class="found-user__item">
		<div class="found-user__profile">
			<img src="img/alex.jpg" alt=""/>
		</div>
		<div class="found-user__meta">
			<span class="found-user__title">Alex, 24</span>
			<span class="found-user__location">Bristol, UK</span>
			<span class="found-user__distance">Less than a kilometer away</span>
		</div>
	</a>

	<?php } else { ?>
	<a href="?page=found&user=alex" class="found-user__item">
		<div class="found-user__profile">
			<img src="img/will.jpg" alt=""/>
		</div>
		<div class="found-user__meta">
			<span class="found-user__title">Will, 22</span>
			<span class="found-user__location">Bristol, UK</span>
			<span class="found-user__distance">2 kilometers away</span>
		</div>
	</a>

	<?php } ?>


</div>

</div><!--phone-container__inner-->
</div><!--phone-container-->
