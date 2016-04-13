<?php
/*
* messages-page.php
*/
?>
<div class="phone-container">
<div class="phone-container__inner">


<!-- Top Bar -->
<div class="top-bar">

	<div class="top-bar__left-button">
		<a href="?page=matches" class="ludus-icon-left-open"></a>
	</div>

	<div class="top-bar__center">
		<span class="top-bar__center-text">
			<?php
				if (isset($_GET['user'])) { 
					if ($_GET['user'] == 'will') {
						echo 'Will Stone';
					} else {
						echo 'Alex Shortt';
					}
				} else {
					echo 'Will Stone';
				}
			 ?>
		</span>
	</div>

	<div class="top-bar__right-button" style="text-align: right;">
	
	</div>

</div>
<!-- Top Bar END-->

<span class="message__time clearfix">TODAY</span>
<div class="messages clearfix">
	<div class="message__item message__item--odd clearfix">
		<div class="message__text clearfix">
			<?php
				if (isset($_GET['user'])) {
					if ($_GET['user'] == 'will') {
						echo 'Hey Will. How are you?';
					} else {
						echo 'Alex! Lets play football!';
					}
				} else {
						echo 'Hey Will. How are you?';
				}
			 ?>
		</div>
	</div>
	<div class="message__item message__item--even clearfix">
		<div class="message__text clearfix">

			<?php
				if (isset($_GET['user'])) {
					if ($_GET['user'] == 'will') {
						echo 'Yeah good thank you. You ready to go running?';
					} else {
						echo 'Cannot wait Matt. Lets go!';
					}
				} else {
						echo 'Yeah good thank you. You ready to go running?';
				}
			 ?>
		</div>
		<div class="message__profile">
			<?php
				if (isset($_GET['user'])) {
					if ($_GET['user'] == 'will') {
						echo '<img src="img/will.jpg" alt="">';
					} else {
						echo '<img src="img/alex.jpg" alt="">';
					}
				} else {
						echo '<img src="img/will.jpg" alt="">';
				}
			 ?>

		</div>
	</div>
</div>

<div class="message__box">
	<input type="text" class="message__new" placeholder="Place your text here">
	<input type="submit" class="message__new-btn" value="Send">
</div>



</div><!--phone-container__inner-->
</div><!--phone-container-->
