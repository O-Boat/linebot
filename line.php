 <?php
  

function send_LINE($msg){
 $access_token = 'MQURyh9ah6k+xg13oa1lC/beEK1TCOgUBXoRl84yO6ig3ay/XeRbO2njVxSs8qI6bz7YTph2RKmEaA8iQLFo9BzK08LQXIfODnv3EmYI42ud52NutXkaXAOMZrkCElWxhtXCQZZ9ftRC2P9VMrUY7wdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U20243ccc817329f6b919c37ad1f50d52',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
