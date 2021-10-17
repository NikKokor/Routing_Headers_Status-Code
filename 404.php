<?php
var_dump(http_response_code(404));
header("HTTP/1.1 404 Не найдено");
exit();