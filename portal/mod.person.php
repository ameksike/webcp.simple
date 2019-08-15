<?php
/*
 *
 * @package: Simple Web Corporative Portal
 * @version: 0.1
 * @authors: Antonio Membrides Espinosa
 * @mail: tonykssa@gmail.com
 * @created: 23/4/2011
 * @updated: 23/4/2011
 * @license: GPL v3
 * @require: PHP >= 5.2.*
 *
 */
 include "app.head.php"; ?>
<?php include "app.header.php"; ?>

<body>

	<!-- < GRID -->
	<link rel="stylesheet" type="text/css" href="lib/datatables/DataTables-1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="lib/grid/person.css">
	<!-- > GRID -->

	<link rel="stylesheet" href="lib/jquery/themes/base/jquery.ui.all.css">

	<!--------------Content--------------->
	<section id="content">
		<div class="wrap-content zerogrid">
			<table id="person" class="display" cellspacing="1" width="100%">
				<thead>
				<tr>
					<th></th>
					<th width="10%">Foto</th>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Alias</th>
					<th>Sexo</th>
					<th>Usuario</th>
					<th>Dominio</th>
					<th>Empresa</th>
					<th>Departamento</th>
					<th>Cargo</th>
					<th>Categor&iacute;a</th>
				</tr>
				</thead>

				<tfoot>
				<tr>
					<th></th>
					<th>Foto</th>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Alias</th>
					<th>Sexo</th>
					<th>Usuario</th>
					<th>Dominio</th>
					<th>Empresa</th>
					<th>Departamento</th>
					<th>Cargo</th>
					<th>Categor&iacute;a</th>
				</tr>
				</tfoot>

				<tbody></tbody>
			</table>
			
		</div>
	</section>
<!--------------Footer--------------->
<?php include "app.footer.php"; ?>


<div id="dialog" title="Foto"> </div>

<!--script type="application/javascript" src="lib/datatables/jQuery-3.2.1/jquery-3.2.1.min.js" ></script-->
<script type="application/javascript" src="lib/jquery/jquery-1.9.1.js"></script>
<script type="application/javascript" src="lib/jquery/ui/jquery.ui.core.js"></script>
<script type="application/javascript" src="lib/jquery/ui/jquery.ui.widget.js"></script>
<script type="application/javascript" src="lib/jquery/ui/jquery.ui.mouse.js"></script>
<script type="application/javascript" src="lib/jquery/ui/jquery.ui.draggable.js"></script>
<script type="application/javascript" src="lib/jquery/ui/jquery.ui.position.js"></script>
<script type="application/javascript" src="lib/jquery/ui/jquery.ui.resizable.js"></script>
<script type="application/javascript" src="lib/jquery/ui/jquery.ui.button.js"></script>
<script type="application/javascript" src="lib/jquery/ui/jquery.ui.dialog.js"></script>

<!-- < GRID -->
<script type="application/javascript" src="lib/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js" ></script>
<script type="application/javascript" src="lib/grid/person.js" > </script>
<!-- > GRID -->

<script>
$( "#person" ).addClass( "current" );
</script>

</body>
</html>