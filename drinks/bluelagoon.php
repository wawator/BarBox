<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 0 out"); // GPIO 0 - Relay 1 : Vodka 
exec("gpio mode 2 out"); // GPIO 2 - Relay 3 : Curaçao Bleu
exec("gpio mode 5 out"); // GPIO 5 - Relay 6 : Limonade
exec("gpio write 0 0");
exec("gpio write 2 0");
exec("gpio write 5 0");
sleep (30);
exec("gpio write 0 1");
sleep (1);
exec("gpio write 2 1");
sleep (89);
exec("gpio write 2 1");
?>

  <div class="w3-container w3-center">
      <h3>Votre Blue Lagoon est prêt</h3>
      <div class="w3-section">
          <form>
    <input type="button" value="RETOURNER AU BAR" class="w3-bar-item w3-button w3-teal" onclick="window.location.href='http://192.168.1.24/cocktails/'" style="width: 100%;height: 150px">
</form>     
             
      </div>
        
    </div>