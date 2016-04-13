<?php
/*
* settings-page.php
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
			App Settings
		</span>
	</div>

	<div class="top-bar__right-button">
	</div>

</div>
<!-- Top Bar END-->


<div class="settings">

	<div class="settings-section clearfix">
		<span class="settings-section-title">Push Notifications</span>
	</div>

	<div class="settings-option clearfix">
		<span class="settings-title settings-title--half">New Players</span>
		<div class="settings-content">
			<div class="settings-control">
				<div class="inputs">
					 <input type="checkbox" name="fancy-checkbox" id="fancy-checkbox"/>
				    <label for="fancy-checkbox">Checkbox</label>
				</div>
			</div>
		</div>
	</div>

	<div class="settings-option clearfix">
		<span class="settings-title settings-title--half">Messages</span>
		<div class="settings-content">
			<div class="settings-control">
				<div class="inputs">
					 <input type="checkbox" name="fancy-checkbox" id="fancy-checkbox"/>
				    <label for="fancy-checkbox">Checkbox</label>
				</div>
			</div>
		</div>
	</div>

	<div class="settings-section clearfix">
		<span class="settings-section-title">Legal</span>
	</div>

	<div class="settings-option clearfix">
		<span class="settings-title">Privacy Policy</span>
		<div class="settings-content">
			<div class="settings-control"><span class="ludus-icon-right-open"></span></div>
		</div>
	</div>

	<div class="settings-option clearfix">
		<span class="settings-title">Terms of Service</span>
		<div class="settings-content">
			<div class="settings-control"><span class="ludus-icon-right-open"></span></div>
		</div>
	</div>

	<div class="settings-version">
		<img src="img/symbol.png" alt="">
		<span class="settings-version">Version 1.0.3</span>
	</div>

	<div class="settings-delete">
		<a href="?page=comingsoon&return_location=settings" class="button button--secondary">Delete Account</a>
	</div>

</div>


</div><!--phone-container__inner-->
</div><!--phone-container-->
