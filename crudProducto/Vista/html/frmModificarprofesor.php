<br><br><br><br><br><br><br><br><br>
<form action="CactualizarProfesor.php?doc_prof=<?php echo $matrizProfesor[0]['doc_prof'];?>" method="post">
    <center>
      <table width="200" border="1">
        <tr>
          <td>Documento del Profesor</td>
          <td><label for="doc_prof"></label>
            <input type="text" name="doc_prof" id="doc_prof" value ="<?php echo $matrizProfesor[0]['doc_prof'];?>" readonly />
          </td>
        </tr>
        <tr>
          <td>Nombre del Profesor</td>
          <td><label for="nom_prof"></label>
            <input type="text" name="nom_prof" id="nom_prof" value ="<?php echo $matrizProfesor[0]['nom_prof'];?>" />
          </td>
        </tr>
        <tr>
          <td>Apellido del Profesor</td>
          <td><label for="ape_prof"></label>
            <input type="text" name="ape_prof" id="ape_prof" value ="<?php echo $matrizProfesor[0]['ape_prof'];?>" />
          </td>
        </tr>
        <tr>
          <td>Categoria</td>
          <td><label for="Categoria"></label>
            <input type="text" name="cate_prof" id="Categoria" value ="<?php echo $matrizProfesor[0]['cate_prof'];?>"/>
          </td>
        </tr>
        <tr>
          <td>Salario</td>
          <td><label for="Salario"></label>
            <input type="text" name="sal_prof" id="Salario" value ="<?php echo $matrizProfesor[0]['sal_prof'];?>"/>
          </td>
        </tr>
        
          <tr>
          <td>&nbsp;</td>
          <td><input name="modificar" type="submit" id="modificar" value="modificar" /></td>
        </tr>
      </table>
    </center>
  </form>