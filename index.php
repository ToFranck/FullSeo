<?php
$langs = array(
	"fr" => "toto.fr",
	"en" => "toto.com",
	"es" => "toto.es",
	"de" => "toto.de"
);

if(isset($_GET['lang']) && isset($langs[$_GET['lang']])){
	$current_lang = $_GET['lang'];
	$current_url = $langs[$current_lang];
} else {
	$current_lang = "fr";
	$current_url = "toto.fr";
}
if(isset($langs[$current_lang])) unset($langs[$current_lang]);
?>
<!DOCTYPE html>
<html lang="<?= $current_lang; ?>">
<head>
	<?php
	foreach($langs as $lang => $url){
		echo'<link rel="alternate" href="'.$url.'" hreflang="'.$lang.'">';
	}
	?>
	<link rel="canonical" href="<?= $current_url; ?>">
<head>
<body>


</body>
</html>