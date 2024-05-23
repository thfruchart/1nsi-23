<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Pendules</title>
  <script type="text/javascript">
    function showTime() {
      var date = new Date();
      var h = date.getHours();
      var m = date.getMinutes();
      var s = date.getSeconds();
      if (h < 10) {
        h = '0' + h;
      }
      if (m < 10) {
        m = '0' + m;
      }
      if (s < 10) {
        s = '0' + s;
      }
      var time = h + ':' + m + ':' + s
      document.getElementById('horloge').innerHTML = time;
      refresh();
    }

    function refresh() {
      var t = 1000; // rafraîchissement en millisecondes
      setTimeout(showTime, t);
    }
  </script>
</head>

<body onload="showTime()">
  <h1>Quelle heure est-il ?</h1>
  <h3>Heure de Paris : </h3><span id="horloge" style="background-color:#1C1C1C;color:silver;font-size:40px;"></span>
  <h3>Heure de New-York</h1><span style="background-color:#1C1C1C;color:silver;font-size:40px;">
<?php
date_default_timezone_set("America/New_York");
echo date("H:i:s") ; // Affiche l'heure
?>
  </span>
</body>

</html>
