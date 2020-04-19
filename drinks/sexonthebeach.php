<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
exec("gpio mode 0 out"); // GPIO 0 - Relay 1 : Vodka 
exec("gpio mode 3 out"); // GPIO 3 - Relay 4 : Schnaps à la pêche
exec("gpio mode 4 out"); // GPIO 4 - Relay 5 : Jus d'orange
exec("gpio mode 6 out"); // GPIO 6 - Relay 7 : Jus de Cranberry
exec("gpio write 0 0");
exec("gpio write 3 0");
exec("gpio write 4 0");
exec("gpio write 6 0");
sleep (20);
exec("gpio write 3 1");
sleep (20);
exec("gpio write 0 1");
sleep (1);
exec("gpio write 4 1");
sleep (1);
exec("gpio write 6 1");
?>

  <div class="w3-container w3-center">
      <h3>Votre Sex on the Beach est prêt</h3>
      <div class="w3-section">
          <form>
    <input type="button" value="RETOURNER AU BAR" class="w3-bar-item w3-button w3-teal" onclick="window.location.href='http://192.168.1.24/cocktails/'" style="width: 100%;height: 150px">
</form>     
             
      </div>
        
    </div>