 <?php
  

function send_LINE($msg){
 $access_token = 't2jV5X0ZiCiCNB6WYMG0b2VoUGGxIQINhV5NqLoKT3vuV+nLrDE/XVvmWp02bHlWZ9AOGoUqrT+90qcdSevyBDYaC7/lYJweqTLLyfrtXCuftTjFVjdjg4hnKzuMuxPX5NsU000aW8HzNnnHlaDn7wdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ufb1871c8c11cfc378e153abf2b425361',
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
