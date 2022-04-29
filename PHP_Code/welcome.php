<?php

if (isset($_POST["trackid"])) {
  $a_pixel_url = "http://" . $_POST["websitelocation"] . "/pixel.php?p=" . $_POST["trackid"] ;
  $a_pixel_html = "<img src='http://" . $_POST["websitelocation"] . "/pixel.php?p=" . $_POST["trackid"] . "'>" ;
echo "<script>function showPixel() { document.getElementById('getPixel').style.visibility = 'visible'; document.getElementById('windowlocation').value = window.location.host; };  setTimeout(showPixel, 100); </script>";
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Tracking Pixel Generator</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style type="text/css">
    <!--
    body {
      font-family: Arial, sans-serif;
      line-height: 150%;
    }

    label {
      display: block;
      margin-top: 20px;
    }

    fieldset {
      border: 0;
      background-color: #EEE;
      margin: 10px 0 10px 0;
    }

    .select {
      padding: 5px;
      font-size: 110%;
    }

    .status {
      margin: 0;
      margin-bottom: 20px;
      padding: 10px;
      font-size: 80%;
      background: #EEE;
      border: 1px dotted #DDD;
    }

    .status--ERROR {
      background-color: red;
      color: white;
      font-size: 120%;
    }

    .status--SUCCESS {
      background-color: green;
      font-weight: bold;
      color: white;
      font-size: 120%
    }

    .small {
      font-size: 0.7rem;
      font-weight: normal;
    }

    .version {
      font-size: 80%;
    }

    .form-field {
      border: 1px solid #AAA;
      padding: 8px;
      width: 280px;
    }

    .info {
      margin-top: 0;
      font-size: 80%;
      color: #777;
    }

    .submit {
      background-color: #378de5;
      border: 0;
      color: #ffffff;
      font-size: 15px;
      padding: 10px 24px;
      margin: 20px 0 20px 0;
      text-decoration: none;
    }

    .submit:hover {
      background-color: #2c6db2;
      cursor: pointer;
    }
    -->
  </style>
  <script>
function copyToClipboard(text_copy) {
  /* Get the text field */
  var copyText = document.getElementById(text_copy);

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  
  /* Alert the copied text */
  alert("Erfolgreich kopiert");
}

  </script>
  <script src="https://kit.fontawesome.com/9d51b88c78.js" crossorigin="anonymous"></script>
</head>
<body>
<p class="">
  Status: Installation erfolgreich und fertig<br/>
  <p></p>
</p>
<form action="" method="POST">
  <fieldset>
    <h1>1. Tracking Pixel 'erstellen'</h1>
  
    
    <label for="trackid">Tracking ID</label>
    <input type="text" name="trackid" class="form-field" />
    <p class="info">Gib hier eine 'Tracking ID' ein, das heißt irgendein Wort, zB 'Scammer aus Nigeria' oder auch den Namen der Person, welcher du den Link schicken möchtest, zB 'Pablo'</p>
    <input id="windowlocation" name="websitelocation" type="hidden"></input>
    <input type="submit" name="dopixel" class="submit" value="Link erstellen"/>
  </fieldset>

  <fieldset>
    <div id="getPixel" style="visibility: hidden; ">
    <h1>2. Tracking Pixel benutzen</h1>
    <p class="info">Das wär's, viel Spaß damit! Du kannst diese URL direkt weiterschicken oder als HTML-Tag auf (d)einer selbstgehosteten Website erstellen</p>
    <label>Tracking Pixel URL</label>
    <input type="text" id="a_pixel_url" value="<?php echo $a_pixel_url ?>" class="form-field" width="100%" /><i onclick="copyToClipboard('a_pixel_url');" class="fas fa-copy"></i>
    <label>Tracking Pixel HTML-Code</label>
    <input type="text" id="a_pixel_html" value="<?php echo $a_pixel_html ?>" class="form-field" width="100%" /><i onclick="copyToClipboard('a_pixel_html');" class="fas fa-copy"></i>
    </div>
  </fieldset>
</form>
<p class="version">Pixel Generator Version: 1.0</p>
</body>
</html>
                                      