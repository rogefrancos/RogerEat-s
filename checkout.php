<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\styles2.css" type="text/css">
    <title>Roger Eat's</title>
</head>
<body>
    <ul>
        <li> <a href="index.html">Roger Eat's</a></li>
        <li style="float:right"> <a class="active" href="checkout.php"><img src="images/shopppingicon.png" alt="shopppingicon" style="width:35px;height:35px;"></a></li>
    </ul>

    <br><br><br><br>


    <div class="row">
        <div class="col-75">
          <div class="container">

            
              <div class="row">
                <div class="col-50">
                  <h3>Detalles de Entrega</h3>
                  <label for="fname"><i class="fa fa-user"></i> Nombre completo</label>
                  <input type="text" id="fname" name="firstname" required>
                  <label for="adr"><i class="fa fa-address-card-o"></i> Direccion</label>
                  <input type="text" id="adr" name="address"required>
                  <label for="cel"><i class="fa fa-celnum-card-o"></i>Numero telefonico</label>
                  <input type="text" id="cel" name="celnum"required>
                  <label for="city"><i class="fa fa-institution"></i> Ciudad</label>
                  <input type="text" id="city" name="city" placeholder="Celaya"required>
      
                  <div class="row">
                    <div class="col-50">
                      <label for="state">Estado</label>
                      <input type="text" id="state" name="state" placeholder="GTO"required>
                    </div>
                    <div class="col-50">
                      <label for="zip">C.P</label>
                      <input type="text" id="zip" name="zip" required>
                    </div>
                  </div>
                </div>
      
                <div class="col-50">
                  <h3>Forma de pago</h3>
                  <label for="cname">Nombre en la tarjeta</label>
                  <input type="text" id="cname" name="cardname"required>
                  <label for="ccnum">Numero de la tarjeta</label>
                  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"required>
                  <label for="expmonth">Mes de expiracion</label>
                  <input type="text" id="expmonth" name="expmonth" placeholder="06"required>
                  <div class="row">
                    <div class="col-50">
                      <label for="expyear">Año de expiracion</label>
                      <input type="text" id="expyear" name="expyear" placeholder="2018"required>
                    </div>
                    <div class="col-50">
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="352"required>
                    </div>
                  </div>
                </div>
                
              </div>
              <input type="submit" value="Confirmar entrega" class="btn" onclick="mostrarMensajeConfirmacion()">
              <p id="confirmationMessage" style="display: none;">Envío confirmado, nuestro repartidor se comunicara contigo via el numero telefonico brindado</p>
          </div>
        </div>
      </div>

      <script>
        // Función para mostrar el mensaje de confirmación
        function mostrarMensajeConfirmacion() {
            document.getElementById('confirmationMessage').style.display = 'block';
        }
    </script>

</body>
</html>