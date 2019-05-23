
<!-- Vista de contacto -->
<div class="w3-container" id="contact" style="margin-top:75px">
      <h1 class="w3-xxxlarge w3-text-red"><b>Contacto</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Formulario de contacto</p>
    <form action="controladores/controladorContacto.php" method="post">
      <div class="w3-section">
        <label>Nombre</label>
        <input id="nombre" class="w3-input w3-border" type="text" name="nombre" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input id="email" class="w3-input w3-border" type="text" name="email" required>
      </div>
      <div class="w3-section">
        <label>Mensaje</label>
        <input id="mensaje" class="w3-input w3-border" type="text" name="mensaje" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Enviar</button>
    </form> 
	
  </div>
	