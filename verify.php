<?php
$access_token = 'MkU+cc01N+JIkMofdBG24B03DghJk1uJx3XKuJ5C4g3Bh/9LIadkZhWBErWQyM1AeyXzGX7SH2JZJXpcVNPE1Iu5xNSx7MPU5HTMI3gbvGiQUn53AZMr90F7vLGtqx3kZxjto24sXXiMcJ1dmG1T7wdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;