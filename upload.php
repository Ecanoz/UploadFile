<?php

if ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" || $_FILES["file"]["type"] == "application/vnd.ms-excel" || $_FILES["file"]["type"] == "application/vnd.ms-excel.sheet.macroEnabled.12") {
    $date = new DateTime();
    $mili = $date->getTimestamp();
    $isim = 'uploads/' . $mili . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $isim);
    // echo $isim;
    echo "Dosya Tipi Doğru";
}else{
    echo "Dosya Tipi Hatası";
}
// if (0 < $_FILES['file']['error']) {
//     echo 'Hata';
// } else {
//     // $dosyatype = $_FILES ["file"] ["type"];

//     // if(strpos($dosyatype,"XLS") || strpos($dosyatype,"XLSX") || strpos($dosyatype,"XLSM") ) 
//     // {
//     //     $date = new DateTime();
//     //     $mili = $date->getTimestamp();
//     //     $isim = 'uploads/' . $mili . $_FILES['file']['name'];
//     //     move_uploaded_file($_FILES['file']['tmp_name'], $isim);
//     //     echo $isim;        
//     // }   
//     // else {         
//     //     echo 'Dosya Tipi Hatası';        
//     // }

//     // $allowed = array('xls', 'xlsx', 'xlsm');
//     // $filename = $_FILES['file']['name'];
//     // $ext = pathinfo($filename, PATHINFO_EXTENSION);
//     // if (!in_array($ext, $allowed)) {
//     //     echo 'Dosya Tipi Hatası';
//     // } else {
//     //     echo ''
//     //     // $date = new DateTime();
//     //     // $mili = $date->getTimestamp();
//     //     // $isim = 'uploads/' . $mili . $_FILES['file']['name'];
//     //     // move_uploaded_file($_FILES['file']['tmp_name'], $isim);
//     //     // echo $isim;
//     // }
// }
