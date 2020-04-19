<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 0 out");
exec("gpio mode 1 out");
exec("gpio mode 2 out");
exec("gpio mode 3 out");
exec("gpio mode 4 out");
exec("gpio mode 5 out");
exec("gpio mode 6 out");
exec("gpio mode 7 out");
exec("gpio mode 8 out");
exec("gpio write 0 1");
exec("gpio write 1 1");
exec("gpio write 2 1");
exec("gpio write 3 1");
exec("gpio write 4 1");
exec("gpio write 5 1");
exec("gpio write 6 1");
exec("gpio write 7 1");
exec("gpio write 8 1");
?>

<div class="w3-container w3-center">
      <h3>RETOURNER AU MENU</h3>
      <div class="w3-section">
          <form>
    <input type="button" value="RETOURNER AU MENU" class="w3-bar-item w3-button w3-teal" onclick="window.location.href='http://192.168.1.24/admin'" style="width: 100%;height: 150px">