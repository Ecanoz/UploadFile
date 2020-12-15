<?
    $kime = 'emincanozbey@gmail.com';
    $konu = 'Yeni Xml Talebi';
    $ileti = 'XLS URL: '.$_POST["dosya"].'Mağaza Adı: '.$_POST["magazaAdi"].'Mağaza Mail: '.$_POST["magazaMail"].'Mağaza Telefon: '.$_POST["phone"];
    $başlıklar = 'From: destek@upload.etiketinyarisi.tk' . "\r\n" .
    'Reply-To: destek@upload.etiketinyarisi.tk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($kime, $konu, $ileti, $başlıklar);
    echo "Mail Gönderildi";
?>