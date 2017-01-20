<?
/*
$nfce=file_get_contents("http://www.dfeportal.fazenda.pr.gov.br/dfe-portal/rest/servico/consultaNFCe?chNFe=41141115375991001055650030000000011000000016&nVersao=100&tpAmb=1&cDest=70943605172&dhEmi=323031342d31312d30345430393a30353a33312d30333a3030&vNF=10.90&vICMS=0.00&digVal=6c764d767253395878704669694b3549495a3068733737316a48493d&cIdToken=000001&cHashQRCode=43676E68B4255804288DDEF950622A58F40071D1");
*/
/*
$nfce=file_get_contents("https://www.sefaz.mt.gov.br/nfce/consultanfce?chNFe=51131207212380000177650010000000711000000712&nVersao=100&tpAmb=1&cDest=96778865253&dhEmi=323031332D31322D30375430393A33313A30392D30333A3030&vNF=0.35&vICMS=0.00&digVal=4C35414269322B6E4D556331794E2F75587A67635764684876796B3D&cIdToken=000001&cHashQRCode=AE8ED0A5F4CD2C0A4FCFABFFA59F28A7463C9074");
*/
/*
$nfce=file_get_contents("https://www.sefaz.rs.gov.br/ASP/AAE_ROOT/NFE/SAT-WEB-NFE-NFC_QRCODE_1.asp?chNFe=43140492101146000141650020000001391000001398&nVersao=100&tpAmb=2&dhEmi=323031342d30342d30315431333a32373a30382d30333a3030&vNF=5.99&vICMS=0.00&digVal=592f31515752574a4d4e5848742b70574c4d4c775a7972357932383d&cIdToken=000001&cHashQRCode=C7A0D618AA882A91E146E9E92335E5443AE4491B");

echo $nfce=str_replace('ú','u',(strip_tags($nfce)));

$posCNPJ = strripos($nfce,'CNPJ');
echo '<BR><BR>';
echo $cnpj=substr($nfce,$posCNPJ,40);

$posCPF = strripos($nfce,'CPF');
echo '<BR><BR>';
echo $cpf=substr($nfce,$posCPF,27);

$posTOTAL = strripos($nfce,'Valor Total R$');
echo '<BR><BR>';
echo $total=substr($nfce,$posTOTAL,18);

$posNUMERO = strripos($nfce,'N&uacute;mero');
echo '<BR><BR>';
echo $numero=substr($nfce,$posNUMERO,26);

$posDATA = strripos($nfce,'Data de Emiss&atilde;o:');
echo '<BR><BR>';
echo $data=substr($nfce,$posDATA,45);
*/

$hex = hex2bin("592f31515752574a4d4e5848742b70574c4d4c775a7972357932383d");
var_dump($hex);
?>