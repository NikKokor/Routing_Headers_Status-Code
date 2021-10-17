<?php
var_dump(http_response_code(505));
header("HTTP/1.1 505 Версия HTTP не поддерживается");
exit();