<?php

// 送信データ
$data = [
    "hogeKey1" => "hogeValue1",
    "hogeKey2" => "hogeValue2",
];

// Json に変換する
$data = json_encode($data);

// ストリームコンテクストオプションを作成し、HTTPコンテクストオプションをセット
$options = [
    "http" => [
        "method" => "POST",
        "header" => "Content-type:application/json; charset=UTF-8",
        "content" => $data,
    ]
];

//　ストリームコンテクストオプションを作成
$context = stream_context_create($options);

// POST
$contents = file_get_contents('http://localhost/api/receive.php', false, $context);

// 受信レスポンスの表示
echo $contents;