<?php
var_dump(http_response_code(500));
header("HTTP/1.1 500 Внутренняя ошибка сервера");
exit();