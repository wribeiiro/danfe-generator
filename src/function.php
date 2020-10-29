<?php

const MODEL_PERMISSION = [55, 57, 58, 65];
const EXT_PERMISSION = ['xml'];

function uploadFile(string $filename): SimpleXMLElement {
    
    if (!in_array(pathinfo($filename, PATHINFO_EXTENSION), EXT_PERMISSION)) {
        echo "<script>alert('Arquivo invalido! Verifique se o mesmo possui a extensão .xml !')</script>";
        echo "<script>location.href='../'</script>";
        exit;
    }

    if (!move_uploaded_file($_FILES['xml']['tmp_name'], $filename)) {
        echo "<script>alert('Não foi possível obter o xml!')</script>";
        echo "<script>location.href='../'</script>";
    }

    return simplexml_load_file($filename);
}

function checkFileType(string $accessKey): int {
    return checkModelDocument($accessKey);
}

function getAccessKey(SimpleXMLElement $xml):? string {
    
    $accessKey = "";

    if (isset($xml->infMDFe)) $accessKey = ((array) $xml->infMDFe)['@attributes']['Id'];
    if (isset($xml->CTe))     $accessKey = ((array) $xml->CTe->infCte)['@attributes']['Id'];
    if (isset($xml->NFe))     $accessKey = ((array) $xml->NFe->infNFe)['@attributes']['Id'];

    return checkAccessKey($accessKey);
}

function checkAccessKey(string $key): string {
    return preg_replace('/\D/', '', $key);
}

function checkModelDocument(string $accessKey): int {
    return (int) substr($accessKey, 20, 2);
}

function printPdf(string $pdfName, string $pdf): void {
    header("Content-Disposition: attachment; filename=$pdfName");
    header("Content-Type: application/pdf");
    echo($pdf);
}

function deleteXml(string $filename): void {
    if (file_exists($filename))
        unlink($filename);
}