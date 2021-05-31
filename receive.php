<?php

// POSTデータ読込
$json_string = file_get_contents("php://input");

// JSON形式で表示
echo "POST成功！:".$json_string;