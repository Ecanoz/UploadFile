<?php

if ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" || $_FILES["file"]["type"] == "application/vnd.ms-excel" || $_FILES["file"]["type"] == "application/vnd.ms-excel.sheet.macroEnabled.12") {
    $date = new DateTime();
    $mili = $date->getTimestamp();
    $isim = 'uploads/' . $mili . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $isim);
    echo $isim;
} else {
    echo "hatadosya";
}
