<?php include "app.head.php"; ?>
<?php include "app.header.php"; ?>

<body>

	<!-- < GRID -->
	<link rel="stylesheet" type="text/css" href="lib/datatables/DataTables-1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="lib/grid/service.css">
	<!-- > GRID -->

	<link rel="stylesheet" href="lib/jquery/themes/base/jquery.ui.all.css">
	<!--------------Content--------------->
	<section id="content">
		<div class="wrap-content zerogrid">
			<table id="person" class="display" cellspacing="1" width="100%">
				<thead>
				<tr>
								<th>Icono</th>
								<th>Denominacion</th>
								<th>Descripcion</th>
								<th>Clasificacion</th>
								<th>Localizacion</th>
				</tr>
				</thead>

				<tfoot>
				<tr>
								<th>Icono</th>
								<th>Denominacion</th>
								<th>Descripcion</th>
								<th>Clasificacion</th>
								<th>Localizacion</th>
				</tr>
				</tfoot>

				<tbody></tbody>
			</table>
			
		</div>
	</section>


<!--------------Footer--------------->
<?php include "app.footer.php"; ?>

<script type="application/javascript" src="lib/datatables/jQuery-3.2.1/jquery-3.2.1.min.js" ></script>
<!-- < GRID -->
<script type="application/javascript" src="lib/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js" ></script>
<script type="application/javascript" src="lib/grid/service.js" > </script>
<!-- > GRID -->

<script> $( "#service" ).addClass( "current" ); </script>

</body>
</html>