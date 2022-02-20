 <?php
  

function send_LINE($msg){
 $access_token = 'tdYHSECE1UO/HSI+b3hRotEt9FrAJjmJ+v4jeLYN32Cd6kC/kAqtlCmrp3rQ11ls49x/P02B0SpiSpwC9AZzwstI3VY90gLoIN1R90IeYNcKtnP1gvvRcb1O+Q2iQD8azTR/Hfs/1mJgrX0oeDLrVwdB04t89/1O/w1cDnyilFU='; 

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
