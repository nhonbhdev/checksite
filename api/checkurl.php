<?php
$link = $_GET["link"];
$file_headers = @get_headers($link);
if (!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
    echo "{$link} ___ fail.</br>";
} else {
    echo "{$link} ___ ok.</br>";
}
?>