<?php
/*
* index.php
*/

//error_reporting(E_ALL);

require_once 'inc/gist_loader.php';
require_once 'inc/notes_loader.php';

require_once 'inc/header.php';


if (isset($_GET['page'])) {

	if (file_exists(dirname(__FILE__).'/pages/'.$_GET['page'].'-page.php')) {

		require_once dirname(__FILE__).'/pages/'.$_GET['page'].'-page.php';

	} else {

		header('Location: 404.php');

	}//ELSE

} else {

	if (file_exists(dirname(__FILE__).'/pages/home-page.php')) {

		require_once dirname(__FILE__).'/pages/home-page.php';

	} else {

		header('Location: 404.php');

	}//ELSE

}


require_once 'inc/footer.php'; ?>