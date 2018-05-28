<?php

$url=$_POST["urlChoosed"];

$file_headers = @get_headers($url);
if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
    $exists = false;
}
else {
    header("location: ".$url);
}
/*if (!$fp = curl_init($url)){
    header("location: ../userPage/home.php");
}
else{
    header("location: ".$url);
}*/


