<?php
echo "<pre>";
print_r(getallheaders());
print_r(file_get_contents("php://input"));
echo "</pre>";