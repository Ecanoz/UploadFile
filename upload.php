<?php
if (0 < $_FILES['file']['error']) {
    echo 'Error: ' . $_FILES['file']['error'] . '<br>';
} else {
    $date = new DateTime();
    $mili = $date->getTimestamp();
    $isim = 'uploads/' . $mili . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $isim);
    echo $isim;
}
