
<!-- Vista Consulta -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Consulta de encomiendas.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Ingresar codigo del pedido a consultar</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
          <label><em><b>Codigo Encomienda:</b></em></label><input class="w3-input w3-border" type="text" name="codigo" required>
        <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Consultar</button>
      </div>
      
   <!--tabla de informacion pedido-->
   <div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>100000</td>
            <td>Matias O.</td>
            <td>09/07/1988</td>
            <td>En Planta Cep</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>100000</td>
            <td>Matias O.</td>
            <td>09/07/1988</td>
            <td>En Planta Cep</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>100000</td>
            <td>Matias O.</td>
            <td>09/07/1988</td>
            <td>En Planta Cep</td>
          </tr>
        </tbody>
      </table>
        </div>    
    </form>  
	  </div>
  
  	
	