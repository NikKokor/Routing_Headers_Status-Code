<?php
var_dump(http_response_code(422));
header("HTTP/1.1 422 Необрабатываемый экземпляр");
exit();