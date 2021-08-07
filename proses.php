<?php
        include 'koneksi.php';
        // if(isset($_POST['submit'])){
          $data = mysqli_query($koneksi,"SELECT * FROM member");
          while($d = mysqli_fetch_array($data)){
          $chatApiToken = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2MzA5MzIxNjQsInVzZXIiOiI2MjgxMTM5NDE0MTQ0In0.4P9h-gJHPwLyNkK1UdQuc1giA_doVRAAhp9mxwbOprw"; // Get it from https://www.phphive.info/255/get-whatsapp-password/
          //http://chat-api.phphive.info/login/gui
          // $number = '6283141076639'; // Number
          $number = $d['no_telp'];
          // $username = $d['username'];
          $caption = "[KHUSUS MEMBER]
          Hallo selamat siang Alimart Lovers..
          Kali ini menjelang Hari 17 Agustus yang akan Datang.. Alimart Kembali mengadakan event BELANJA GRATIS DAN SEPUASNYA UNTUK YANG LAHIR DI TANGGAL 17 AGUSTUS.. bagi para setia Alimart Lovers yang lahir pada tanggal 17 Agustus.. yuk ke Alimart untuk mengambil tiket nya pada tanggal 16 Agustus 2021.
          Alimart hanya menyediakan 10 Tiket..!!!! Ayoo ke Alimart Sekarang juga..!! 
          Mau ikut event cuma belum terdaftar menjadi member Alimart ? tenang aja Bagi yang belum memiliki member.. yuk sekarang ke Alimart untuk menjadi member.. murah dan mudah banget kok untuk jadi member alimart.. cukup datang ke Kasir Alimart Kota Bima membawa KTP dan No Hp kalian sudah menjadi member Alimart Lovers lo.. ayok sekarang tunggu apalagi.. info lebih lanjut klik link https://www.facebook.com/Alimart.KotaBima"; // Message
          $url = "https://scontent-sin6-4.xx.fbcdn.net/v/t39.30808-6/226303974_194118526090304_5404715090155599659_n.jpg?_nc_cat=103&ccb=1-4&_nc_sid=730e14&_nc_eui2=AeH9Y-85INTLZbteOkfmfqBFyCMMlDNc5oTIIwyUM1zmhFBZcpbrYVvSVRV4Nlbn20if1ST16wwVUjwqK8pKpWKD&_nc_ohc=4kmJA0TUlhUAX-bRfpY&_nc_ht=scontent-sin6-4.xx&oh=337671b64f5eea399413337fa1a7fee9&oe=6112B74A";
            
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
          if($response == TRUE ){
            echo $d['username'];
            echo " Sukses";
            echo "<br>";
          }else{
            echo $d['username'];
            echo " Gagal";
            echo "<br>";
          }
      }
      // header('Location: index.php');
    ?>