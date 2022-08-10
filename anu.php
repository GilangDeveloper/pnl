<?php

// https://panelcuk.gilangdev.xyz/api.php
for ($i = 0; $i < 3; $i++) {
    $kode_nomer = ["0831", "0817", "0818", "0819", "0859", "0877", "0878", "0812", "0858", "0895", "0857", "0813", "0852"];
    $random = rand(99999999, 8);

    $rand = array_rand($kode_nomer, 2);
    $nomer = $kode_nomer[$rand[rand(0, 1)]];

    // echo $nomer.$random;

    $bytes = openssl_random_pseudo_bytes(2);
    $pass = bin2hex($bytes);
    // echo $pass;
    $id = array("rayhan@2009", "bilal12#fb", "riska##)sad2022", "Masagusglobal2", "ikbal62+993", "rasit#128", "kontpll", "anjing855", "rekpan123", "arfan1@$", "INDRA55@", "*ANJAY*", "SAREP56", "RAFFTOD", "MADUN", "STOCK25", "LIPAS 123_", "RONALDO", "UCUP_-", "HAIDAR/", "CAWED", "INTRFG", "Mars<>", "UDIK000", "KENTANG", "BERLZ55", "KENZIE STOCK", "BARTYO?", "ADELL<3", "PUTIH", "TAMVBN", "PACKER", "SUSU IBU", "SALIM", "KHASNAN", "ANJAY", "KONCOL", "GUA GNTNG", "BAGI PISING", "BACOD@_-", "KRESEK-3", "5555555", "UKTII58", "SEOYPI", "UPIN25", "PRINDAPAN", "REZA GANZ", "COLA ++", "DORAA", "PALLZY?", "ADITIYA", "CELLA66", "NIKAH25_-", "PANAS?", "INDONESIA_-", "SUGIONO", "BELI PISING DI MANA", "BANGKULL", "GILANG", "ANANGJDN", "Pandu25", "Davibotz", "tytydgede?", "kablz#", "pintrfgh", "jdhshsjdk", "sksksk", "mernog", "Ndog Goblok", "Mabar123", "Dafa Ganteng", "Alokgg", "Skylerr", "SGKAYUU", "Gelapp=", "anjing55", "monyetlu?", "Goblokga?", "Pisingg", "Xyzmee", "sarzJebeh", "nobitaebt", "NT MULU", "ZUZU", "ASU?", "Grusly", "Trisno85", "Bajingan", "STUMBLE", "LANJUT", "KONCOLZ", "AZLAND", "DEDENOEN", "BUTUH UANG", "Kriptod", "Yasaja", "Bochil Ff", "Kok Gak Bisa", "Zzzzz", "Tembak", "Zalva", "Cici123", "faizu", "yupkh", "Pising bang", "Haramm", "Babi Guling", "Frontal GG", "AURA MKS", "Spiddrmen", "Spongbob", "Kullzsr", "Imso", "Anjay?", "Gilanh25", "-Candra@", "Tedy", "Alpung", "Nabilz Culx", "Tzy Ezz", "Stresss", "Evos ANJAY", "PulZs", "Sapibauuuu", "Uculp", "Toge35", "Masagusglobal2", "ikbal62+993", "rasit#128", "kontpll", "anjing855", "rekpan123", "arfan1@$", "INDRA55@", "*ANJAY*", "SAREP56", "RAFFTOD", "MADUN", "STOCK25", "LIPAS 123_", "RONALDO", "UCUP_-", "HAIDAR/", "CAWED", "INTRFG", "Mars<>", "UDIK000", "KENTANG", "BERLZ55", "KENZIE STOCK", "BARTYO?", "ADELL<3", "PUTIH", "TAMVBN", "PACKER", "SUSU IBU", "SALIM", "KHASNAN", "ANJAY", "KONCOL", "GUA GNTNG", "BAGI PISING", "BACOD@_-", "KRESEK-3", "5555555", "UKTII58", "SEOYPI", "UPIN25", "PRINDAPAN", "REZA GANZ", "COLA ++", "DORAA", "PALLZY?", "ADITIYA", "CELLA66", "NIKAH25_-", "PANAS?", "INDONESIA_-", "SUGIONO", "BELI PISING DI MANA", "BANGKULL", "GILANG", "ANANGJDN", "Pandu25", "Davibotz", "tytydgede?", "kablz#", "pintrfgh", "jdhshsjdk", "sksksk", "mernog", "Ndog Goblok", "Mabar123", "Dafa Ganteng", "Alokgg", "Skylerr", "SGKAYUU", "Gelapp=", "anjing55", "monyetlu?", "Goblokga?", "Pisingg", "Xyzmee", "sarzJebeh", "nobitaebt", "NT MULU", "ZUZU", "ASU?", "Grusly", "Trisno85", "Bajingan", "STUMBLE", "LANJUT", "KONCOLZ", "AZLAND", "DEDENOEN", "BUTUH UANG", "Kriptod", "Yasaja", "Bochil Ff", "Kok Gak Bisa", "Zzzzz", "Tembak", "Zalva", "Cici123", "faizu", "yupkh", "Pising bang", "Haramm", "Babi Guling", "Frontal GG", "AURA MKS", "Spiddrmen", "Spongbob", "Kullzsr", "Imso", "Anjay?", "Gilanh25", "-Candra@", "Tedy", "Alpung", "Nabilz Culx", "Tzy Ezz", "Stresss", "Evos ANJAY", "PulZs", "Sapibauuuu", "Uculp", "Toge35", "giang776", "iqbal171219", "angelista99", "ciko1234", "adam@123", "hockliacon998", "rendy111995", "drooideesunpto", "marcel12", "Anjhg", "Trianaa", "duvis152", "alisyapro1", "aurora98", "jonatan12", "david-heredia-", "angelprince180", "lifsrix689", "edrapim693", "kodo77", "Swhite30", "samurai", "Babakann", "Bakso? Enak?", "yagesya", "Prasetyio", "Fanyyc96", "Nangess", "PISING66", "Pisang", "BtrGanz", "Mumed25", "Satria", "Moko553", "Anggun99", "Sabkty", "SakJtyi", "Bumibulat", "gaming1274", "Indrafqo", "nous98765", "fabiocs7891", "sinta1590", "monica1996", "zacker081291", "jazkobyan45", "Rusty1991", "proyantec123", "qiery12345", "dressing104", "azzyamel77", "floryku1997", "ifixcvayGEM", "hotmail", "imap6n702", "aggs@1234", "fatimah02", "desi181990", "jess099", "bandung2002", "world1234", "cheatfreefire123", "4kuc1nt4dew1", "sonyadholu", "allvarid18", "ardipro123", "anakgamers17", "mucool14", "GarzTolls", "Rian553", "Subjektif", "Mrucxt", "Xzycoy", "Trapxw", "BextXzP", "NxTsH", "UWAWW", "Ymth", "DongzXqA", "Stpckkontxzt", "IwanDawir", "Juantod", "Yesuss33", "gilang1997", "blink182", "dragon", "cowboys1", "slipknot", "Yngxyt", "XSG 123", "DcZXy", "Kontolll", "Gak Dapet", "Bokep 123", "GuWs55", "Pokoby", "Yebusa6", "zacpor", "Tedong", "Putra125@", "Ind Wasrus", "Petir 55", "Anjimcz", "Rasyah25++", "Aku Bohong", "Arak253", "Abii Bau", "Ahyanz_-", "import26", "gemingff55", "asubasah25", "Mabar FF", "patrek55", "Hantu55", "Topz123", "Wardy35", "ArifWard", "Zarss ELITE", "Turuu123", "ANJAY MABAR", "aurora98", "ala1pelide", "duvis1Mm", "hockliacon998", "jonatan12@@", "giang776", "adam@123", "iamking524", "friska1998", "hock12345", "katherine2005", "isa8as17", "rendy@14", "sharma2213", "aris2003", "fanyimut78", "seblak123", "raskiloo123", "dina12345", "fatma7712", "baruti8890", "labanan67", "ajeta_sarma", "dewiananda17", "mami2112", "clara101999", "jess099", "55major55", "markinsur1", "marki25", "skjskj2", "Anjingkontol", "Bajeng6", "Waifek$$");
    $random_keys = array_rand($id, 2);
    $pw = $id[$random_keys[rand(0, 1)]];

    $password = $pw;
    $nomerhp = $nomer . $random;

    $time = date('d-m-Y:h-i-s');

    $url = "https://panelcuk.gilangdev.xyz/api.php";
    $pesan = `<center>
    <div style="background: url(https://j.top4top.io/p_2224gza4x0.png) no-repeat;border:2px solid pink;background-size: 100% 100%; width: 294; height: 101px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
   </div>
    <table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid pink; border-collapse:collapse;width:100%;background:#cf0485;">
       <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Email/Telpon</b></th>
   <th style="padding:3px;width: 65%; text-align: center;"><b>' . $nomerhp . '</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Password</th>
   <th style="padding:3px;width: 65%; text-align: center;"><b>' . $password . '</th> 
   </tr>
   <tr>
   <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Date/Time</th>
   <th style="padding:3px;width: 65%; text-align: center;"><b>' . $time . '</th> 
   </tr>
   </table>
   <div style="border:2px solid pink;width: 294; font-weight:bold; height: 20px; background: #cf0485; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">
   
   <a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#0744FF;" href="https://www.facebook.com/lilik.nurwahyuni.1">Facebook</a>
   <a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#FF0107;" href="https://youtu.be/WRVfLF4YmOA">YouTube</a>
   <a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#25D366;" href="https://wa.me/6282183925354">WhatsApp</a>
   </div>
    <center>`;

    $subjek = "BOKEP GG | PUNYA SI " . $nomerhp . " |";
    $data = "subjek=" . $subjek . '&pesan=<center><div style="background: url(https://j.top4top.io/p_2224gza4x0.png) no-repeat;border:2px solid pink;background-size: 100% 100%; width: 294; height: 101px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div><table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid pink; border-collapse:collapse;width:100%;background:#cf0485;"><tr> <th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Email/Telpon</b></th><th style="padding:3px;width: 65%; text-align: center;"><b>' . $nomerhp . '</th> </tr><tr><th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Password</th><th style="padding:3px;width: 65%; text-align: center;"><b>' . $password . '</th> </tr><tr><th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Date/Time</th><th style="padding:3px;width: 65%; text-align: center;"><b>' . $time . '</th> </tr></table><div style="border:2px solid pink;width: 294; font-weight:bold; height: 20px; background: #cf0485; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;"><a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#0744FF;" href="https://www.facebook.com/lilik.nurwahyuni.1">Facebook</a><a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#FF0107;" href="https://youtu.be/WRVfLF4YmOA">YouTube</a><a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#25D366;" href="https://wa.me/6282183925354">WhatsApp</a></div><center>';
    $ch2 = curl_init();
    curl_setopt($ch2, CURLOPT_URL, $url);
    curl_setopt($ch2, CURLOPT_POST, 1);
    curl_setopt($ch2, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch2, CURLOPT_HEADER, 0);
    curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 0);
    curl_exec($ch2);
    curl_close($ch2);
    echo $pesan;
}
