<?php require_once 'heder.php';?>

	<div id="lista" class="listas">
		
		<div class="grados">
				
    
            <a href="javascript:void(0);" onclick="verPrimero();">
            <div class="forms primero">Primero<div class="verVista">ver</div>
            </div>
            </a>
            <a href="javascript:void(0);" onclick="verSegundo();">
            <div class="forms segundo">Segundo<div class="verVista">ver</div>
            </div>
            </a>
            <a href="javascript:void(0);" onclick="verTercero();">
            <div class="forms tercero">Tercero<div class="verVista">ver</div>
			</div>
            </a>
            <a href="javascript:void(0);" onclick="verCuarto();">
            <div class="forms cuarto">Cuarto<div class="verVista">ver</div>
			</div>
            </a>
			
            
            <a href="javascript:void(0);" onclick="verQuinto();">
            <div class="forms quinto">Quinto<div class="verVista">ver</div>
			</div>
            </a>

			
            <a href="javascript:void(0);" onclick="verSexto();">
            <div class="forms sexto">Sexto
                <div class="verVista">ver</div>
			</div>
            
           </a>

		</div> 

	
	</div>
	</div>

	<?php
//require_once 'js/js.php';
require_once 'view/js/vistas.php';

?>
        <!-- Vista Primero -->

	<div class="primerolista listaCaja" id="listaPrimero">
		
		<a href="javascript:void(0);" onclick="salirListas();"><div class="salir">x</div></a>
		

		<table>
            <thead>
                <tr>
                    <th>Carnet </th>
                    <th>Apellido </th>
                    <th>Nombre </th>
                    <th>Seccion </th>
                </tr>
            </thead>

            <tbody>
                <?php 
        
                    foreach($grado["primero"] as $pri){
                    echo "<tr>";
                    echo "<td>".$pri["Carnet"]."</td>";
                    echo "<td>".$pri["Apellido"]."</td>";
                    echo "<td>".$pri["Nombre"]."</td>";
                    echo "<td>".$pri["Seccion"]."</td>";
                    echo "</tr>"; }
                
                ?>
            </tbody>
        	</table>   
		
	</div>
            
    <!-- Vista Segundo -->

	<div class="segundolista listaCaja" id="listaSegundo">
		
		<a href="javascript:void(0);" onclick="salirListas();"><div class="salir">x</div></a>
		
		<table>
            <thead>
                <tr>
                    <th>Carnet </th>
                    <th>Apellido </th>
                    <th>Nombre </th>
                    <th>Seccion </th>
                </tr>
            </thead>
            <tbody>
                <?php 
        
                    foreach($grado["segundo"] as $seg){
                    echo "<tr>";
                    echo "<td>".$seg["Carnet"]."</td>";
                    echo "<td>".$seg["Apellido"]."</td>";
                    echo "<td>".$seg["Nombre"]."</td>";
                    echo "<td>".$seg["Seccion"]."</td>";
                    echo "</tr>"; }
                
                ?>
            </tbody>
        </table>   
	</div>
	
     <!-- Vista Tercero -->

	<div class="tercerolista listaCaja" id="listaTercero">
		
		<a href="javascript:void(0);" onclick="salirListas();"><div class="salir">x</div></a>
		
		<table>
            <thead>
                <tr>
                    <th>Carnet </th>
                    <th>Apellido </th>
                    <th>Nombre </th>
                    <th>Seccion </th>
                </tr>
            </thead>

            <tbody>
                <?php 
        
                    foreach($grado["tercero"] as $ter){
                    echo "<tr>";
                    echo "<td>".$ter["Carnet"]."</td>";
                    echo "<td>".$ter["Apellido"]."</td>";
                    echo "<td>".$ter["Nombre"]."</td>";
                    echo "<td>".$ter["Seccion"]."</td>";
                    echo "</tr>"; }
                
                ?>
            </tbody>
        </table>   
	</div>

     <!-- Vista Cuarto -->

	<div class="cuartolista listaCaja" id="listaCuarto">
		
		<a href="javascript:void(0);" onclick="salirListas();"><div class="salir">x</div></a>
		
		<table>
            <thead>
                <tr>
                    <th>Carnet </th>
                    <th>Apellido </th>
                    <th>Nombre </th>
                    <th>Seccion </th>
                </tr>
            </thead>

            <tbody>
                <?php 
        
                    foreach($grado["cuarto"] as $cua){
                    echo "<tr>";
                    echo "<td>".$cua["Carnet"]."</td>";
                    echo "<td>".$cua["Apellido"]."</td>";
                    echo "<td>".$cua["Nombre"]."</td>";
                    echo "<td>".$cua["Seccion"]."</td>";
                    echo "</tr>"; }
                
                ?>
            </tbody>
        </table>   
	</div>
	
     <!-- Vista Quinto -->
     
	<div class="quintolista listaCaja" id="listaQuinto">
		
		<a href="javascript:void(0);" onclick="salirListas();"><div class="salir">x</div></a>
			
		<table>
			<thead>
                <tr>
                    <th>Carnet </th>
                    <th>Apellido </th>
                    <th>Nombre </th>
                    <th>Seccion </th>
                </tr>
            </thead>

            <tbody>
                <?php 
        
                    foreach($grado["quinto"] as $qui){
                    echo "<tr>";
                    echo "<td>".$qui["Carnet"]."</td>";
                    echo "<td>".$qui["Apellido"]."</td>";
                    echo "<td>".$qui["Nombre"]."</td>";
                    echo "<td>".$qui["Seccion"]."</td>";
                    echo "</tr>"; }
                
                ?>
            </tbody>
        </table>   
	</div>

     <!-- Vista Sexto -->

	<div class="sextolista listaCaja" id="listaSexto">
		
		<a href="javascript:void(0);" onclick="salirListas();"><div class="salir">x</div>
    
    </a>
		
		<table>
            <thead>
                <tr>
                    <th>Carnet </th>
                    <th>Apellido </th>
                    <th>Nombre </th>
                    <th>Seccion </th>
                </tr>
            </thead>

            <tbody>
                <?php 
        
                    foreach($grado["sexto"] as $sex){
                    echo "<tr>";
                    echo "<td>".$sex["Carnet"]."</td>";
                    echo "<td>".$sex["Apellido"]."</td>";
                    echo "<td>".$sex["Nombre"]."</td>";
                    echo "<td>".$sex["Seccion"]."</td>";
                    echo "</tr>"; }
                
                ?>
            </tbody>
        </table>   
	</div>


</body>
</html>
