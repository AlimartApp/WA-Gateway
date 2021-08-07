<?php
        include 'koneksi.php';
        // if(isset($_POST['submit'])){
          $data = mysqli_query($koneksi,"SELECT * FROM test"); //Example Table database
          while($d = mysqli_fetch_array($data)){
          $chatApiToken = "Your API Key"; // Get it from https://www.phphive.info/255/get-whatsapp-password/
          //http://chat-api.phphive.info/login/gui
          $number = '6288888888'; // Number Example
          $number = $d['no_telp'];
          // $username = $d['username'];
          $caption = "test"; // Message
          $url = "image"; //URL Images
            
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'http://chat-api.phphive.info/message/send/image',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS =>json_encode(array(
                "caption" => $caption,
                "jid" => $number."@s.whatsapp.net",
                "url" => $url)),
              CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$chatApiToken,
                'Content-Type: application/json'
              ),
            ));
            
          $response = curl_exec($curl);
          curl_close($curl);
      }
      // header('Location: index.php');
    ?>
