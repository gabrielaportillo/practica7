<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Función explode</h1>
			</div>

			<div class="articulo">
				<article>
                <img src="lasimagenes/111.png" alt="" width="400" height="300">
                <br>
                <br>
                '<?php
 $hoy='2015-10-15';

 $fecha=explode('-',$hoy);
 echo 'Año: '.$fecha[0].'<br>'; //Resp: 2015
 echo 'Mes: '.$fecha[1].'<br>'; //Resp: 10
 echo 'día: '.$fecha[2]; //Resp: 15
?>
    <br><h2>Descripcion de los problemas</h2> <br>
					<p></p>
					<br/>1-sirve para convertir la moneda en otra moneda por ejemplo dolares a pesos etc.
					<p>2-solo para hacer descuento del iva.
					</p>
					<br/>
					<p>3-recibirá la información descompuesta de acuerdo al criterio, y para poder
mostrarlo al usuario deberá acceder como si fuera arreglo unidimensional.</p>

				</article>
			</div>
		<!-- {El archivo siderbar.php dentro de miplantilla} -->
		<?php include('miplantilla/sidebar.php');?> 

		</div>
	</section>
    <?php
 $email='manuel.torresr@hotmail.com';

 $correo=explode('@',$email);
 echo 'Servidor: '.$correo[1].'<br>'; //Resp: hotmail.com
 echo 'Usuario: '.$correo[0]; //Resp:manuel.torresr
?>
	<!-- {El archivo footer.php dentro de miplantilla} -->
	<?php include('miplantilla/footer.php');
	?> 
</body>
</html>