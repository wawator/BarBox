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
exec("gpio write 0 0");
exec("gpio write 1 0");
exec("gpio write 2 0");
exec("gpio write 3 0");
exec("gpio write 4 0");
exec("gpio write 5 0");
exec("gpio write 6 0");
exec("gpio write 7 0");
exec("gpio write 8 0");
?>
 <div class="w3-container w3-center">
      <h3>Nettoyage encours</h3>
      <img src="./cleaning.jpg" alt="Avatar" style="width:60%">
      <div class="w3-section">
          <form>
    <input type="button" value="RETOURNER AU MENU" class="w3-bar-item w3-button w3-teal" onclick="window.location.href='http://192.168.1.24/admin'" style="width: 100%;height: 150px">
</form>     
             
      </div>
        
    </div>