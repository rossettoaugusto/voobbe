<?
//header('Access-Control-Allow-Origin: *');

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$compra=$_POST['compra'];
$estabelecimento=$_POST['estabelecimento'];


$name = 'arquivo.txt';
$text = $nome.' '.$sobrenome.' '.$email.' '.$compra.' '.$estabelecimento;
$file = fopen($name, 'a');
fwrite($file, $text);
fclose($file);
?>