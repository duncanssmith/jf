<?PHP
	$pageTitle="home";
	$metaContent="Judith Frost, Dust Art, Dorset, Dorset Artist";
	$metaDescription="Judith Frost is an Artist based in Dorset, and London. Judith is also a Lecturer in Fine Art at Manchester Metropolitan University.";
	$metaKeywords="Judith Frost, Drawing, Installation, Prints, British Council, Dust Art, Dorset, Dorset Artist, Fine Art, Manchester Metropolitan University, Portland, Portland Stone, Stone Dust, ";
	#set cookie to prevent repeated preloading of images from index page:
	$cookieExp=time()+60*60*24*30;
    $cookieValue="Judith Frost - www.judithfrost.co.uk";
	#$cookieExp=time()+10;
	$ret=setcookie("JF_index", $cookieValue, $cookieExp, "", "", 0);

	require("jfhead.php");
	include("jfbody_000.php");
	require("jftail.php");

?>

<!--
Judith Frost, Artist, Drawing, Installation, Prints, British Council, Dust Art, Dorset, Dorset Artist, Fine Art, Manchester Metropolitan University, Portland, Portland Stone, Stone Dust.

Judith Frost is an Artist based in Dorset, and London and also Lecturer in Fine Art at Manchester Metropolitan University.
-->
