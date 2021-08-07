<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>WHATSAPP GATEWAY | ALIMART</title>
    <div class="container">
        <br>
        <a href="http://chat-api.phphive.info/login/gui" class="btn btn-primary mb-3">Login Dulu Tolol</a>
            <form class="data" method="POST">
              <button type="submit" id="click" name="submit" class="btn btn-success">Kirim</button><br>
              <small id="emailHelp" color="red">*Jangan Asal Kirim dulu Goblok</small>
            </form>
          <div id="tampil">

          </div>
            <div class="text-center">
              <footer>
                Copyright &copy Rifky Ganteng | IT/Martketing Alimart Kota Bima
              </footer>
            </div>
          </div>
          <script type="text/javascript">
            $(document).ready(function(){
              var data = $('.data').serialize();
              $('#click').on('click', function() {
                  // alert("test");
                  $.ajax({
                    url: 'proses.php',
                    type: 'POST',
                    data: data,
                    success: function() {
                      $('.tampil')
                    }
                  });
              });
            });
          </script>
</body>