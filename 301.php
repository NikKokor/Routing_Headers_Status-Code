<?php
var_dump(http_response_code(301));
header("HTTP/1.1 301 Перемещено навсегда");
exit();