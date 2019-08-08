<?php include "app.head.php"; ?>
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
								<th>Tipo</th>
								<th>Denominacion</th>
								<th>Ruta Padre</th>
				</tr>
				</thead>

				<tfoot>
				<tr>
								<th>Icono</th>
								<th>Denominacion</th>
								<th>Ruta Padre</th>
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
<script type="application/javascript" src="lib/grid/store.js" > </script>

<script>
$( "#store" ).addClass( "current" );
</script>

</body>
</html>