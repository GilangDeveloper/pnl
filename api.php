<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Headers:*');
date_default_timezone_set("Asia/Makassar");
if(!isset($_POST['pesan'])){
  header('location: youtube.com');
  exit();
}
            
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];

// TODAY
$Tget = file_get_contents("lang/visitor.json");
$Tdecode = json_decode($Tget,true);
$today = $Tdecode['today'] + 1;
$Tdecode['today'] = $today;
$Tresult = json_encode($Tdecode);
            $Tfile = fopen('lang/visitor.json','w');
                     fwrite($Tfile,$Tresult);
                     fclose($Tfile);
                     
// YESTERDAY
if(date("H:i") == "01:00"){
$Yget = file_get_contents("lang/visitor.json");
$Ydecode = json_decode($Yget,true);
$Ydecode['yesterday'] = $Ydecode['today'];
$Ydecode['today'] = 0;
$Yresult = json_encode($Ydecode);
            $Yfile = fopen('lang/visitor.json','w');
                     fwrite($Yfile,$Yresult);
                     fclose($Yfile);
}

// ALL OVER
$Aget = file_get_contents("lang/visitor.json");
$Adecode = json_decode($Aget,true);
$all = $Adecode['total'] + 1;
$Adecode['total'] = $all;
$Aresult = json_encode($Adecode);
            $Afile = fopen('lang/visitor.json','w');
                     fwrite($Afile,$Aresult);
                     fclose($Afile);

// RESULT DATA
$resultGet = file_get_contents("lang/data.json");
$resultData = json_decode($resultGet,true);

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$resultData['nama'].' <api-flashcode@gmail.com>' . "\r\n";

if(mail($resultData['email'], $subjek, $pesan, $headers))
{
$upGet = file_get_contents("lang/data.json");
$upData = json_decode($upGet,true);
$hasil = $upData['totals'] + 1;
$upData['totals'] = $hasil;
$upResult = json_encode($upData);
$upFile = fopen('lang/data.json','w');
          fwrite($upFile,$upResult);
          fclose($upFile);
}
