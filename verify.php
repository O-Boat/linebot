<?php
$access_token = 'MQURyh9ah6k+xg13oa1lC/beEK1TCOgUBXoRl84yO6ig3ay/XeRbO2njVxSs8qI6bz7YTph2RKmEaA8iQLFo9BzK08LQXIfODnv3EmYI42ud52NutXkaXAOMZrkCElWxhtXCQZZ9ftRC2P9VMrUY7wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
