<?php
/* --- Source Gist Loader -- */


function get_gist_arr() {

	return array(
		'choose' => 'https://gist.github.com/m3-lawes/bbf56c840b9685cb24fccc84738fbf2b.js',
		'comingsoon' =>'https://gist.github.com/m3-lawes/f78d620e7f1b532ffa71b8682199db99.js',
		'discovery' => 'https://gist.github.com/m3-lawes/6366c12cf22c4279c9e617c2653b05d1.js',
		'editprofile' => 'https://gist.github.com/m3-lawes/c5de6f8f49cc2e933834d092bb822ce4.js',
		'find' => 'https://gist.github.com/m3-lawes/313355b4175d4eb527e45679c897082b.js',
		'found' => 'https://gist.github.com/m3-lawes/6c891d7f05fa2b91cd0cdf2832e29d43.js',
		'home' => 'https://gist.github.com/m3-lawes/cd3821c5cfa89dd82c1eed217faad200.js',
		'login' => 'https://gist.github.com/m3-lawes/18ff1da63bef61f55b5e7b9e3573ffba.js',
		'matches' => 'https://gist.github.com/m3-lawes/a0de8db0176ff1b5b725c2be7411dc85.js',
		'messages' => 'https://gist.github.com/m3-lawes/25fcd30e9c3afaee479b90fe525a0212.js',
		'myprofile' => 'https://gist.github.com/m3-lawes/1e584810676fae28272c5e5772f7a3ec.js',
		'reset' => 'https://gist.github.com/m3-lawes/44b8e720666895a4024bdb442dfa2952.js',
		'search' => 'https://gist.github.com/m3-lawes/51c8a66c6d0ad4b63f71eaae1d5d367e.js',
		'settings' => 'https://gist.github.com/m3-lawes/b5cf27fba582cc95d8f584b2e8acbba3.js',
		'signup' => 'https://gist.github.com/m3-lawes/3ce862f39815974ea85668a69eaa67ec.js',
		'userprofile' => 'https://gist.github.com/m3-lawes/c48c11619898fcb2572d928754cff3d7.js'

	);

}//get_gist_arr


function load_gist() {


	$arr = get_gist_arr();

	$page = "home";

	if (isset($_GET['page'])) {

		$page = $_GET['page'];

		if (file_exists(dirname(__FILE__).'/../pages/'.$page.'-page.php')) {

			if (array_key_exists($page, $arr)) {

				echo '<div class="source sn--hide"><script src="'.$arr[$page].'"></script></div>';

			}//IF

		}//IF

	} else {
        
        if (file_exists(dirname(__FILE__).'/../pages/'.$page.'-page.php')) {

			if (array_key_exists($page, $arr)) {

				echo '<div class="source sn--hide"><script src="'.$arr[$page].'"></script></div>';

			}//IF

		}//IF
        
    }

}

?>