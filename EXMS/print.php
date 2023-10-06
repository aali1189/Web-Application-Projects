<?php

//require __DIR__ . '/vendor/autoload.php';
//use Mike42\Escpos\PrintConnectors\FilePrintConnector;
//use Mike42\Escpos\Printer;

include('Mike42/Escpos/PrintConnectors/FilePrintConnector.php');
include('Mike42/Escpos/Printer.php');

$connector = new FilePrintConnector("Xprinter XP-58 Series");
$printer = new Printer($connector);

$printer -> text("Hello World!\n");
$printer -> cut();

$printer -> close();

//
//if(isset($_POST['order'])){
//$print_output= $_POST['order'];
//}
//try
//{
//    $fp=pfsockopen("AMRO-Mac", 9100);
//    fputs($fp, $print_output);
//    fclose($fp);
//
//    echo 'Successfully Printed';
//}
//catch (Exception $e) 
//{
//    echo 'Caught exception: ',  $e->getMessage(), "\n";
//}

?>