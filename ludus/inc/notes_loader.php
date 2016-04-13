<?php
/* ---  Notes Loader -- */


function load_notes() {

	$page = "home";
    
    echo '<div class="notes sn--hide">';
    
	if (isset($_GET['page'])) {

		$page = $_GET['page'];

		if (file_exists(dirname(__FILE__).'/../notes/'.$page.'-notes.txt')) {

			$lines=file(dirname(__FILE__).'/../notes/'.$page.'-notes.txt');

    

			foreach($lines as $line) {
			   echo $line.'<br>';
			}//FOREACH

	


		}//IF

	} else {

        if (file_exists(dirname(__FILE__).'/../notes/'.$page.'-notes.txt')) {

			$lines=file(dirname(__FILE__).'/../notes/'.$page.'-notes.txt');

    	

			foreach($lines as $line) {
			   echo $line.'<br>';
			}//FOREACH



		}//IF
        
    }
    
    echo '</div>';

}

?>