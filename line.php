 <?php
  

function send_LINE($msg){
 $access_token = 'cgN0cf3ZSA9J4zAPWjAiWxH/phsJKY/avPZ8bWAo8JFEzVLvH1AJ+6T5MCb25RfiroKnmuNnmKpM24pE1cjbWy2B70yc8zh8Abgl/oJGh2xT+gpdMeJMUm4TU8AVT2kW40qw0p1zToJvf68t2Yk7SQdB04t89/1O/w1cDnyilFU=
'; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U165e0cb0e9da35a2830bd3886dfdcd79',
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
