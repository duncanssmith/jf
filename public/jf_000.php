<?PHP
	$pageTitle="home";
	$metaContent="Judith Frost";
	$metaKeywords="Judith Frost";
	#set cookie to prevent repeated preloading of images from index page:
	$cookieExp=time()+60*60*24*30;
    $cookieValue="Judith Frost - www.judithfrost.co.uk";
	#$cookieExp=time()+10;
	$ret=setcookie("JF_index", $cookieValue, $cookieExp, "", "", 0);

	require("jfhead.php");
	include("jf_000_cv.php");
	require("jftail.php");
?>
