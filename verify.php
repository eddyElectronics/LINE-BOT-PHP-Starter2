<?php
$access_token = 'SXnzq25+ZDop2FK9kK6gCQ8KFUm9RZb2PAd2Zmhra+uHe9qRGx876pBv/uJnOZPp+NDXg/xb0nJkXCCM/eX8QQLg1LUE2EO71H+IiwzfmBwlJjjtTcqhkbLg77t2QE+6+XG0LL5vqs44fO5HCLqNxAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
