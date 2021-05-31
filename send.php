<?php

// 送信データ
$data = [
    "name" => "hideru",
    "age" => "28",
];

// JSONに変換
$data = json_encode($data);

// ストリームコンテクストオプションを作成し、HTTPコンテクストオプションをセット
$options = [
    'http' => [
        'method'=> 'POST',
        'header'=> 'Content-type: application/json; charset=UTF-8',
        'content' => $data
    ]
];

// ストリームコンテキストの作成
$context = stream_context_create($options);

// POST
$contents = file_get_contents('http://localhost/myapps/JsonTest/receive.php', false, $context);
//$contents = file_get_contents('http://enin-world.sakura.ne.jp/test_php/json/receive.php', false, $context);

// receive.php のレスポンスを表示
echo $contents;