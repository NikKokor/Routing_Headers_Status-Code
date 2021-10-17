<?php
var_dump(http_response_code(302));
header("HTTP/1.1 302 Перемещено временно");
exit();