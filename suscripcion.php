<form name="Form" method="post">
  <LINK REL=StyleSheet HREF="hoja.css" TYPE="text/css" MEDIA=screen>
    <script src="scripts\Validacion.js"></script>
    <h1>suscripción</h1>
    <!--<p>Nombre:<input class="campo" autofocus required></p>
    <p>Apellido:<input class="campo" required></p>
    <P>Contrase&ntildea:<input  type="password" required></P>
    <p>Direccion:<input  class="campo"  required></p>
    <p>Localidad:<input class="campo"  required></p>
    <p>A&ntildeos:<input class="campo" required></p>
    <p>Teléfono:<input class="campo" required></p>
    <p>Email:<input class="campo" placeholder="hotmail.com/ gmail.com" required></p>
    <p>Fecha Nacimiento:<input class="campo"  required></p>
     <p>CUIL:<input class="campo"  required></p> -->
    <p>CUIT:<input type="text" name="cuit" id="cuit"  required></p>
    
   
     <!--     
    <button onclick = "COLORDEFONDO()"> 
      CAMBIAR COLOR DE FONDO
  </button>
    
    
  <script>

      function changeColor(color) {
          document.body.style.background = color;
      }
        
      function COLORDEFONDO() {
          changeColor('blue');
          
          
      }     
      
      
      
  </script> 
    <p>Seleccione su provincia:</p>
    <select name="Provincia" >
      <option value="SA">Santa FE</option>
      <option value="ER">Entre Rios</option>
    </select>
    <p>Sexo:
      <input type="radio" name="hm" value="h" required> Hombre
      <input type="radio" name="hm" value="m" aria-required> Mujer
    </p>
    <p>Gustos musicales:
        <input type="radio" name="boton1" value="e"> electro
        <input type="radio" name="boton2" value="p"> pop
        <input type="radio" name="boton3" value="r"> rock
 -->
       <p>

      <input type="submit" value="Enviar" class="botones"  onclick="cuitvalido(cuit)">
      <input type="reset" value="Borrar" class="botones">
      
    </p>
  
    <div class="botonre">
      <a href="index.html" > volver a la pagina principal</a>
      </div>
      <?php 

      if (isset($_POST['enviar'])){
        echo "<div align='center'>";
        echo "Si ve este mensaje es por que ha enviado el formulario. Sus datos son:<br />";
        foreach($_POST as $KEY=>$valor){
          echo $KEY.": ";
          if ($valor==''){
            echo "sin datos";
          }else{
            echo $valor;
          }
          echo "<br />";
        }
        echo "</div>";
      }
      
    ?>
 
</form>
