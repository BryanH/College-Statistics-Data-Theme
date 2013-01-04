<?php
/*
functions.php

This will house the custom function for populating the gates site
*/

function topbar(){
	$topbar  = "<span class='tagline'><a href='http://www.chronicle.com'><img src='". get_stylesheet_directory_uri() ."/imgassets/che_logotype.png' alt='The Chronicle of Higher Education' /></a></span>";
	$topbar .= "  <span class='visitlink'><a target='_blank' href='http://chronicle.com'><img src='". get_stylesheet_directory_uri() ."/imgassets/c.png'/>visit chronicle.com</a></span>";
    $topbar .= "<div class='contentwrapper'>";
    $topbar .= "  <div class='share_links'><span class='share_label'>share this project</span>";
	$topbar .= "    <ul>";
 	$topbar .= "      <li class='twitter'><a href='#'><img src='" . get_stylesheet_directory_uri() . "/imgassets/twitter.png'/></a></li>";
	$topbar .= "      <li class='facebook'><a href='#'><img src='". get_stylesheet_directory_uri() ."/imgassets/facebook-16x16.gif'/></a></li>";
	$topbar .= "      <li class='linkedin'><a href='#'><img src='". get_stylesheet_directory_uri() ."/imgassets/linkedin.png' width='20' height='20'/></a></li>";
    $topbar .= "    </ul>";
	$topbar .= "  </div>";
    $topbar .= "</div>";
return $topbar;
}


function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
?>
