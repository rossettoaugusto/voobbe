<?
if($_SERVER['HTTP_HOST']!='192.168.100.20'){
	$url = 'http://voobbe.com.br/site/';
	header("Location: $url");
	exit;
}	

?>