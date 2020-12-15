<?
    $kime = 'yagiz@etiketinyarisi.com';
    $konu = 'Yeni Xml Talebi';
    $ileti = '<html><body>XLS URL: '.$_POST["dosya"].'Mağaza Adı: '.$_POST["magazaAdi"].'Mağaza Mail: '.$_POST["magazaMail"].'Mağaza Telefon: '.$_POST["phone"].'</body></html>';
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';

    // Ek başlıklar
    +$headers[] = 'To: Mary <yagiz@etiketinyarisi.com>';
    +$headers[] = 'From: Birthday Reminder <destek@upload.etiketinyarisi.tk>';
    $başlıklar = 'From: destek@upload.etiketinyarisi.tk' . "\r\n" .
    'Reply-To: destek@upload.etiketinyarisi.tk' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($kime, $konu, $ileti, implode("\r\n", $headers));
    echo "Mail Gönderildi";
?>