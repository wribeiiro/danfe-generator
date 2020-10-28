<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 'On');

require '../vendor/autoload.php';

use NFePHP\DA\NFe\Danfe;
use NFePHP\DA\NFe\Danfce;
use NFePHP\DA\NFe\Daevento;

if (isset($_FILES['xml']) && !empty($_FILES['xml'])) { 

    $filename = $_FILES['xml']['name'];

    if (in_array(pathinfo($filename, PATHINFO_EXTENSION), array('xml'))) {
        
        $filename = "../".$filename;

        if (!move_uploaded_file($_FILES['xml']['tmp_name'], $filename))
            die("Não foi possível gerar danfe do arquivo espeficiado");

        $xml = file_get_contents($filename);

        try {
            
            if (substr($filename, 23, 2) == '55')  {

                if (substr($filename, -11) == 'proccce.xml') 
                    $print = new Daevento($xml, []);
                else 
                    $print = new Danfe($xml);

            } else if (substr($filename, 23, 2) == '65') {
                $print = new Danfce($xml);
            } else {
                echo "<script>alert('Formato não permitido')</script>";
                echo "<script>location.href='../index.php'</script>";
            }

            $pdf = $print->render();

            if (file_exists($filename))
                unlink($filename);

            header('Content-Type: application/pdf');
            echo($pdf);

        } catch (\Exception $e) {
            echo "<script>alert('Ocorreu um erro durante o processamento: ". $e->getMessage()."')</script>";
            echo "<script>location.href='../index.php'</script>";
        }
    } else {
        echo "<script>alert('Arquivo invalido! Verifique se o mesmo possui a extensão .xml !')</script>";
        echo "<script>location.href='../index.php'</script>";
    }	
} else {
    echo "<script>alert('Nenhum arquivo foi selecionado!')</script>";
    echo "<script>location.href='../index.php'</script>";
}
