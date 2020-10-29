<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require '../vendor/autoload.php';
require './function.php';

use NFePHP\DA\NFe\Danfe;
use NFePHP\DA\MDFe\Damdfe;
use NFePHP\DA\CTe\Dacte;
use NFePHP\DA\NFe\Danfce;

if (!isset($_FILES['xml']) && empty($_FILES['xml'])) { 
    echo "<script>alert('Nenhum arquivo foi selecionado!')</script>";
    echo "<script>location.href='../index.php'</script>";
    exit;
}

$fileXml  = "../".$_FILES['xml']['name'];
$xmlParse = uploadFile($fileXml);

try {
    
    $accessKey = getAccessKey($xmlParse);
    $model     = checkFileType($accessKey);
    
    if (!in_array($model, MODEL_PERMISSION)) {
        echo "<script>alert('Formato não permitido')</script>";
        echo "<script>location.href='../'</script>";
        exit;
    }

    $xmlContents = file_get_contents($fileXml);
    
    if ($model === 55) $print = new Danfe($xmlContents);
    if ($model === 65) $print = new Danfce($xmlContents);
    if ($model === 57) $print = new Dacte($xmlContents);
    if ($model === 58) $print = new Damdfe($xmlContents);
    
    deleteXml($fileXml);
    printPdf($accessKey, $print->render());

} catch (\Exception $e) {
    echo "<script>alert('Ocorreu um erro durante o processamento: ". $e->getMessage()."')</script>";
    echo "<script>location.href='../'</script>";
}
