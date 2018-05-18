<?php
 require_once 'LIGA3/LIGA.php';
 //BD('localhost', 'root', '', 'base');
 $liga = LIGA('base.usuarios');
 $cols = array('*', 'Acciones'=>'<button class="borrar" data="@[0]"><img src="x.png" style="width:19px; height:19px margin top: 95px;
margin left: 190px;"/></button>');
 
 echo '<label>Filtro: <input id="filtro" name="filtro" /></label>';
 
 $props = array('nombre'=>array('class'=>'busca'), 'fecha'=>'class="busca"');
 
 HTML::tabla($liga, 'Usuarios registrados', $cols, $props);
?>
