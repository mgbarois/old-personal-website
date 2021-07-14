<!DOCTYPE html>
<html>

	<?php 

	//GET LANGUAGE
	//$exp = explode('/',$_SERVER['REQUEST_URI']); // explode by slash
	$lang = 'fr';

	//LOAD XML
	$xml = simplexml_load_file('languages.xml') or die('xml not found"!');

	//GET CONTENT
	include 'page_content.php';

	?>

</html>