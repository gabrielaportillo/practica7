<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Descuento de Iva</h1>
			</div>

			<div class="articulo">
				<article>
                <img src="lasimagenes/elsalario1.jpg" alt="" width="600" height="300">
                <?php
 //Implementación de la función descuento IVA
 function determinaIVA($monto){
 echo '<br>El monto descuento es: $'
 .number_format($monto*0.19,'2','.','');
 }

 //Invocando la función sin valor de retorno
 $monto=10000;
 echo '       El monto a pagar es: $'.number_format($monto,'2','.','');
 determinaIVA($monto);
?>
            <br><h2>Explicacion del problema para calcular salario</h2> <br>
					<p></p>
					<br/>
					<p>
					</p>
					<br/>
					<p>Cuando una función no devuelve valor se le llama función con retorno vacío o simplemente sin valor
de retorno; esta forma de implementación se puede usar para imprimir valores directamente. Su
formato es:
function nombre_funcion(parámetros){
 //Cuerpo de la función
}</p>

				</article>
			</div>
		<!-- {El archivo siderbar.php dentro de miplantilla} -->
		<?php include('miplantilla/sidebar.php');?> 

		</div>
	</section>
	<!-- {El archivo footer.php dentro de miplantilla} -->
	<?php include('miplantilla/footer.php');?> 
</body>
</html>