<?php

$isFirefox = strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== false;

$message = $isFirefox ? "O usuário está usando o Firefox." : "O usuário não está usando o Firefox.";

$logFilePath = 'browser_log.txt';


$fileHandle = fopen($logFilePath, 'w');

fwrite($fileHandle, $message . PHP_EOL);

fclose($fileHandle);

echo "Informação armazenada com sucesso no arquivo 'browser_log.txt'.";
?>
