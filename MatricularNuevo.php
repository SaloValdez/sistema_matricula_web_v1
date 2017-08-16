<!-- INICIO     --------------FORMULARIO DE REGISTRO ------------------------------------------------------------------>
<form name="modifica" method="POST" action="InsertarDatosEmpleado.php" >
		<table align="center">

			<tr>
				<td height="60"><b>Alumno</b></div></td>
		 <td><input type="txt" name="usuario"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
			</tr>
		<tr>

      <!-- COMBO SECCION Y GRADO -->

      <br>
<label>Grado y seccion</label>
<SELECT NAME="idNacionalidad">
      <option class="selectpicker">Seleccione una Opci�n...</option>
      <?php
      include("a_conexion.php");
      $clavebuscadah=mysql_query("select * from seccion",$conexion) or
      die("Problemas en el select:".mysql_error());
      while($row = mysql_fetch_array($clavebuscadah))
      {
      echo'<OPTION VALUE="'.$row['idSeccion'].'">'.$row['descSeccion'].'</OPTION>';
      }
      ?>
      </SELECT>

<br>




			 <td height="52"><b>Fecha</b></td>
			 <td>


  <div ng-controller="AppCtrl" style="padding: 40px;" class="datepickerdemoBasicUsage" ng-app="MyApp">
  <md-content>

    <h4>Standard date-picker</h4>
    <md-datepicker ng-model="myDate" md-placeholder="Fecha"></md-datepicker>

    <h4>Disabled date-picker</h4>
    <md-datepicker ng-model="myDate" placeholder="Enter date" disabled=""></md-datepicker>

    <h4>Date-picker with min date and max date</h4>
    <md-datepicker ng-model="myDate" placeholder="Enter date" md-min-date="minDate" md-max-date="maxDate"></md-datepicker>
  </md-content>
  </div>



 </div>
</div>



			 </td>
		 </tr>
     <tr>
 			 <td height="52"><b>CODIGO</b></td>
 			 <td><input type="txt"name="codigo"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
 		 </tr>
     <tr>
 			 <td height="52"><b>ID ALUMNO</b></td>
 			 <td><input type="txt"name="alumno"size="25"value="" onkeyup="javascript:this.value=this.value.toUpperCase();"/></td>
 		 </tr>

	 <tr>
		 <tr>
		 <td height="48" colspan="2"><center><input class="boton" type="submit" name="guardar" value="Guardar"/></center></td>
		 </tr>
		</table>
		</form>
