<?php
/*
* myprofile-page.php
*/
?>
<div class="phone-container">
<nav class="phone-nav">
	<div class="phone-nav__container">
		<div class="nav_header clearfix">
			<div class="menu-btn__container">
				<span class="ludus-icon-cancel menu-btn"></span>
			</div>
			<div class="nav-header__content">
				<div class="nav-header__profile">
					<img src="img/matt.jpg" alt="">
				</div>
				<div class="nav-header__meta">
					<span class="profile-title">Matthew Lawes</span>
					<span class="profile-sport">Football</span>
				</div>
			</div>
		</div>
	</div>
		<ul class="nav_menu-list">
			<li><a href="?page=matches">Matches <span class="ludus-icon-right-open"></span></a></li>
			<li><a href="?page=discovery">Discovery Preferences <span class="ludus-icon-right-open"></span></a></li>
			<li><a href="?page=settings">App Settings <span class="ludus-icon-right-open"></span></a></li>
			<li><a href="?page=comingsoon&return_location=myprofile">Share <span class="ludus-icon-right-open"></span></a></li>
		</ul>
		<div class="logout-container">
			<a href="?page=home" class="button button--secondary logout-button">Log out</a>
		</div>
</nav>
<div class="phone-container__inner">


<!-- Top Bar -->
<div class="top-bar">

	<div class="top-bar__left-button">
		<span class="ludus-icon-menu menu-btn"></span>
	</div>

	<div class="top-bar__center">
		<span class="top-bar__center-text dropdown-btn">
		 	Profile: Football	<span class="ludus-icon-down-open"></span>
		</span>
		<div class="dropdown-menu">
			<ul>
				<li><a href="">Football</a></li>
				<li><a href="?page=comingsoon&return_location=myprofile">Cycling</a></li>
				<li><a href="?page=comingsoon&return_location=myprofile">Running</a></li>
			</ul>
		</div>
	</div>

	<div class="top-bar__right-button">
		<a href="?page=editprofile">
			<a href="?page=editprofile" class="ludus-icon-pencil"></a>
		</a>
	</div>

</div>
<!-- Top Bar END-->

<div class="profile-header">
	<div class="profile-images clearfix">
		<div class="profile-image">
			<img src="img/matt.jpg" alt="">
		</div>
		<div class="profile-sport__icon">
			<span class="ludus-icon-football"></span>
		</div>
	</div>
	<div class="profile-meta">
		<span>Matthew, 22</span>
		<span>Bristol, UK</span>
		<span>Less than a kilometer away</span>
	</div>
</div>
<hr>
<a href="?page=search" class="button button--primary">Find Players</a>
<div class="profile-slider">
	<div class="profile-slider__tabs">
		<ul class="clearfix">
			<li class="profile-slider__tab profile-slider__tab--active" data-tab="1">Styles</li>
			<li class="profile-slider__tab" data-tab="2">Bio</li>
			<li class="profile-slider__tab" data-tab="3">Photos</li>
		</ul>
	</div>
	<div class="profile-slider__slides">
		<div class="profile-slider__slide" data-tab-no="1" >
			<div class="profile-slider__slide-container">
				<div class="full">
					<span>Select your sporting styles</span>
					<div class="profile-style-toggles clearfix">
						<button class="toggle-button button">11 aside</button>
						<button class="toggle-button button button--active">5 aside</button>
						<button class="toggle-button button button--active">Futsal</button>
					</div>
				</div>
			</div>

		</div>
		<div class="profile-slider__slide" data-tab-no="2">
			<span>Student living in bath looking to join an 11 aside
football team in the area. Played at club level for
12 years. Favourite position. RB</span>

		</div>
		<div class="profile-slider__slide" data-tab-no="3">

			<div class="profile-slider__slide-container profile-slider__slide-container--photos">
				<div class="third">
					<img src="img/matt.jpg" alt="">
				</div>
				<div class="third">
					<img src="img/matt.jpg" alt="">
				</div>
				<div class="third">
					<img src="img/matt.jpg" alt="">
				</div>
			</div>

		</div>
	</div>
</div>


</div><!--phone-container__inner-->
</div><!--phone-container-->
